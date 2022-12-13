<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    use HasFactory;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'sidebar';

	protected $fillable = [];
	
	protected $guarded = ['id'];


}
