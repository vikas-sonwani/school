<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundYoga extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'round_mapping';

    protected $fillable = ['round_id','activity_id','yoga_id','is_active'];
    protected $guarded = ['id'];

    public function yoga()
    {
        return $this->belongsTo(YogaMaster::class, 'yoga_id', 'id')->select('id','yoga_name','yoga_image','yoga_video_link','yoga_title','yoga_desc');
    }

}
