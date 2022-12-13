<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateType extends Model
{
    use HasFactory;
  

   protected $table = 'candidate_type';

 
   protected $fillable = ['candidate_type','candidate_fee','candidate_description','is_active'];
   protected $guarded = ['id'];
  
   
}
