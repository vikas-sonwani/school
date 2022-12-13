<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\AcademicYear;
use App\Models\Master\DurationType;
use App\Models\Master\Level;
use App\Models\Master\Course;
use App\Models\Master\FeesCategory;
use App\Models\Student\Student;

class FeesReceipt extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'fees_receipt';

    protected $fillable = [];
    protected $guarded = ['id'];
    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_for_id', 'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function duration_type()
    {
        return $this->belongsTo(DurationType::class, 'duration_type_id', 'id');
    }
    public function details(){
        return $this->hasMany(FeesReceiptDetails::class,'fees_receipt_id','id');
    }
    public function document(){
        return $this->hasMany(FeesReceiptDocument::class,'fees_receipt_id','id');
    }
    

}
