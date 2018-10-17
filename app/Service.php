<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    public function getPaid()
    {
    	return "Please pay me!";
    }

    public function serviceRequests()
    {
    	return $this->hasMany(ServiceRequest::class);
    }
}
