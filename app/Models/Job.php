<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    
     protected $table = 'jobapplication';

    protected $fillable = ['id','name', 'phone', 'dob', 'email', 'education_level', 'experience', 'language', 'job_type', 'apply_for', 'salary_estimate', 'cv'];

    protected $guarded = ['id'];

}
