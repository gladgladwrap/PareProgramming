@extends('layouts.app')


@section('content')


	<form class="form-signin" method="POST" action="/service-requests/{{$servicerequest->id}}">
		
		{{  method_field('PATCH') }}

		{{ csrf_field() }}

		<div class="col-auto my-1">

		    <label class="mr-sm-2" for="inlineFormCustomSelect">Services</label>

	      	<select name="service_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>

		        <option disabled selected value>Choose one of the following...</option>

		        <option value="1">Web Development</option>
		        <option value="2">Web Design</option>
		        <option value="3">Small Claims Negotiation</option>
		        <option value="4">Tutoring</option>
		        <option value="5">Other</option>

	      	</select>

	    </div>

		<div class="form-label-group mb-4">

	      	<label for="message">Your Message</label>

	     	 <textarea name="message" class="form-control" placeholder="Tell us how we can help you!" required>{{ $servicerequest->message }}</textarea>
	      
	    </div>

	    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>

	</form>


@endsection
