@extends('layouts.app')

@section('content')

			@guest
				<div class="text-center mb-4">
    
			      <div class="col-12" id="home-theme"></div>

			      <h1 class="h3 mb-3 font-weight-normal">Get In Touch With Us!</h1>
			      
			      <p>See below for a list of services that we provide.</p>

			      <p>You must <a href="/login">sign in</a> before you can make a service request!</p>

			    </div>

			@else

            	@include ('layouts.serviceform')

            @endguest

			<h2 class="mt-4 text-center">Our Services</h2>

			@foreach ($services as $service)
	            
	            <div class="card col-md-4 col-xs-6 mx-auto my-4">
	            	
	            	<a href="/services/{{ $service->id }}">{{ $service->title }} </a>

	            </div>

	        @endforeach


			<div class="card text-center">

				<div class="card-body">

			        <h3 class="text-center">About Us</h3>
					
					<p>Pare Programming was the result of lackluster word play. Our mission is clear:</p>
					<p><strong>pair programming is good.</strong></p>

				</div>

			</div>
    
@endsection