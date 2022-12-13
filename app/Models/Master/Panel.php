<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'panel';

    protected $fillable = [];
    protected $guarded = ['id'];

    
    public function panel_referee()
    {
        return $this->hasMany(PanelReferee::class, 'panel_id', 'id');
    }
    
}
