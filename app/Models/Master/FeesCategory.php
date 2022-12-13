<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesCategory extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'fees_category';

    protected $fillable = [];
    protected $guarded = ['id'];
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id')->select('id','name','type');
    }

}
