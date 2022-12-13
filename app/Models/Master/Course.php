<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function duration_type()
    {
        return $this->belongsTo(DurationType::class, 'duration_type_id', 'id')->select('id','duration_type');
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
