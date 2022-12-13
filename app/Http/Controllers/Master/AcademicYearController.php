<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Master\AcademicYear;


use Auth;   

use DataTables,DB;

class AcademicYearController extends BasicController
{
    public function __construct()
    {
        $this->parent_id = 2100;
    }

    public function index(Request $request)
    {
        if (Auth::user()->cannot('view','App\\Models\Master\AcademicYear')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        //dd($index);
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $academic_year =  AcademicYear::orderBy('id')->get();
                return Datatables::of($academic_year)
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
                ->rawColumns(['action','status'])
                ->make(true);
                }
            return view('master.academic_year.index',compact('option_a','index'));
        }else{
            return abort(404);
        }
        
    }

    public function create(){
        if (Auth::user()->cannot('create','App\\Models\Master\AcademicYear')) {
            abort(403);
        }
        return view('master.academic_year.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "academic_code" => "required",
            "academic_desc" => "required"
        ]);
        
        try{
            $code = $request->academic_code;
            $desc = $request->academic_desc;
            $activity = new AcademicYear();
            $activity->academic_code = $code;
            $activity->academic_desc = $desc;
            $activity->is_active = 1;
            $activity->save();

            return redirect()->back()->with('success', trans('Academic Year has created successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    
    public function show($id){
        //
    }

    public function edit($id){
        if (Auth::user()->cannot('edit','App\\Models\Master\AcademicYear')) {
            abort(403);
        }
        $academic_year = AcademicYear::find($id);
        return view('master.academic_year.edit',compact('academic_year'));   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "academic_code" => "required",
            "academic_desc" => "required"
        ]);
        
        try{
            $code = $request->academic_code;
            $desc = $request->academic_desc;
            $activity =  AcademicYear::find($id);
            $activity->academic_code = $code;
            $activity->academic_desc = $desc;
            $activity->is_active = 1;
            $activity->save();

            return redirect()->back()->with('success', trans('Academic Year has udpated successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
    }

    public function destroy($id)
    {
        //
    }
}