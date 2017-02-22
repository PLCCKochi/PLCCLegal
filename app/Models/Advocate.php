<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Advocate extends Model {

	use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'advocate';
	protected $primaryKey = 'id';
	//protected $guarded = [];
	protected $hidden = ['id'];
	protected $fillable = ['name','shortname','username','title','photo','department','proexp','caption','fb','tw','li','skype','mobile','office','email'];
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
	public function setImageAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "uploads";
        $destination_path = "images/";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}