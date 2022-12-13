<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\FeesCategory;
use App\Models\Master\Level;
use DataTables;
use Illuminate\Support\Facades\Auth;

class FeesCategoryController extends BasicController
{
    public function __construct()
    {
        $this->parent_id = 2300;
    }
    
    public function index(Request $request)
    {   

        if (Auth::user()->cannot('view','App\\Models\Master\FeesCategory')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $fees_category =  FeesCategory::with('level')->orderBy('level_id')->get();
                return Datatables::of($fees_category)
                ->addColumn('level',function($data){
                    return $data->level->name;
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
                ->rawColumns(['level','action','status'])
                ->make(true);
            }
        }
    
        return view('master.fees_category.index',compact('option_a','index'));
    }

    public function getAgeGroup(){
        
    }

  
    public function create()
    {
        if (Auth::user()->cannot('create','App\\Models\Master\FeesCategory')) {
            abort(403);
        }
        $levels = Level::orderBy('name')->get();
        return view('master.fees_category.create', compact('levels'));
    }

    
    public function store(Request $request)
    {
        if (Auth::user()->cannot('create','App\\Models\Master\FeesCategory')) {
            abort(403);
        }
        $request->validate([
            "level_id" => "required",
            "fees_category" => "required",
            "amount" => "required"
        ]);
        try{
            $level = Level::find($request->level_id);
          
            if($level->id!=null){
                $fees_category = new FeesCategory();
                $fees_category->level_id  = $request->level_id;
                $fees_category->amount = $request->amount;
                $fees_category->fees_category     = $request->fees_category;
                $fees_category->is_active   = 1;
                $fees_category->save();
                return redirect()->back()->with('success', trans('Fees Category save successfully.'));
            }else{
                return redirect()->back()->with('error', trans('Level not found'));
            }            
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    
    public function show($id)
    {
        
    }

    public function edit($id){
        if (Auth::user()->cannot('edit','App\\Models\Master\FeesCategory')) {
            abort(403);
        }
        $fees_category = FeesCategory::find($id);
        $levels = Level::orderBy('name')->get();
        return view('master.fees_category.edit', compact('fees_category','levels'));  
    }

   
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','App\\Models\Master\FeesCategory')) {
            abort(403);
        }
        $request->validate([
            "level_id" => "required",
            "fees_category" => "required",
            "amount" => "required"
        ]);
        try{
            $level = Level::find($request->level_id);
            $fees_category = FeesCategory::find($id);
            if($level->id!=null&&$fees_category->id!=null){
                $fees_category->level_id  = $request->level_id;
                $fees_category->amount = $request->amount;
                $fees_category->fees_category     = $request->fees_category;
                $fees_category->is_active   = 1;
                $fees_category->save();
                return redirect()->back()->with('success', trans('Fees Category updated successfully.'));
            }else{
                return redirect()->back()->with('error', trans('Level not found'));
            }            
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', trans($bug));
        }
           
    }

    
    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','App\\Models\Master\FeesCategory')) {
            abort(403);
        }   
    }
}
