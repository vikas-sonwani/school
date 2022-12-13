<?php

namespace App\Http\Controllers\Master;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\Level;

use DataTables,DB;

class LevelController extends BasicController
{
    public function __construct()
    {
        $this->parent_id = 2200;
    }
    
    public function index(Request $request)
    {   
        if (Auth::user()->cannot('view','App\\Models\Master\Level')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $activity =  Level::orderBy('name')->get();
                return Datatables::of($activity)
                
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
                    return '<a href="/level/'.$data->id.'/edit" style="width: 50px; margin-right: 20px;">
                                <span class="icon-pencil text-succes"></span>
                            </a>';
                })
                ->rawColumns(['action','status'])
                ->make(true);
            }
        }
        
        return view('master.level.index',compact('option_a','index'));
    }

    public function create(){
        if (Auth::user()->cannot('create','App\\Models\Master\Level')) {
            abort(403);
        }
        $user = Auth::user();
        if(!$user->can('level_create')){
            return view('master.level.create');
        }else{
            echo 'Not Authorized';
        }  
    }

    public function store(Request $request)
    {
        if (Auth::user()->cannot('create','App\\Models\Master\Level')) {
            abort(403);
        }
        $request->validate([
            "name" => "required",
            "type" => "required"
        ]);
        
        try{
            $level = new Level();
            $level->name = $request->name;
            $level->type = $request->type;
            $level->is_active = 1;
            $level->save();

            return redirect()->back()->with('success', trans('Level has created successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    
    public function show($id){
        //
    }

    public function edit($id){
        if (Auth::user()->cannot('edit','App\\Models\Master\Level')) {
            abort(403);
        }
        $level = Level::find($id);
        return view('master.level.edit',compact('level'));   
    }

   
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','App\\Models\Master\Level')) {
            abort(403);
        }
        $request->validate([
            "name" => "required",
            "type" => "required"
        ]);        
        try{
            $level =  Level::find($id);
            $level->name = $request->name;
            $level->type = $request->type;
            $level->is_active = 1;
            $level->save();
            return redirect()->back()->with('success', trans('Level has updated successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
        
            return redirect()->back()->with('error', trans($bug));
        }
     
          
    }

    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','App\\Models\Master\Level')) {
            abort(403);
        }
    }
}