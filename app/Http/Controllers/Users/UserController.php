<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;
use DB,Auth;
class UserController extends BasicController
{
    public function __construct()
    {
        $this->parent_id = 80100;
    }
    
    public function index(Request $request)
    {   

        if (Auth::user()->cannot('view','App\\Models\User')) {
            abort(403);
        }
        $user = Auth::user();
        $option_a = array();
        $option_a = $this->primaryOperation();
        $index = $this->indexOperation($this->parent_id);
        
        if($index->sidebar_id==$this->parent_id){
            $users  = User::select('id','name','email')->orderBy('id','desc')->get();
            if($request->ajax()){    
                return Datatables::of($users)
                
                ->addColumn('action',function($data){
                    $str = $this->secondryOperation($data);
                    return $str;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        }
        return view('users.index',compact('option_a','index'));
    }

    
    public function create()
    {
        if (Auth::user()->cannot('create','App\\Models\User')) {
            abort(403);
        }
        $roles = Role::get();
        return view('users.create',compact('roles'));
    }
    
    public function getUser(){
        
    }

    public function store(Request $request)
    {
        if (Auth::user()->cannot('create','App\\Models\User')) {
            abort(403);
        } 
        $request->validate([
            'name'     => 'required | string ',
            'email'    => 'required | email | unique:users',
            'password' => 'required ',
            'role'     => 'required',
        ]);
        
        try
        {
            // store user information
            $user = User::create([
			    'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $roles = Role::find($request->role);
            $user->assignRole($request->input('role'));
            $user->syncRole($request->input('role'));
            
            $user->givePermissionTo($roles->permissions);
            $user->syncPermissions($roles->permissions);

            if($user){ 
                return redirect->back()->with('success', 'User created succesfully!');
            }else{
                return redirect()->back()->with('error', 'Failed to create new user! Try again.');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
        
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {   
        if (Auth::user()->cannot('edit','App\\Models\User')) {
            abort(403);
        }
        $user = User::find($id);
        $roles = Role::get();
        $userRole = $user->roles->pluck('id')->all();
        return view('users.edit',compact('user','roles','userRole'));
    
    }

    public function update(Request $request, $id)
    {   
        if (Auth::user()->cannot('edit','App\\Models\User')) {
            abort(403);
        }
         $request->validate([
            'name'     => 'required | string ',
            'email' => 'required|email|unique:users,email,'.$id,
            'role'     => 'required',
        ]);
        if($request->password!=''&&$request->confirm_password!=''){
                if($request->password!=$request->confirm_password){
                    return redirect()->back()->with('error','Confirm Password does not match.');
                }
        }
        DB::beginTransaction();
        try
        {
            
            $user = User::with('roles')->find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password!=''&&$request->confirm_password!=''){
                if($request->password!=$request->confirm_password){
                    return redirect()->back()->with('error','Confirm Password does not match.');
                }else{
                    $user->password = Hash::make($request->password);
                }
            }
            $user->save();
            $roles = Role::find($request->role); 
            // Assign Role to user
            $user->assignRole($request->input('role'));
            // Syncronize roles to user (updating new roles)
            $user->syncRoles($request->input('role'));
            // Assign Permission To User
            $user->givePermissionTo($roles->permissions);
            // Syncronize Permission to User (updating new rols)
            $user->syncPermissions($roles->permissions);
            DB::commit();
            if($user){ 
                return redirect()->back()->with('success', 'User updated succesfully!');
            }else{
                return redirect()->back()->with('error', 'Failed to create new user! Try again.');
            }
        }catch (\Exception $e) {
            DB::rollback();
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }

   
    public function destroy($id)
    {
        if (Auth::user()->cannot('delete','App\\Models\User')) {
            abort(403);
        }   
    }
}
