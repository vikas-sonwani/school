<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview_press_match extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'interview_press_match';

    protected $fillable = ['title','description', 'video', 'type', 'is_active'];
    protected $guarded = ['id'];  
}
