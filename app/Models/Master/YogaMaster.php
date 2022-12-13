<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YogaMaster extends Model
{
    use HasFactory;
    
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'yoga_aasan';

    protected $fillable = ['yoga_name','yoga_title','yoga_desc','yoga_video_link','yoga_image','is_active'];
    protected $guarded = ['id'];
    
}
