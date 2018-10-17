@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Service Requests for {{ $user->name }}</h1>

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
										
					<td><a href="/service-requests/services/{{ $servicerequest->service->id }}">{{ $servicerequest->service->title }} </td>
					
					<td>{{ $servicerequest->created_at->toDayDateTimeString() }}</td>
	    		
	    		</tr>

	    @endforeach
		
		</tbody>

    </table>


@endsection