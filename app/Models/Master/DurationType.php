<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DurationType extends Model
{
    use HasFactory;
    protected $table = 'duration_type';
    protected $fillable = [];
    protected $guarded = ['id'];
    
}
