<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\AcademicYear;
use App\Models\Master\Course;
use App\Models\Master\Religion;
use App\Models\Master\Level;
use App\Models\Category;
use App\Models\State;
use App\Models\District;
use App\Models\Student\Student;

use App\Models\User;
use DataTables,DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends BasicController
{
    
    public function __construct()
    {
        $this->parent_id = 4100;
    }
    
    public function index(Request $request)
    {   
        if (Auth::user()->cannot('view','App\\Models\Student')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $student =  Student::with('course')->orderBy('full_name', 'asc');
                return Datatables::of($student)
                ->addColumn('course',function($data){
                    return $data->course->full_name;
                })->addColumn('status',function($data){
                    $status_str = '';
                    if($data->is_active==1){
                        $status_str = '<span class="badge bg-success">Active</span>';
                    }else{
                        $status_str = '<span class="badge bg-danger">Deactive</span>';
                    }
                    return $status_str;
                })
                ->addColumn('action',function($data){
                    $str = $this->secondryOperation($data);
                    
                    return $str;
                })
                ->rawColumns(['action','course','status'])
                ->make(true);
            }
        }
        return view('student.index',compact('option_a','index'));
    }

    public function create()
    {   
        if (Auth::user()->cannot('create','App\\Models\Student')) {
            abort(403);
        }
        $state = State::where('countries_id',102)->orderBy('states_name')->get();
        $category = Category::orderBy('name')->get();
        $levels = Level::get();
        $academic_year = AcademicYear::get();
        $religion = Religion::get();
        
        return view('student.create',compact('state','category','levels','academic_year','religion'));
    }

   
     public function store(Request $request)
    {
        if (Auth::user()->cannot('create','App\\Models\Student')) {
            abort(403);
        }
        try{
            $request->validate([
                'academic_year'=>'required',
                'academic_level'=>'required',
                'course_id'=>'required',
                'level_id'=>'required',
                'full_name'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'date_of_birth'=>'required',
                'gender'=>'required',
                'mobile_no'=>'required|regex:/[0-9]{10}/',
                'parent_mobile_no'=>'required|regex:/[0-9]{10}/',
                'email_id'=>'required|unique:student,email_id',
                'religion'=>'required',
                'category'=>'required',
                'caddress'=>'required',
                'cstate'=>'required',
                'cdistrict'=>'required',
                'cpincode'=>'required|numeric',
                'paddress'=>'required',
                'pstate'=>'required',
                'pdistrict'=>'required',
                'ppincode'=>'required|numeric'
            ]);

        }catch(Exception $e){
            dd($e->getMessage());
        }
        

        DB::beginTransaction();
        try{
            //For text editor code to upload image from  text editor but not working for images 
            $student = new Student();
            $student->academic_year_id = $request->academic_year;
            $student->academic_level_id = $request->academic_level;
            $student->course_id = $request->course_id;
            $student->full_name = $request->full_name;
            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->dob = $request->date_of_birth;
            $student->gender = $request->gender;
            $student->mobile_no = $request->mobile_no;
            $student->p_mobile_no = $request->parent_mobile_no;
            $student->email_id = $request->email_id;
            $student->religion_id = $request->religion;
            $student->category_id = $request->category;
            $student->caddress = $request->caddress;
            $student->cstate = $request->cstate;
            $student->cdistrict = $request->cdistrict;
            $student->cpincode = $request->cpincode;
            $student->paddress = $request->paddress;
            $student->pstate = $request->pstate;
            $student->pdistrict = $request->pdistrict;
            $student->ppincode = $request->ppincode;
            if($request->enrollment_no!=''){
                $student->enrollment_no = $request->enrollment_no;
            }
            if($request->roll_no!=''){
                $student->roll_no = $request->roll_no;
            }
            $student->save();
            DB::commit();
            return redirect()->back()->with('success', trans('Student save successfully.'));
        }catch(\Exception $e){
            DB::rollBack();
            $bug = $e->getMessage();
            
            return redirect()->route('event.create')->with('error',$bug);
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        if (Auth::user()->cannot('edit','App\\Models\Student')) {
            abort(403);
        }
        $student = Student::whereid($id)->first();
        $state = State::where('countries_id',102)->orderBy('states_name')->get();
        $cdistricts = District::where('states_id',$student->cstate)->get();        
        $pdistricts = District::where('states_id',$student->pstate)->get();

        $category = Category::orderBy('name')->get();
        $levels = Level::get();
        $academic_year = AcademicYear::get();
        $religion = Religion::get();
        $courses = Course::select('id','short_name','full_name')->where('academic_level_id',$student->academic_level_id)->get();

        return view('student.edit',compact('student','state','cdistricts','pdistricts','category','levels','academic_year','religion','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','App\\Models\Student')) {
            abort(403);
        }
        try{
            $request->validate([
                'academic_year'=>'required',
                'academic_level'=>'required',
                'course_id'=>'required',
                'level_id'=>'required',
                'full_name'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'date_of_birth'=>'required',
                'gender'=>'required',
                'mobile_no'=>'required|regex:/[0-9]{10}/',
                'parent_mobile_no'=>'required|regex:/[0-9]{10}/',
                'email_id'=>'required|unique:student,email_id',
                'religion'=>'required',
                'category'=>'required',
                'caddress'=>'required',
                'cstate'=>'required',
                'cdistrict'=>'required',
                'cpincode'=>'required|numeric',
                'paddress'=>'required',
                'pstate'=>'required',
                'pdistrict'=>'required',
                'ppincode'=>'required|numeric'
            ]);

        }catch(Exception $e){
            dd($e->getMessage());
        }
        

        DB::beginTransaction();
        try{
            //For text editor code to upload image from  text editor but not working for images 
            $student = Student::find($id);
            $student->academic_year_id = $request->academic_year;
            $student->academic_level_id = $request->academic_level;
            $student->course_id = $request->course_id;
            $student->full_name = $request->full_name;
            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->dob = $request->date_of_birth;
            $student->gender = $request->gender;
            $student->mobile_no = $request->mobile_no;
            $student->p_mobile_no = $request->parent_mobile_no;
            $student->email_id = $request->email_id;
            $student->religion_id = $request->religion;
            $student->category_id = $request->category;
            $student->caddress = $request->caddress;
            $student->cstate = $request->cstate;
            $student->cdistrict = $request->cdistrict;
            $student->cpincode = $request->cpincode;
            $student->paddress = $request->paddress;
            $student->pstate = $request->pstate;
            $student->pdistrict = $request->pdistrict;
            $student->ppincode = $request->ppincode;
            if($request->enrollment_no!=''){
                $student->enrollment_no = $request->enrollment_no;
            }
            if($request->roll_no!=''){
                $student->roll_no = $request->roll_no;
            }
            $student->save();
            DB::commit();
            return redirect()->back()->with('success', trans('Student updated successfully.'));
        }catch(\Exception $e){
            DB::rollBack();
            $bug = $e->getMessage();
            
            return redirect()->route('event.create')->with('error',$bug);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','App\\Models\Student')) {
            abort(403);
        }
    }
}
