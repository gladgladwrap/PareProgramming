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


    	return view('servicerequests.index', compact('servicerequests'));

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

        session()->flash('message', 'Your service request has been submitted. You can manage your service requests by clicking on the Service Requests link in the menu above.');


    	//Redirect to home page

    	return redirect('/');

    }


}
