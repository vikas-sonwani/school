<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Candidate\CandidateLeague;
use App\Models\Master\League;
use App\Models\Registration;

class TeamCombination extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'teams_combination';

    protected $fillable = [];
    protected $guarded = ['id'];

    public function candidate()
    {
        return $this->belongsTo(Registration::class, 'candidate_id', 'id')->select('id', 'registration_no','name','gender');
    }
	
    public function league()
    {
        return $this->belongsTo(League::class, 'league_id', 'id')->select('id', 'league_name','start_date','end_date');
    }
	
}
