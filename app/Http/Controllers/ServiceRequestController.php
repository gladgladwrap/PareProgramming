<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceRequest;

class ServiceRequestController extends Controller
{
    

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
            'inputName' => 'required',
            'inputEmail' => 'required|email',
            'ClientMessage' => 'required'

        ]);

    	ServiceRequest::create([

    			'name' => request('inputName'),

    			'email' => request('inputEmail'),

    			'message' => request('ClientMessage')

    		]);


    	//Redirect to home page

    	return redirect('/');

    }


}
