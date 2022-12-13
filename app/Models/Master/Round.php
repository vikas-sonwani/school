<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\AgeGroup;

class Round extends Model
{
    use HasFactory;
    protected $table = 'round';

 
    protected $fillable = ['round_name','round_amount','number_of_video','is_active'];
    protected $guarded = ['id'];

}
