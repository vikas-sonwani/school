<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeesReceiptPolicy
{
    use HandlesAuthorization;
    public function __construct()
    {
        //
    }
    
    public function viewAny(User $user)
    {
        return true;   
    }

    public function view(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(38,$permission))?true:false;
    }

    public function create(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(39,$permission))?true:false;
    }

    
    public function edit(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(40,$permission))?true:false;
    }

   
    public function delete(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(41,$permission))?true:false;
    }

    
    public function restore(User $user)
    {
        //
    }

   
    public function forceDelete(User $user)
    {
        //
    }
}
