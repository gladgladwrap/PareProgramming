@extends('layouts.app')

@section('content')
	
	<a href="/service-requests">Back</a>

	<div class="col-md-6 col-xs-8 mx-auto my-4">

		<div class="card card-default">

			<div class="card-header text-center">

				<h1>{{ $servicerequest->user->name}}</h1>

				<h3>{{ $servicerequest->user->email}}</h3>

				<h3>Created at: {{ $servicerequest->created_at }}</h3>

			</div>
			
			<div class="card-body">
				
				<h2>Client Message:</h2>
				<p>{{ $servicerequest->message }}</p>

			</div>
                
        </div>
    
    </div>

@endsection