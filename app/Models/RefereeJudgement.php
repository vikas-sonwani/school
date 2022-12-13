<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate\CandidateLeagueRoundYoga;

use App\Models\Master\JudgementSheet;

class RefereeJudgement extends Model
{
    use HasFactory;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'referee_judgement';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [];
	
	protected $guarded = ['id'];

	public function uploaded()
    {
        return $this->belongsTo(CandidateLeagueRoundYoga::class, 'candidate_league_round_yoga_id', 'id');
    }

	public function judgement_sheet()
    {
        return $this->belongsTo(JudgementSheet::class, 'judgement_sheet_id', 'id');
    }
}
