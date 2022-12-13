<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JudgementSheet extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'judgement_sheet';

    protected $fillable = [];
    protected $guarded = ['id'];

}
