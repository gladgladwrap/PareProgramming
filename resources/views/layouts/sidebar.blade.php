<div class="col-12 col-md-2 sidebar-archives text-center">
	
	<h3 class="mt-4">Archives</h3>

	<ol class="list-unstyled">
	
		@foreach ($archives as $archive)
			
			<li><a href="/service-requests/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">{{ $archive['month'] . ', '. $archive['year'] .' ('. $archive['published']}})</a></li>

		@endforeach

	</ol>

</div>