@extends('layouts.app')

@section('content')
	
	<div class="row flex-xl-nowrap">
	
		<div class="col-12 col-md-10 py-4 pl-md-5 bd-content text-center">

			@include('layouts.status-messages')
		
			<h1 class="text-center py-2">Service Request {{ $servicerequest->id }}</h1>

			<div class="control">

				<a href="/service-requests/{{ $servicerequest->id }}/edit">Edit</a>

			</div>

			<form method="POST" action="/service-requests/{{ $servicerequest->id }}" class="button">
			
				{{  method_field('DELETE') }}

				{{ csrf_field() }}

				<div class="control">
					
					<button type="submit" class="button">Delete Request</button>

				</div>

			</form>


			<table class="table">

				<thead class="text-center">

					<tr>
				      <th scope="col">Service Request ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Service</th>
				      <th scope="col">Date</th>
			    	</tr>

				</thead>

				<tbody class="text-center">

					    <tr>
					    	<th scope="row" class="text-center">{{ $servicerequest->id }}</th>
							<td>{{ $servicerequest->user->name }}</td>
							<td>{{ $servicerequest->user->email}}</td>
							<td>{{ $servicerequest->service->title }} </td>
							<td>{{ $servicerequest->created_at->toDayDateTimeString() }}</td>
			    		</tr>
				
				</tbody>

		    </table>


			
			<div class="col-md-6 col-xs-8 mx-auto my-4">

				<div class="card card-default">

					<div class="card-body">
						
						<h3>Client Message:</h3>

						<p>{{ $servicerequest->message }}</p>

					</div>
		                
		        </div>
		    
		    </div>

		</div>

		@include('layouts.sidebar')

	</div>

@endsection