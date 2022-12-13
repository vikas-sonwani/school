<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'transaction';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
		'id',
        'candidate_type_id',
		'candidate_id',
		'league_id',
		'round_id',
		'amount',
		'created_at',
        'updated_at',
        'is_active',
        'data',
	];
	
	protected $guarded = ['id'];
}
