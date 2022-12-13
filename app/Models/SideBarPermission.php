<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\AcademicYear;
use App\Models\Master\DurationType;
use App\Models\Master\Level;
use App\Models\Master\Course;
use App\Models\Master\FeesCategory;
use App\Models\Sidebar;
use App\Models\Student\Student;
use Spatie\Permission\Models\Permission;

class SideBarPermission extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'sidebar_permission_map';

    protected $fillable = [];
    protected $guarded = ['id'];
    public function permission()
    {
        return $this->belongsTo(permission::class, 'permission_id', 'id');
    }
    public function sidebar()
    {
        return $this->belongsTo(Sidebar::class, 'sidebar_id', 'id');
    }
    
}
