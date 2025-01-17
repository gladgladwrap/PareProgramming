@extends('layouts.app')

@section('content')

	<div class="row flex-xl-nowrap">
	
		<div class="col-12 col-md-10 py-4 pl-md-5 bd-content text-center">

			<h1 class="text-center">Service Requests for {{ $user->name }}</h1>

			<p class="text-center">Click on a Service Request ID in order to see the details of a particular service request.</p>

			<p class="text-center">Alternatively, click on a Service to see all requests for that specific service.</p>

			<table class="table">

				<thead class="text-center">

					<tr>
				      <th scope="col">Service Request ID</th>
				      <th scope="col">Service</th>
				      <th scope="col">Date</th>
			    	</tr>

				</thead>


				<tbody class="text-center">

			    @foreach ($user->servicerequests as $servicerequest)

					    <tr>
					    	
					    	<th scope="row"><a href="/service-requests/{{ $servicerequest->id }}">{{ $servicerequest->id }}</a></th>
												
							<td><a href="/service-requests/services/{{ $servicerequest->service->id }}">{{ $servicerequest->service->title }}</a></td>
							
							<td>{{ $servicerequest->created_at->toDayDateTimeString() }}</td>
			    		
			    		</tr>

			    @endforeach
				
				</tbody>

		    </table>

		</div>

		@include ('layouts.sidebar')

	</div>


@endsection