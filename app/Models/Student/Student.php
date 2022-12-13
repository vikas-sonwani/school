<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\AcademicYear;
use App\Models\Master\DurationType;
use App\Models\Master\Level;
use App\Models\Master\Course;
use App\Models\Master\FeesCategory;
use App\Models\Master\CourseFees;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id')->select('id','short_name','full_name');
    }
    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id')->select('id','academic_code','academic_desc');
    }
    
    public function academic_level()
    {
        return $this->belongsTo(Level::class, 'academic_level_id', 'id')->select('id','name','type');
    }

    
}
