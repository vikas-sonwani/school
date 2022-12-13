<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\LevelPolicy;
use App\Policies\Subs;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\Master\AcademicYear' => 'App\Policies\AcademicYearPolicy',
        'App\Models\Master\Level' => 'App\Policies\LevelPolicy',
        'App\Models\Master\FeesCategory' => 'App\Policies\CoursePolicy',
        'App\Models\Master\Course' => 'App\Policies\CoursePolicy',
        'App\Models\Master\DurationType' => 'App\Policies\DurationTypePolicy',
        'App\Models\FeesReceipt' => 'App\Policies\FeesReceiptPolicy',
        'App\Models\Student\Student' => 'App\Policies\StudentPolicy',
        'App\Models\Course' => 'App\Policies\CoursePolicy',
        'Spatie\Permission\Models\Permission' => 'App\Policies\PermissionPolicy',
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('sub_only','App\Policies\Subs@sub_only');
        //Gate::define('academic_year','App\Policies\AcademicYearPolicy@edit');
       /* Gate::define('access_academic_year',function($user){
            dd($user);
            return true;
        });*/
        
    }
}
