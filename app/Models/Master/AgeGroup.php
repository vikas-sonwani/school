<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model
{
    use HasFactory;
    protected $table = 'age_group';

 
    protected $fillable = ['group_name','group_description','min_age','max_age','is_active'];
    protected $guarded = ['id'];
    
}
