@extends('layouts.app')

@section('content')

	@include('layouts.status-messages')

			@guest
				<div class="text-center mb-4">
    
			      <div class="col-12 svg-bg" id="theme-home"></div>

			      <h1 class="h3 mb-3 font-weight-normal">Get In Touch With Us!</h1>

			      <p>You must <a href="/login">sign in</a> before you can make a service request!</p>
			      
			      <p>See below for a list of services that we provide.</p>

			    </div>

			@else

            	@include('layouts.serviceform')

            @endguest




            <div class="col-12 svg-bg" id="theme-services"></div>

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


			<div class="text-center my-4 ">

		        <h3 class="text-center"><a href="/workflow">Workflow Guides</a></h3>

				<p>There are a lot of important steps involved in completing a project. Whether it may be for developing a website, a video game, or digital art, we encourage developers and designers to follow some sort of workflow. Following a structured work process will help improve efficiency and keep you on track. To help programmers and designers alike, we have provided a list of useful workflow procedures.</p>

			</div>
    
@endsection