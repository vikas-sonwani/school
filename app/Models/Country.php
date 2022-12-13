<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'countries';

    protected $fillable = ['country_name','id'];
    protected $guarded = ['id'];
}
