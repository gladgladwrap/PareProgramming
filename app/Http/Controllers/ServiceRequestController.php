<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceRequest;

use App\User;

use App\Service;

use Carbon\Carbon;


class ServiceRequestController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {   

        $servicerequests = ServiceRequest::latest()
        
        ->filter(request(['month', 'year']))
        
        ->get();

        //temporary

        $archives = ServiceRequest::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
        ->groupBy('year', 'month')

        ->orderByRaw('min(created_at) desc')

        ->get()

        ->toArray();

    	return view('servicerequests.index', compact('servicerequests', 'archives'));

    }


    public function show(ServiceRequest $servicerequest)
    {

    	$servicerequest= ServiceRequest::find($servicerequest->id);

    	return view('servicerequests.show', compact('servicerequest'));

    }


    public function filterByUser(User $user)
    {   

        $user= User::find($user->id);

        return view('servicerequests.showByUser', compact('user'));

    }


    public function services(Service $service)
    {

        $service = Service::find($service->id);

        return view('servicerequests.showByService', compact('service'));
    }



    public function store()
    {   

        // Validate user input

        $this->validate(request(), [
            'service_id' => 'required',
            'message' => 'required'
        ]);

    	ServiceRequest::create([


    			'service_id' => request('service_id'),

    			'message' => request('message'),

                'user_id' => auth()->id()

    		]);



    	//Redirect to home page

    	return redirect('/');

    }


}
