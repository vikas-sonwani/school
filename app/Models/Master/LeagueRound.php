<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueRound extends Model
{
    use HasFactory;

    protected $table = 'league_round';
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
 
    protected $fillable = ['league_id','round_id'];
    protected $guarded = ['id'];
    


}
