<?php

namespace App\Models\Candidate;

use App\Models\Master\YogaMaster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLeagueRoundYoga extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'candidate_league_round_yoga';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
		'id',
        'league_round_id',
		'aasan_id',
		'upload_link',
		'marks',
		'created_at',
        'updated_at'
	];

	public function aasan(){
		return $this->belongsTo(YogaMaster::class, 'aasan_id', 'id')->select('id','yoga_name','yoga_image','yoga_video_link','is_active');
	}
}
