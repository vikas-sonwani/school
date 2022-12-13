<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\Master\AcademicYear;
use App\Models\SideBarPermission;
use App\Models\SideBar;
use App\Models\Master\Level;
use App\Models\Category;
use App\Models\State;
use App\Models\District;

use App\Models\Master\Course;

use App\Models\User;
use DataTables,DB;
use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{
    public function getDistrict(Request $request){
        $parent = DB::select('select * from sidebar where parent = ?', [0]);
        
        $request->validate([
            'state_id'=>'required'
        ]);
        $district = District::select('id','districts_name')->where('states_id',$request->state_id)->get()->toArray();
        return response()->json($district, 200);
    }

    public function getCourse(Request $request){
        $request->validate([
            'level_id'=>'required'
        ]);
        $courses = Course::select('id','short_name','full_name')->where('is_active',1)->where('academic_level_id',$request->level_id)->get()->toArray();
        return response()->json($courses, 200);
    }
    public static function sideBar(){
        $user = Auth::user();
        $permission_arr = $user->getDirectPermissions()->pluck('id')->toArray();
        $sidebar_perm_arr = SideBarPermission::whereIn('permission_id',$permission_arr)->get()->pluck('sidebar_id')->toArray();
        $parent = SideBar::whereIn('id',$sidebar_perm_arr)->where('parent',0)->get();
        foreach($parent as $p){
            $children = SideBar::whereIn('id',$sidebar_perm_arr)->where('type_id',1)->where('parent',$p->id)->get();
            if(count($children)>0){
                $p->children = $children;
            }
        }
        return $parent;
        
    }
    public function indexOperation($parent){
        $user = Auth::user();
        $op_arr_a = array();
        $permission_arr =  $user->getDirectPermissions()->pluck('id')->toArray();
        $index = SideBarPermission::with('sidebar')->where('sidebar_id',$parent)->whereIn('permission_id',$permission_arr)->get()->first();
        if($index->sidebar_id==$parent){
            return $index;
        }
        return null;
    }
    public function primaryOperation(){
        $user = Auth::user();
        $op_arr_a = array();
        $permission_arr =  $user->getDirectPermissions()->pluck('id')->toArray();
        $arr_a = SideBarPermission::with('sidebar')->whereIn('permission_id',$permission_arr)->get();
        if(count($arr_a)>0){
            foreach($arr_a as $ar)
            {
                if($ar->sidebar->type_id==2&&$ar->sidebar->option_type==0&&$ar->sidebar->parent==$this->parent_id){
                    $op_arr_a[] = $ar->sidebar;   
                }
            }
        }
        return $op_arr_a;
    }

    public function secondryOperation($data){
        $user = Auth::user();
        $op_arr_a = array();
        $permission_arr =  $user->getDirectPermissions()->pluck('id')->toArray();
        $arr_a = SideBarPermission::with('sidebar')->whereIn('permission_id',$permission_arr)->get();
       ///dd($arr_a);
        $str = '';
        if(count($arr_a)>0){
            foreach($arr_a as $ar)
            {
                if($ar->sidebar->type_id==2&&$ar->sidebar->option_type==1&&$ar->sidebar->parent==$this->parent_id){
                    //dd($ar);
                    $op = $ar->sidebar;   
                    $str .= '<a href="'.route($op->route_name,$data->id).'" title="'.$op->name.'" style="width: 50px; margin-right: 20px;">
                        <span class="icon-pencil text-succes"></span>
                    </a>';        
                }
            }
        }
        //dd($str);
        return $str;
    }
}
