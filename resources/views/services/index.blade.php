@extends('layouts.app')

@section('content')

            @include ('layouts.serviceform')
			
			@foreach ($services as $service)
	            
	            <div class="card col-md-6 col-xs-8 mx-auto my-4">
	            	
	            	<a href="/services/{{ $service->id }}">{{ $service->title }} </a>

	            </div>

	        @endforeach
    
@endsection