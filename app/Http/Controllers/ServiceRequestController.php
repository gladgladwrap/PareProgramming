<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\ServiceRequest;

use App\User;

use App\Service;

use Carbon\Carbon;

use Illuminate\Support\Facades\Gate;

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

        ->where('user_id', Auth::id())
        
        ->get();

    	return view('servicerequests.index', compact('servicerequests'));

    }


    public function show(ServiceRequest $servicerequest)
    {
        if (Gate::allows('service-requests.view', $servicerequest)) 
        {
            return view('servicerequests.show', compact('servicerequest'));
        }
        else {
            return view('servicerequests.rejection');
        }
    }



    public function store()
    {   
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

    	return redirect('/');
    }


    public function edit(ServiceRequest $servicerequest)
    {
        return view('servicerequests.edit', compact('servicerequest'));
    }


    public function update(ServiceRequest $servicerequest)
    {

        $this->validate(request(), [
            'service_id' => 'required',
            'message' => 'required'
        ]);


        $servicerequest->service_id = request('service_id');
        $servicerequest->message = request('message');
        $servicerequest->save();
        

        session()->flash('message', 'Your service request has been editted.');

        return redirect()->action(

            'ServiceRequestController@show', ['id' => $servicerequest->id]

        );

    }



    public function destroy(ServiceRequest $servicerequest)
    {
        
        $servicerequest->delete();

        session()->flash('message', 'Your service request has been deleted.');

        return redirect('/service-requests');

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




}
