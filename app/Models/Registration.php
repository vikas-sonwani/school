<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'candidate';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [
        'candidate_type_id',
		'first_name',
		'last_name',
		'qp_name_hi',
		'mobile',
		'whatsapp',
		'email',
		'gender',
		'bloodgroup',
		'address',
		'landmark',
        'district_city',
        'state',
        'country',
        'date_of_birth',
		'dob_doc',
        'identity_id',
        'indenty_doc',
        'photo',
        'signature',
		'higher_education',
        'yoga_certificate',
        'other_qualification',
        'is_active',
        'acheivement_qualification',
		'created_at',
        'updated_at'
	];
	
	protected $guarded = ['id'];

	public function getCountry(){
        return $this->hasOne('App\Models\Country', 'id', 'countries_id');
    }

    public function getState(){
        return $this->hasOne('App\Models\State', 'id', 'states_id');
    }
    public function getCity(){
        return $this->hasOne('App\Models\District', 'id', 'districts_id');
    }
	
	
	public function state_get()
    {
        return $this->belongsTo(State::class, 'state', 'id')->select('id','states_name');
    }
	public function district_get()
    {
        return $this->belongsTo(District::class, 'district_city', 'id')->select('id','districts_name');
    }
	
	public function country_get()
    {
        return $this->belongsTo(Country::class, 'country', 'id')->select('id','country_name');
    }
	
}
