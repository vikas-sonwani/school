<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFees extends Model
{
    use HasFactory;
    protected $table = 'course_fees';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id')->select('id','short_name','full_name');
    }
    public function fees_cat()
    {
        return $this->belongsTo(FeesCategory::class, 'fees_id', 'id')->select('id','fees_category','amount');
    }
    
}
