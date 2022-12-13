<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
     protected $table = 'districts';

    protected $fillable = ['districts_name','id'];
    protected $guarded = ['id'];
}
