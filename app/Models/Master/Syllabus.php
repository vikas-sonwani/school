<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'syllabus';

    protected $fillable = ['league_id','round_id','activity_id','age_group_id','is_active'];
    protected $guarded = ['id'];
   
}
