<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AcademicYearPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function view(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(14,$permission))?true:false;
    }
    public function create(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(15,$permission))?true:false;
    }
    public function edit(User $user)
    {
        $permission = $user->getDirectPermissions()->pluck('id')->toArray();
        return (in_array(16,$permission))?true:false;
    }
}
