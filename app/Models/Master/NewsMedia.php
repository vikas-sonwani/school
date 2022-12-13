<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsMedia extends Model
{
    use HasFactory;

 	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'news_media';

    protected $fillable = ['title','description','featured_image','in_news_date', 'type', 'is_active'];
    protected $guarded = ['id'];   
}
