<?php

namespace App\Models\Candidate;

use App\Models\Master\Activity;
use App\Models\Master\AgeGroup;
use App\Models\Master\Round;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLeagueRound extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'candidate_league_round';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
		'id',
        'candidate_league_id',
		'age_group_id',
		'activity_id',
		'round_id',
		'amount',
		'league_status',
		'created_at',
        'updated_at',
        'is_active'
	];

    public function candidate()
    {
        return $this->belongsTo(CandidateLeague::class, 'candidate_league_id', 'id')->select('id', 'candidate_id','league_id');
    }
	
	public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'id')->select('id', 'activity_title');
    }
	public function round()
    {
        return $this->belongsTo(Round::class, 'round_id', 'id')->select('id', 'round_name','round_number');
    }
	public function age_group()
    {
        return $this->belongsTo(AgeGroup::class, 'age_group_id', 'id')->select('id', 'group_name','min_age','max_age');
    }
     public function league_round_yoga()
    {
        return $this->hasMany(CandidateLeagueRoundYoga::class, 'league_round_id', 'id');
    }
}
