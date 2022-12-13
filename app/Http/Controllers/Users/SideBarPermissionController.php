<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DataTables;
use App\Models\SideBarPermission;
use App\Models\SideBar;
use Spatie\Permission\Models\Permission;

class SideBarPermissionController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index(Request $request)
    {   
        
        if($request->ajax()){
            $roles =  SideBarPermission::with('permission','sidebar')->orderBy('sidebar_id')->get();

            return Datatables::of($roles)
            ->addColumn('permission', function($data){
                $permission = $data->permission->name;
                return $permission;
            })
            ->addColumn('sidebar', function($data){
                $sidebar = $data->sidebar->name;
                return $sidebar;
            })
           
            ->rawColumns(['action','permission','sidebar'])
            ->make(true); 
        }
        return view('sidebar_permission.index');
    }

    public function create()
    {
        $per_arr = SideBarPermission::pluck('permission_id')->toArray();
        $sidebar_arr = SideBarPermission::pluck('sidebar_id')->toArray();
        $permission = Permission::whereNotIn('id',$per_arr)->orderBy('name')->get();
        $sidebar = SideBar::whereNotIn('id',$sidebar_arr)->get();
        return view('sidebar_permission.create',compact('permission','sidebar'));
    }

   
    public function store(Request $request)
    {
         $request->validate([
            'sidebar_id'=>'required',
            'permission_id'=>'required'
        ]);
        
        try{
            $check_sidebar = SideBarPermission::where('sidebar_id',$request->sidebar_id)->get();
            if(count($check_sidebar)>0){
                return redirect()->back()->with('error','SideBar has already mapped.');
            }
            $check_permission = SideBarPermission::where('permission_id',$request->permission_id)->get();
            if(count($check_sidebar)>0){
                return redirect()->back()->with('error','Permission has already mapped.');
            }
            $sidebar_permission = new SideBarPermission();
            $sidebar_permission->sidebar_id = $request->sidebar_id;
            $sidebar_permission->permission_id = $request->permission_id;
            $sidebar_permission->save();

            return redirect()->back()->with('success','Sidebar Permission Mappped successfully.');
                
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
        $role = Role::with('permissions')->find($id);
    
        $permission = Permission::with('roles')->orderBy('name')->get();
        $selected_per = $role->permissions->pluck('id')->toArray();

        return view('roles.edit',compact('permission','role','selected_per'));
    }

    
    public function update(Request $request, $id)
    {
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
        
    }
}
