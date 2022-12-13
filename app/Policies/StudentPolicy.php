<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
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
        return (in_array(34,$permission))?true:false;
    }

    public function create(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(35,$permission))?true:false;
    }

    
    public function edit(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(36,$permission))?true:false;
    }

   
    public function delete(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(37,$permission))?true:false;
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
