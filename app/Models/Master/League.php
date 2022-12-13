<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table = 'leagues';
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
 
    protected $fillable = ['league_name','league_description','league_image','start_date','end_date','entry_amount','is_active'];
    protected $guarded = ['id'];
    


}
