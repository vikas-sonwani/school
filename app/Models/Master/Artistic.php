<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistic extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'artistic_aasan';

    protected $fillable = ['yoga_name','yoga_title','yoga_desc','is_active'];
    protected $guarded = ['id'];

}
