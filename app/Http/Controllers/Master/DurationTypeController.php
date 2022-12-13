<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\DurationType;
use Auth;
use DataTables,DB;

class DurationTypeController extends BasicController
{

    public function __construct()
    {
        $this->parent_id = 2400;
    }
    public function index(Request $request)
    {
        if (Auth::user()->cannot('view','App\Models\Master\DurationType')) {
            
            abort(403);
        }
         
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $duration_type =  DurationType::orderBy('id')->get();
                return Datatables::of($duration_type)
                
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
        }
        
        return view('master.duration_type.index',compact('option_a','index'));
    }

    public function create(){
        if (Auth::user()->cannot('create','App\\Models\Master\DurationType')) {
            abort(403);
        }
        return view('master.duration_type.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->cannot('create','App\\Models\Master\DurationType')) {
            abort(403);
        }
        $request->validate([
            "duration_type" => "required",
            "duration_desc" => "required"
        ]);
        
        try{
            $type = $request->duration_type;
            $desc = $request->duration_desc;
            $duration_type = new DurationType();
            $duration_type->duration_type = $type;
            $duration_type->duration_desc = $desc;
            $duration_type->is_active = 1;
            $duration_type->save();

            return redirect()->back()->with('success', trans('Duration has created successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    
    public function show($id){
        
    }

    public function edit($id){
        if (Auth::user()->cannot('edit','App\\Models\Master\Course')) {
            abort(403);
        }
        $duration_type = DurationType::find($id);
        return view('master.duration_type.edit',compact('duration_type'));   
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','App\\Models\Master\Course')) {
            abort(403);
        }
        $request->validate([
            "duration_type" => "required",
            "duration_desc" => "required"
        ]);
        
        try{
            $type = $request->duration_type;
            $desc = $request->duration_desc;
            $duration_type =  DurationType::find($id);
            $duration_type->duration_type = $type;
            $duration_type->duration_desc = $desc;
            $duration_type->is_active = 1;
            $duration_type->save();

            return redirect()->back()->with('success', trans('Duration Type has udpated successfully.'));
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