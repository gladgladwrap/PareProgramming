<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model


{	

	//use guarded to select the fields that we dont want to allow. It is the inverse of protected.
    protected $fillable = ['name', 'email', 'message'];

    
}
