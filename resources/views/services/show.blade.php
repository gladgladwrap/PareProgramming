@extends('layouts.app')

@section('content')
	
	<div class="row">

		<div class="col-md-4">

			<div class="card card-default">

				<div class="card-header text-center">

					<h1>{{ $service->title }}</h1>
				</div>
				
				<div class="card-body">

					<p>{{ $service->body }}</p>

				</div>
	                
	        </div>

	    </div>

	    <div class="col-md-8" id="service-bg">

	    </div>

	</div>

@endsection