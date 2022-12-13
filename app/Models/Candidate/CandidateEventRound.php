<?php

namespace App\Models\Candidate;

use App\Models\Master\Round;
use App\Models\Master\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEventRound extends Model
{
    use HasFactory;
    protected $table = 'candidate_event_round';

 
    protected $fillable = ['candidate_event_id','candidate_round_id','amount','round_status','video_verify_by','video_verify_at','is_active'];
    protected $guarded = ['id'];

    public function candidate_event()
    {
        return $this->belongsTo(Event::class, 'candidate_event_id', 'id')->select('id','event_name','event_image','amount');
    }
	
    public function candidate_round()
    {
        return $this->belongsTo(Round::class, 'candidate_round_id', 'id')->select('id','round_number','round_name','number_of_video');
    }
}
