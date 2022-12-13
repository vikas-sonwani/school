<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DataTables;
use Spatie\Permission\Models\Permission;
use Auth;

class RoleController extends BasicController
{
    public function __construct()
    {
        
        $this->middleware('auth');
        $this->parent_id = 80200;

    }

    public function index(Request $request)
    {
        if (Auth::user()->cannot('view','Spatie\Permission\Models\Role')) {
            abort(403);
        }
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        $user = Auth::user();
        
        $roles =  Role::where('created_by',$user->id)->get();
        //dd($roles);
        if($index->sidebar_id==$this->parent_id){
            if($request->ajax()){
                $roles =  Role::get();
                return Datatables::of($roles)
                ->addColumn('permissions', function($data){
                    $roles = $data->permissions()->get();
                    $temp_arr = $data->permissions()->get();
                    $badges = '';
                    foreach ($temp_arr as $key => $role) {
                        $badges .= '<span class="">'.$role->name.', </span>';
                    }
                    return $badges;
                })
                ->addColumn('action',function($data){
                    return '<a href="/roles/'.$data->id.'/edit" style="width: 50px; margin-right: 20px;">
                            <span class="icon-pencil text-succes"></span>
                        </a>';
                })
                ->rawColumns(['action','permissions'])
                ->make(true);
            }
        }
        return view('roles.index',compact('option_a','index'));
    }

    public function create()
    {
        if (Auth::user()->cannot('create','Spatie\Permission\Models\Permission')) {
            abort(403);
        }
        $user = Auth::user();
        if($user->id==1){
            $permission = Permission::orderBy('name')->get();
        }else{
            $permission_arr = $user->getDirectPermissions()->pluck('id')->toArray();
            $permission = Permission::whereIn('id',$permission_arr)->orderBy('name')->get();
        }

        return view('roles.create',compact('permission'));
    }

   
    public function store(Request $request)
    {
        if (Auth::user()->cannot('create','Spatie\Permission\Models\Role')) {
            abort(403);
        }
         $request->validate([
            'name'=>'required',
            'permission'=>'required'
        ]);
        
        try{
            $role = Role::create(['name'=>$request->name]);
            $role->givePermissionTo($request->permission);
            return redirect()->back()->with('success','Role has created successfully.');
                
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', trans($bug));
        }   
    }

    public function getRoles(){
        
    }
    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        if (Auth::user()->cannot('edit','Spatie\Permission\Models\Role')) {
            abort(403);
        }
        $role = Role::with('permissions')->find($id);
        $user = Auth::user();
        if($user->id==303){
            $permission = Permission::orderBy('name')->get();
        }else{
            $permission_arr = $user->getDirectPermissions()->pluck('id')->toArray();
            $permission = Permission::whereIn('id',$permission_arr)->orderBy('name')->get();
        }
        $selected_per = $role->permissions->pluck('id')->toArray();

        return view('roles.edit',compact('permission','role','selected_per'));
    }

    
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('edit','Spatie\Permission\Models\Role')) {
            abort(403);
        }
        $request->validate([
            'name'=>'required',
            'permission'=>'required'
        ]);
        //dd($request->permission);
        try{

            $role = Role::find($id);
        
            $role->name = $request->name;
            $role->save();
            
            $role->givePermissionTo($request->permission);
            $role->syncPermissions($request->permission);
            foreach($request->permission as $pr){
                $per = Permission::find($pr);
                $per->assignRole($role);
            }
            
            return redirect()->back()->with('success','Role has updated successfully.');
                
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', trans($bug));
        }   
    }

    
    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','Spatie\Permission\Models\Role')) {
            abort(403);
        }   
    }
}
