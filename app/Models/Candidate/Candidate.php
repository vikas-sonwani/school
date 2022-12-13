<?php

namespace App\Models\Candidate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';

 
    protected $fillable = ['registration_no','name','mobile','is_active'];
    protected $guarded = ['id'];
}
