<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\AcademicYear;
use App\Models\Master\Course;
use App\Models\Master\Religion;
use App\Models\Master\Level;
use App\Models\Category;
use App\Models\State;
use App\Models\District;
use App\Models\FeesCategory;
use App\Models\Master\CourseFees;
use App\Models\Master\DurationType;
use App\Models\FeesReceipt;
use App\Models\FeesReceiptDetails;
use App\Models\FeesReceiptDocument;
use App\Models\FeesReceiptPending;
use App\Models\Student\Student;

use App\Models\User;
use DataTables,DB;

use PDF;
use Session;
use Illuminate\Support\Facades\Auth;

class FeesReceiptController extends BasicController
{
    public function __construct()
    {
        $this->parent_id = 5100;
    }
    
    public function create(Request $request){
       
        $category = Category::orderBy('name')->get();
        $levels = Level::get();
        $academic_year = AcademicYear::get();
        return view('fees_receipt.create',compact('levels','academic_year'));
    }

    public function index(Request $request){
        if (Auth::user()->cannot('view','App\\Models\Student')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $fees_receipt =  FeesReceipt::with('course','duration_type','academic_year','student');
                return Datatables::of($fees_receipt)
                ->addColumn('course',function($data){
                    return $data->course->full_name;
                })->addColumn('academic_year',function($data){
                    return $data->academic_year->academic_code;
                })->addColumn('duration',function($data){
                    return $data->duration_type->duration_type.' '.$data->duration_type_number;
                })
                ->addColumn('student',function($data){
                    return $data->student->full_name.'<br>'.$data->student->enrollment_no;
                })
                ->addColumn('status',function($data){
                    $status_str = '';
                    if($data->is_complete==1){
                        $status_str = '<span class="badge bg-success">COMPLETE</span>';
                    }else{
                        $status_str = '<span class="badge bg-danger">PENDING</span>';
                    }
                    return $status_str;
        
                })
                ->addColumn('action',function($data){
                    $str = $this->secondryOperation($data);
                    return $str;
                })
                ->rawColumns(['action','course','status','student','duration','academic_year'])
                ->make(true);
            }

        }
        
