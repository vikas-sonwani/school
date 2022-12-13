<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\PermissionController;
use App\Http\Controllers\Users\RoleController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\SideBarPermissionController;
use App\Http\Controllers\Website\HomeController as Website;
use App\Http\Controllers\Master\AcademicYearController;
use App\Http\Controllers\Master\LevelController;
use App\Http\Controllers\Master\FeesCategoryController;
use App\Http\Controllers\Master\DurationTypeController;
use App\Http\Controllers\Master\CourseController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\FeesReceiptController;



if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}

Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   return "Cleared!";

});


Route::group(['middleware' =>['auth']],function(){
   // Route::group(['middleware' =>['permission:manage_admin|manage_developer']], function() {
        Route::get('/',[HomeController::class, 'index']);
        Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard.index');
        
        Route::resource('master/academic_year', AcademicYearController::class);
        Route::resource('master/level', LevelController::class);
        Route::resource('master/fees_category', FeesCategoryController::class);
        Route::resource('master/duration_type', DurationTypeController::class);
        Route::resource('master/course',CourseController::class);
        Route::get('master/course/{id}/fees_map',[CourseController::class,'courseFees'])->name('course.fees_map');
        Route::post('master/course/{id}/fees_map',[CourseController::class,'courseFeesStore'])->name('course.fees_map.store');
        Route::resource('student',StudentController::class);
        Route::resource('users', UserController::class);
        Route::get('/get-users',[UserController::class,'getUser']);
        Route::resource('permission', PermissionController::class);
        Route::get('/get-permission',[PermissionController::class,'getPermission']);
        Route::resource('roles', RoleController::class);
        Route::get('/get-roles',[RoleController::class,'getRoles']);
        Route::get('/sidebar_permission',[SideBarPermissionController::class, 'index'])->name('sidebar_permission.index');
        Route::get('/sidebar_permission/create',[SideBarPermissionController::class, 'create'])->name('sidebar_permission.create');
        Route::post('/sidebar_permission/create',[SideBarPermissionController::class, 'store'])->name('sidebar_permission.store');
        Route::get('/sidebar_permission/{id}/edit',[SideBarPermissionController::class, 'edit'])->name('sidebar_permission.edit');
        Route::post('/sidebar_permission/{id}/edit',[SideBarPermissionController::class, 'update'])->name('sidebar_permission.update');
        Route::get('/fees_receipt',[FeesReceiptController::class, 'index'])->name('fees_receipt.index');
        Route::get('/fees_receipt/create',[FeesReceiptController::class, 'create'])->name('fees_receipt.create');
        Route::post('/fees_receipt/create',[FeesReceiptController::class, 'createReceipt'])->name('fees_receipt.create_receipt');
        Route::post('/fees_receipt/store',[FeesReceiptController::class, 'createReceiptStore'])->name('fees_receipt.create_receipt.store');
        Route::get('/fees_receipt/{id}/view',[FeesReceiptController::class, 'viewReceipt'])->name('fees_receipt.view_receipt');
        Route::post('/fees_receipt/{id}/pending',[FeesReceiptController::class, 'pendingReceiptStore'])->name('fees_receipt.pending_receipt.store');
        Route::get('/fees_receipt/search-by-re',[FeesReceiptController::class, 'searchByEnroll'])->name('fees_receipt.search_enroll');
        Route::get('/fees_receipt/search-by-course',[FeesReceiptController::class, 'searchByCourse'])->name('fees_receipt.search_course');
        Route::get('/subs')->middleware('can:sub_only');
        // micro services
        Route::get('/get-course',[BasicController::class, 'getCourse'])->name('getcourse');
        Route::get('/get-district',[BasicController::class, 'getDistrict'])->name('getdistrict');
    //});   
});

Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');






