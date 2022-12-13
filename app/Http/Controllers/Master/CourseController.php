<?php

namespace App\Http\Controllers\Master;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Master\AcademicYear;

use App\Models\Master\DurationType;
use App\Models\Master\Level;
use App\Models\Master\Course;
use App\Models\Master\FeesCategory;
use App\Models\Master\CourseFees;
use Auth;   
use DataTables,DB;

class CourseController extends BasicController
{

    public function __construct()
    {
        $this->parent_id = 2500;
    }
    public function index(Request $request)
    {
        if (Auth::user()->cannot('view','App\\Models\Master\Course')) {
            abort(403);
        }   
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $courses =  Course::with('academic_year','duration_type','academic_level')->orderBy('id')->get();
                return Datatables::of($courses)
                ->addColumn('name',function($data){
                    return $data->short_name.' -- '.$data->full_name ;
                })
                ->addColumn('level',function($data){
                    return $data->academic_level->name;
                })
                ->addColumn('duration',function($data){
                    return $data->duration_count.' '.$data->duration_type->duration_type ;
                })
                ->addColumn('academic',function($data){
                    return $data->academic_year->academic_code;
                })
                ->addColumn('status',function($data){
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
                ->rawColumns(['action','status','level','duration','academic'])
                ->make(true);
            }
        }
        
        return view('master.course.index',compact('option_a','index'));
    }

    public function create(){
        if (Auth::user()->cannot('create','App\\Models\Master\Course')) {
            abort(403);
        } 
        $levels = Level::orderBy('name','asc')->get();
        $academic_year = AcademicYear::get();
        $duration_type = DurationType::get();
        return view('master.course.create',compact('levels','academic_year','duration_type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "academic_year" => "required",
            "academic_level" => "required",
            "duration_type" => "required",
            "short_name" => "required",
            "full_name" => "required"
        ]);
        
        try{
            $academic_year = $request->academic_year;
            $academic_level = $request->academic_level;
            $duration_type = $request->duration_type;
            $short_name = $request->short_name;
            $full_name = $request->full_name;
            $duration_count = $request->duration_count;
            $course = new Course();
            $course->academic_year_id = $academic_year;
            $course->academic_level_id = $academic_level;
            $course->duration_type_id = $duration_type;
            $course->short_name = $short_name;
            $course->full_name = $full_name;
            $course->duration_count = $duration_count;
            $course->is_active = 1;
            $course->save();

            return redirect()->back()->with('success', trans('Course has created successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    
    public function show($id){
        //
    }

    public function edit($id){
        if (Auth::user()->cannot('edit','App\\Models\Master\Course')) {
            abort(403);
        } 
        $course = Course::find($id);
        $levels = Level::orderBy('name','asc')->get();
        $academic_year = AcademicYear::get();
        $duration_type = DurationType::get();
        return view('master.course.edit',compact('course','levels','academic_year','duration_type'));  
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "academic_year" => "required",
            "academic_level" => "required",
            "duration_type" => "required",
            "short_name" => "required",
            "full_name" => "required"
        ]);
        
        try{
            $academic_year = $request->academic_year;
            $academic_level = $request->academic_level;
            $duration_type = $request->duration_type;
            $short_name = $request->short_name;
            $full_name = $request->full_name;
            $duration_count = $request->duration_count;
            $course = Course::find($id);
            $course->academic_year_id = $academic_year;
            $course->academic_level_id = $academic_level;
            $course->duration_type_id = $duration_type;
            $course->short_name = $short_name;
            $course->full_name = $full_name;
            $course->duration_count = $duration_count;
            $course->is_active = 1;
            $course->save();
            return redirect()->back()->with('success', trans('Course has updated successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
    }
    public function courseFees(Request $request,$id){
        
        $course = Course::with('academic_year','academic_level','duration_type')->find($id);
        $fees_category = FeesCategory::where('level_id',$course->academic_level_id)->get();
        $course_fees = CourseFees::select('fees_id')->where('course_id',$id)->pluck('fees_id')->toArray();
        
        return view('master.course.course_map',compact('course','fees_category','course_fees'));  
    }
    public function courseFeesStore(Request $request,$id){
        $request->validate([
            'fees_category'=>"required|array|min:1"
        ]);
        
        $course = Course::with('academic_year','academic_level','duration_type')->find($id);
        $fees_category = FeesCategory::where('level_id',$course->academic_level_id)->get();
        DB::beginTransaction();
        try{
            $course_fees_del = CourseFees::where('course_id',$id)->get();
            foreach($course_fees_del as $del){
                $del->delete();
            }
            foreach($request->fees_category as $cat){
                $check = FeesCategory::find($cat);
                if($check->id!=null){
                    $course_fees  = new CourseFees();
                    $course_fees->course_id = $id;
                    $course_fees->fees_id = $check->id;
                    $course_fees->save();
                }
            }
            DB::commit();
            return redirect()->back()->with('success',trans('Fees Add to course'));
        }catch(Excetion $e){
            DB::rollback();
            $bug = $e->getMessage();
            return redirect()->back()->with('error',$bug);
        }

        return view('master.course.course_map',compact('course','fees_category'));  
    }
    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','App\\Models\Master\Course')) {
            abort(403);
        } 
    }
}