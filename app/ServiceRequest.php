<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class ServiceRequest extends Model


{	

	//use guarded to select the fields that we dont want to allow. It is the inverse of protected.
    protected $fillable = ['service_id', 'message', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    


    public function service()
    {
        return $this->belongsTo(Service::class);
    }


    public function scopeFilter($query, $filters)
    {
        
        if (isset($filters['month']) && $month = $filters['month'])
        {

            $query->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if (isset($filters['year']) && $year = $filters['year']) {

            $query->whereYear('created_at', $year);

        }

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
        ->groupBy('year', 'month')

        ->orderByRaw('min(created_at) desc')

        ->get()

        ->toArray();
    }


}
