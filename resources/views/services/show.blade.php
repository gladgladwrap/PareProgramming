@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-xs-8 mx-auto my-4">

		<div class="card card-default">

			<div class="card-header text-center">

				<h1>{{ $service->title }}</h1>
			</div>
			
			<div class="card-body">

				<p>{{ $service->body }}</p>

			</div>
                
        </div>
    
    </div>

@endsection