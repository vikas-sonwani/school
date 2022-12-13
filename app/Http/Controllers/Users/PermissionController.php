<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;
use Auth;

class PermissionController extends BasicController
{
    
    public function __construct()
    {
        
        $this->middleware('auth');
        $this->parent_id = 80300;

    }

    public function index(Request $request)
    {
        if (Auth::user()->cannot('view','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $permission =  Permission::select('name','id')->orderBy('name')->get();
                return Datatables::of($permission)
                ->addColumn('action',function($data){
                    $str = $this->secondryOperation($data);
                    return $str;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        }
        return view('permission.index',compact('option_a','index'));
    }

    
    public function create()
    {   
        if (Auth::user()->cannot('create','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $roles = Role::get();
       return view('permission.create',compact('roles'));
    }

    
    public function store(Request $request)
    {
        if (Auth::user()->cannot('store','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $request->validate([
            'name'=>'required'
        ]);
        try{
                
            $permission = Permission::create(['name'=>$request->name]);
            $permission->syncRoles($request->roles);
            return redirect()->back()->with('success', trans('Permission has created successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
        
    }
    public function getPermission(){
        
    }
    
    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        if (Auth::user()->cannot('edit','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $permission = Permission::with('roles')->find($id);
        $selected_role = $permission->roles->pluck('id')->toArray();
        $roles = Role::get();
        
        return view('permission.edit',compact('permission','roles','selected_role'));
    }

    
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $request->validate([
            'name'=>'required',
            'roles'=>'required|array|min:1'
        ]);
        
        try{ 
            $permission = Permission::find($id);
            $permission->name = $request->name;
            $permission->save();
            $permission->syncRoles($request->roles);
            return redirect()->back()->with('success', trans('Permission has updated successfully.'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }
        
    }

    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
    }
}
