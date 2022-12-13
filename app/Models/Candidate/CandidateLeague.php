<?php

namespace App\Models\Candidate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLeague extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	const JOIN_DT = 'league_join_datetime';

	protected $table = 'candidate_league';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
		'id',
        'candidate_id',
		'league_id',
		'league_join_datetime',
		'league_status',
		'created_at',
        'updated_at',
        'is_active'
	];
	
	protected $guarded = ['id'];

	 public function league_round()
    {
        return $this->hasMany(CandidateLeagueRound::class, 'candidate_league_id', 'id');
    }

}
