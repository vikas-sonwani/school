<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionActivityYoga extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'transaction_activity_yoga';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
		'id',
		'transaction_activity_id',
		'aasan_id',
		'updated_by',
		'created_at',
	];
	
	protected $guarded = ['id'];

}
