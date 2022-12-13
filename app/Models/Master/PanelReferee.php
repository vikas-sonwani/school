<?php

namespace App\Models\Master;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PanelReferee extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'panel_referee';

    protected $fillable = [];
    protected $guarded = ['id'];

    
    public function referee(){
        return $this->belongsTo(Registration::class, 'referee_id', 'id');
    }
    public function panel(){
        return $this->belongsTo(Panel::class, 'panel_id', 'id');
    }

}
