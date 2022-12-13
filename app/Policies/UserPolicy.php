<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
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
        return (in_array(1,$permission))?true:false;
    }

    public function create(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(7,$permission))?true:false;
    }

    
    public function edit(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(8,$permission))?true:false;
    }

   
    public function delete(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(13,$permission))?true:false;
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
