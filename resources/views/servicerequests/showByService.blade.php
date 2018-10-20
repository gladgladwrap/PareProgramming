@extends('layouts.app')

@section('content')

	<div class="row flex-xl-nowrap">
	
		<div class="col-12 col-md-10 py-4 pl-md-5 bd-content text-center">

			<h1 class="text-center">{{ $service->title }} Requests</h1>

			<p class="text-center">Click on a Service Request ID in order to see the details of a particular service request.</p>

			<p class="text-center">Click on a client's name to see all of his or her Service Requests.</p>

			<table class="table">

				<thead class="text-center">

					<tr>
				      <th scope="col">Service Request ID</th>
				      <th scope="col">Client</th>
				      <th scope="col">Date</th>
			    	</tr>

				</thead>


				<tbody class="text-center">

			    @foreach ($service->servicerequests as $servicerequest)

					    <tr>
					    	
					    	<th scope="row"><a href="/service-requests/{{ $servicerequest->id }}">{{ $servicerequest->id }}</a></th>
												
							<td><a href="/service-requests/users/{{ $servicerequest->user->id }}">{{ $servicerequest->user->name }}</a></td>
							
							<td>{{ $servicerequest->created_at->toDayDateTimeString() }}</td>
			    		
			    		</tr>

			    @endforeach
				
				</tbody>

		    </table>
		
		</div>

		@include ('layouts.sidebar')

	</div>
	
@endsection