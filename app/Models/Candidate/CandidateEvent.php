<?php

namespace App\Models\Candidate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\Round;
use App\Models\Master\Event;

class CandidateEvent extends Model
{
    use HasFactory;
    
    protected $table = 'candidate_league';

 
    protected $fillable = ['candidate_id','league_id','event_join_datetime','is_active'];
    protected $guarded = ['id'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'league_id', 'id')->select('id','event_name','event_description','event_image','start_date','end_date','amount');
    }
}
