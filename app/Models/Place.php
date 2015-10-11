<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Place extends Model
{
    
	public $table = "places";
    

	public $fillable = [
	    "name",
		"address",
		"category",
		"schedule",
		"phone",
		"description"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"address" => "string",
		"category" => "string",
		"schedule" => "string",
		"phone" => "string",
		"description" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"address" => "required",
		"category" => "required",
		"schedule" => "required",
		"description" => "required"
	];

}
