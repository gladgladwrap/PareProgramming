@extends('layouts.app')

@section('content')
	<ul class="col-md-6 col-xs-8 mx-auto my-4">
	    @foreach ($servicerequests as $servicerequest)

	    	<li>

	    		<a href="/service-requests/{{ $servicerequest->id }}">{{ $servicerequest->user->name}}  at {{ $servicerequest->created_at->toDayDateTimeString() }}</a>

	    	</li>

	    @endforeach

	</ul>
    
@endsection