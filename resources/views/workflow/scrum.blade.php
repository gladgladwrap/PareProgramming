@extends('layouts.app')

@section('content')

	<h1 class="my-4">Scrum For Agile Development</h1>	
	
	<img src="/sprintCycle.png" class="rounded mb-4 d-block" alt="Scrum Lifecycle">
	
	<p>Scrum (Agile Development) focuses on developing a subset of high value features first in order to incorporate feedback sooner. Daily Scrum is meant to disrupt old habits of working separately. Scrum blends all development activities into each iteration:</p>

	<h2 class="my-4">Roles Within The Team</h2>

	<p><strong>Product Owner:</strong>  a key stakeholder, he or she represents users and customers, and is usually someone from management or marketing, or is a key user.</p>

	<p><strong>Scrum Master:</strong> responsible for making sure the team is as productive as possible by making sure the scrum process is followed and by removing impediments / outside interferences. Usually the project manager or technical team leader.</p>

	<h3 class="my-4">Scrum Master Techniques</h3>

	<ul>
		<li>User Stories</li>
		<li>Test-Driven Development</li>
		<li>Continuous Integration + Testing</li>
		<li>Pairing</li>
		<li>Automated Testing</li>
		<li>Agile Games</li>
	</ul>


	<h3 class="my-4">Physical Components in Scrum</h3>
	
	<p><strong>Product Backlog:</strong> A prioritized features list containing every desired feature and change to the product.</p>

	<p><strong>Sprint Backlog:</strong>A list of tasks to be completed in a Sprint.</p>
	
	<h2 class="my-4">Scrum Processes</h2>

	<h3 class="mt-4">Sprints</h3>

	<p>Normally are 2 weeks to one month long. For the Hackathon, however, a new sprint will occur, more or less, every 6 hours (— dependant on time estimates). A shippable product increment should be built every iteration.</p>

	<p>Each Sprint must have:<p>
	
	<ol>
		<li>Sprint Task List (During the Sprint, it is common to discover additional tasks needed to achieve the Sprint goal.)</li>
		<li>Sprint Burndown Chart</li>
		<li>Impediments List : issues that are beyond the team’s control.</li>
	</ol>


	<h3 class="mt-4">Sprint Planning Meeting</h3>

	<p>This meeting is used to negotiate which Product Backlog Items will be made into working products during the sprint. The Product Owner declares which items are of most importance to the business. When planning the Sprint, reference the section “Key Scrum Questions” on the following page.</p>

	<h3 class="my-4">Sprint Review Meeting</h3>

	<p>At the end of each sprint, the team will:</p>

	<ol>
		<li>Demonstrate the new product increment live.</li>
		<li>Have completed code testing.</li>
		<li>Items declared incomplete by the Product Owner return to the Product Backlog.</li>
	</ol>

	<h3 class="my-4">Sprint Retrospective</h3>

	<p>After the Sprint Review Meeting, the team reflects on its own processes. They must be comfortable enough to allow people to address issues instead of blaming and hostility.</p>

	<p>Each team member will also discuss: </p>

	<ul>
		<li>what they did in the previous sprint</li>
		<li>what they will do in the following sprint</li>
		<li>impediments they faced</li>
	</ul>

@endsection