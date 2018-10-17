<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceRequest;

use App\User;

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

    	$servicerequests= ServiceRequest::latest()->get();

    	return view('servicerequests.index', compact('servicerequests'));

    }


    public function show(ServiceRequest $servicerequest)
    {

    	$servicerequest= ServiceRequest::find($servicerequest->id);

    	return view('servicerequests.show', compact('servicerequest'));

    }



    public function store()
    {   

        // Validate user input

        $this->validate(request(), [
            'service' => 'required',
            'message' => 'required'
        ]);

    	ServiceRequest::create([


    			'service' => request('service'),

    			'message' => request('message'),

                'user_id' => auth()->id()

    		]);



    	//Redirect to home page

    	return redirect('/');

    }


}
