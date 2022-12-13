<?php

namespace App\Models\Master;

use App\Models\Candidate\CandidateEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
 
    protected $fillable = ['activity_title','activity_desc','activity_image','is_active'];
    protected $guarded = ['id'];
    
}
