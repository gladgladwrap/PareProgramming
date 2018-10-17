@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">{{ $service->title }} Requests</h1>

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


@endsection