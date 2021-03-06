<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Testimonial extends Model {

	use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'testimonials';
	protected $primaryKey = 'id';
	//protected $guarded = [];
	protected $hidden = ['id'];
	protected $fillable = ["client_id","testimonial","featured","priority"];
	public $timestamps = true;

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
	public function setDatetimeAttribute($value) {
        $this->attributes['datetime'] = \Date::parse($value);
    }
}