        return view('fees_receipt.index',compact('option_a','index'));
    }
    public function createReceipt(Request $request){
        //dd($request->all());
        $request->validate([
            'academic_year'=>'required',
            'academic_level'=>'required',
            'selected_std'=>'required',
            'duration_number'=>'required'
        ]);
        $session_arr = array('academic_year'=>$request->academic_year,'selected_std'=>$request->selected_std,'duration_number'=>$request->duration_number);
        session()->put('fees_receipt',$session_arr);
        $student = Student::with('course','academic_year','academic_level')->find($request->selected_std);
        $course = Course::find($student->course_id);
        $duration_type = DurationType::find($course->duration_type_id);
        $course_fees = CourseFees::with('fees_cat')->where('course_id',$student->course_id)->where('duration_type_number',$request->duration_number)->get();
        $duration_number = $request->duration_number;
        
        $academic_year = AcademicYear::get();
        return view('fees_receipt.create_receipt',compact('student','academic_year','course_fees','duration_type','duration_number'));

    }
    public function viewReceipt(Request $request,$id){
        try{
            $fees_receipt =  FeesReceipt::find($id);
            if($fees_receipt!=null){
                $student = Student::with('course','academic_year','academic_level')->find($fees_receipt->student_id);
                $course = Course::find($student->course_id);
                $duration_type = DurationType::find($course->duration_type_id);
                $course_fees = FeesReceiptDetails::with('fees_category')->where('fees_receipt_id',$fees_receipt->id)->get();
                $duration_number = $fees_receipt->duration_type_number;
                
                $academic_year = AcademicYear::get();
                return view('fees_receipt.view_receipt',compact('fees_receipt','student','academic_year','course_fees','duration_type','duration_number'));

            }else{
                return redirect()->back()->with('error','Receipt not found');
            }
            
        }catch(Exception $e){
            $bug = $e->getMessage();
            return redirect()->back()->with('error',$bug);
        }   
        
    }
    protected function pdfFooter() {
		$doc = 'FEES RECEIPT';
		$html = '
		<table width="100%">
			<tr>
				<td class="no-border" width="45%" style="text-align:left;font-size:6pt;">Print Date {DATE Y-m-d H:i:s A}</td>
				<td class="no-border" width="10%" style="font-size:6pt;" align="center">{PAGENO}/{nbpg}</td>
				<td class="no-border" width="45%" style="text-align:right;font-size:6pt;font-weight:bold;">'.$doc.'</td>
			</tr>
		</table>';
		return $html;
	}

    public function pendingReceiptStore(Request $request,$id){
       //dd($request->all());
        
        $request->validate([
            'receipt' => 'required'
        ]);
        if($request->receipt=='fees'){
            $request->validate([
                'paying_amount' => 'required',
            ]);
            DB::beginTransaction();
            try{
                $fees_receipt = FeesReceipt::find($id);
                $user_id = Auth::user()->id;
                if($fees_receipt->id!=null&&$fees_receipt->is_complete==0){
                    if($fees_receipt->is_complete==0&&$fees_receipt->pending_fees>0){
                        $fees_pending = new FeesReceiptPending();
                        $fees_pending->fees_receipt_id = $fees_receipt->id;
                        $fees_pending->previous_paid_fees = $fees_receipt->submitted_fees;
                        $fees_pending->pending_fees = $request->paying_amount;
                        $fees_pending->created_by = $user_id;
                        $fees_pending->save();
                        // Upating fees receipt
                        $paying_amount = $request->paying_amount+$fees_receipt->submitted_fees;
                        $pending_fees = $fees_receipt->total_fees-$paying_amount;
                        $fees_receipt->submitted_fees = $paying_amount;

                        if($paying_amount==$fees_receipt->total_fees||$pending_fees<=0){
                            $is_complete = 1;
                            $pending_fees = ($pending_fees<0)?0:0;
                        }else{
                            $is_complete = 0;
                        }
                        $fees_receipt->is_complete = $is_complete;
                        $fees_receipt->pending_fees = $pending_fees;
                        //dd($fees_receipt);
                        $fees_receipt->save();
                        DB::commit();
                        return redirect()->back()->with('success','Pending fees submitted successfully.');
                    }else{
                        DB::rollback();
                        return redirect()->back()->with('error','Fees already paid.');
                    }
                }else{
                    DB::rollback();
                    return redirect()->back()->with('error','Fees Receipt details not found');
                }
            }catch(Exception $ex){
                DB::rollback();
                $bug = $ex->getMessage();
                return redirect()->back()->with('error',$bug);
            }
        }else if($request->receipt=='download'){
            $this->downloadReceipt($id);
        }else{
            return redirect()->back()->with('error','Receipt not found');
        }
    
    }
    public function createReceiptStore(Request $request){
        if(session()->has('fees_receipt')){
            $user_id = Auth::user()->id;
            $session = session()->get('fees_receipt');
            $academic_year = $session['academic_year'];
			$selected_student = $session['selected_std'];
			$duration_number = $session['duration_number'];
			$student = Student::with('course','academic_year','academic_level')->find($selected_student);
    
            $course = Course::find($student->course_id);
            $duration_type = DurationType::find($course->duration_type_id);
            $course_fees = CourseFees::with('fees_cat')->where('course_id',$student->course_id)->where('duration_type_number',$duration_number)->get();
            
            $total_fees = 0;
            foreach($course_fees as $fees){
                $total_fees = $total_fees+$fees->fees_cat->amount;
            }
            $academic_year_for = $request->academic_year_for;
            $paying_amount = $request->paying_amount;
            $pending_fees = $total_fees-$paying_amount;
            $is_complete = ($pending_fees>0)?0:1;
            try{
                $check_receipt = FeesReceipt::where('academic_year_for_id',$academic_year_for)
                                        ->where('student_id',$student->id)->where('duration_type_id',$duration_type->id)
                                        ->where('duration_type_number',$duration_number)->get()->first();
                if($check_receipt!=null){
                    $fees_receipt = $check_receipt;
                    // Checking Pending Fees of already generated fees
                    $paying_amount = $paying_amount+$check_receipt->submitted_fees;
                    $pending_fees = $total_fees-$paying_amount;
                    $fees_receipt->total_fees = $total_fees;
                    $fees_receipt->pending_fees = $pending_fees;
                    $fees_receipt->submitted_fees = $paying_amount;
                    $fees_receipt->is_complete = $is_complete;
                    $fees_receipt->updated_by = $user_id;
                    $fees_receipt->save();
                }else{
                    $fees_receipt =  new FeesReceipt();
                    $fees_receipt->academic_year_for_id = $academic_year_for;
                    $fees_receipt->student_id = $student->id;
                    $fees_receipt->course_id = $student->course_id;
                    $fees_receipt->duration_type_id = $duration_type->id;
                    $fees_receipt->duration_type_number = $duration_number;
                    $fees_receipt->total_fees = $total_fees;
                    $fees_receipt->pending_fees = $pending_fees;
                    $fees_receipt->submitted_fees = $paying_amount;
                    $fees_receipt->is_complete = $is_complete;
                    $fees_receipt->created_by = $user_id;
                    $fees_receipt->save();
                    foreach($course_fees as $fees){
                        $total_fees = $total_fees+$fees->fees_cat->amount;
                        $fees_details = new FeesReceiptDetails();
                        $fees_details->fees_receipt_id = $fees_receipt->id;
                        $fees_details->fees_category_id = $fees->fees_cat->id;
                        $fees_details->fees_amount = $fees->fees_cat->amount;
                        $fees_details->created_by = $user_id;
                        $fees_details->save();
                    }
                }
                
                //dd($course_fees);
                return view('fees_receipt.show_receipt',compact('student','fees_receipt','academic_year','course_fees','duration_type','duration_number'));

            }catch(Exceiption $e){
                $bug = $e->getMessage();
                return redirect()->back()->with('error',$bug);
            }

            print_r($session);
        }else{
            return redirect()->route('fees_receipt.create');
        }
        dd($request->all());
    }
    public function downloadReceipt($id){
        $fees_receipt =  FeesReceipt::find($id);
        $student = Student::with('course','academic_year','academic_level')->find($fees_receipt->student_id);
        $course = Course::find($student->course_id);
        $duration_type = DurationType::find($course->duration_type_id);
        $course_fees = FeesReceiptDetails::with('fees_category')->where('fees_receipt_id',$fees_receipt->id)->get();
        $duration_number = $fees_receipt->duration_type_number;
        
        $fees_receipt_pending = FeesReceiptPending::where('fees_receipt_id',$fees_receipt->id)->get();
        $inst = 'FULL';
        $inst_str = '';
        if(count($fees_receipt_pending)>0&&$fees_receipt->is_complete==1){
            $inst = 'INSTALLMENT';
            foreach($fees_receipt_pending as $pnd){
                $pdtime  = date('d-m-Y H:i A',strtotime($pnd->created_at));
                $inst_str = ' <tr>
                <td style="height:30px;padding:2px 10px; border:1px solid #000;text-align:center;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.$pnd->id.'</span></td>
                <td style="height:30px;padding:2px 10px;border:1px solid #000; text-align:center;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.$pnd->pending_fees.'</span></td>
                <td style="height:30px;padding:2px 10px;border:1px solid #000; text-align:center;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.$pnd->previous_paid_fees.'</span></td>
                <td style="height:30px;padding:2px 10px;border:1px solid #000; text-align:right;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.$pdtime.'</span></td>
            </tr>';
            }
        }

        $academic_year = AcademicYear::get();
        $mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'deafult_font_size' => 8,
			'default_font' => 'hind',
		]);
        $datetime = date('d-m-Y H:i A',strtotime($fees_receipt->created_at));
        $status = ($fees_receipt->is_complete==1)?'PAID':'PENDING';
        $html  = '<div class="page">
        <div style="text-align:center;">
        
            <h4 class="highlited">INDIAN COLLEGE - KANPUR</h4>
            <h4 class="highlited">FEES RECEIPT</h4>
        </div>
        <table class="pageBreak" style="width:100%;border:1px solid #000;"  cellpading="0" cellspacing="0">
                                    
                                    <tr>
                                        <th colspan="1" style="height:30px;padding:2px 10px;text-align:left;border:1px solid #000;"> 
                                            <span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >
                                            RECEIPT NUMBER
                                            </span>
                                        </th>
                                        <td colspan="1" style="height:30px;padding:2px 10px;text-align:left;border:1px solid #000;"> 
                                            <span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >
                                           '.$student->academic_year->academic_code.'/'. $fees_receipt->id .'
                                            </span>
                                        </td>
                                        <td colspan="1" style="height:30px;padding:2px 10px;text-align:right;border:1px solid #000;"> 
                                            <span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >
                                             '.$datetime .'
                                            </span>
                                        </td>
                                    </tr>
            
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >Name:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $student->full_name.'</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >S/D/W OF:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $student->father_name .'</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >MOTHER OF:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $student->mother_name .'</span></td>
                                    </tr>
                                  
                                    <tr>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; "><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >DATE OF BIRTH:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000;" colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.   date("d-m-Y",strtotime($student->dob)) .' </span></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >COURSE:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $student->course->full_name .'</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;text-align:left;" colspan="3" ><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >DETAIL</span></td>
                                    </tr>';
                                    foreach ($course_fees as $fees ){
                                     $html.='<tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style=" font-size: 9pt; text-wrap:inherit;" >'.  $fees->fees_category->fees_category .'</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000;text-align:right; " colspan="2"><span  style=" font-size: 9pt; text-wrap:inherit;" >'.  $fees->fees_category->amount .'</span></td>
                                    </tr>';
                                    }
                                    
                                $html .= '<tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >TOTAL FEES:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000;text-align:right; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $fees_receipt->total_fees .'</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >PAID:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000;text-align:right; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $fees_receipt->submitted_fees .'</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >PENDING FEES:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000;text-align:right; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $fees_receipt->pending_fees .'</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >STATUS:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; text-align:right;" colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >'.  $status .'/'.$inst.'</span></td>
                                    </tr>
                                    
                                </table>';
                            if($inst_str!=''){
                                $html .= '<br><br>
                                <table  style="width:100%;border:1px solid #000;"  cellpading="0" cellspacing="0">
                                <tr><th colspan="4" style="height:30px;padding:2px 10px; border:1px solid #000;">PENDING FEES DETAILS</th></tr>
                                <tr><th style="height:30px;padding:2px 10px; border:1px solid #000;">PENDING RNO.</th>
                                <th style="height:30px;padding:2px 10px; border:1px solid #000;">PENDING FEES</th>
                                <th style="height:30px;padding:2px 10px; border:1px solid #000;">PREVIOUS FEES</th>
                                <th style="height:30px;padding:2px 10px; border:1px solid #000;">DATETIME</th></tr>
                                   '.$inst_str.'
                                </table>';
                            }
                    
                    $html .='</div>';



     
		$mpdf->simpleTables = true;
		$mpdf->defaultfooterline = 0;
		$mpdf->showImageErrors = true;

        // Write some simple Content
		$mpdf->SetFooter($this->pdfFooter());
        $mpdf->WriteHTML($html);
      return $mpdf->Output('FEES_RECEIPT-'.time().'.pdf', "D");

    }
    public function searchByEnroll(Request $request){
        try{
            $request->validate([
                'enrollment_no'=>'required'
            ]);
            $student = Student::select('id','full_name','father_name','enrollment_no','roll_no','mother_name')->where('is_active',1)->where('enrollment_no','like','%'.$request->course.'%')->get()->toArray();
            return response()->json($student, 200);
        }catch(Exception $e) {
            $error['error'] = true;
            $error['res'] = $e->getMessage();
            return response()->json($error, 200);
        }   
       
        
    }
    public function searchByCourse(Request $request){
        $request->validate([
            'course' => 'required'
        ]);
        $course = Course::with('duration_type')->find($request->course);
        $student = Student::select('id','full_name','father_name','enrollment_no','roll_no','mother_name')->where('is_active',1)->where('course_id',$request->course);
        if($request->name!=''){
            $student->where('full_name','like','%'.$request->name.'%');
        }  
        $student = $student->get()->toArray();
        $res['student'] = $student;
        $res['course'] = $course;
        return response()->json($res, 200);
    }

}
