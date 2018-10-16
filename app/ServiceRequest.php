<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model


{	

	//use guarded to select the fields that we dont want to allow. It is the inverse of protected.
    protected $fillable = ['service', 'message', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
