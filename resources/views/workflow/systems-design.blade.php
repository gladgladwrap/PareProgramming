@extends('layouts.app')

@section('content')
	
	<h1 class="my-4">Systems Analysis</h1>
	
	<p>Systems Analysis enable a person to understand and specify what a new system should accomplish.</p>

	<h3 class="my-4">The Core Processes of the Software Development Life Cycle</h3>

	<ol>
		<li>Identify the problem or need. Obtain approval.</li>
		<li>Plan and monitor the project.</li>
		<li>Discover and understand the details of the problem.</li>
		<li>Design the system components that solve the problem.</li>
		<li>Build, test, and integrate.</li>
		<li>Complete tests and deploy.</li>
	</ol>

	<h2 class="my-4">Systems Design</h2>

	<p>Systems Design enable a person to describe in detail the system that solves the business need.</p>

	<h3 class="my-4">The Process of Systems Design</h3>

	<ol>
		<li>Make use cases</li>
		<li>Make Domain Model Class Diagram</li>
		<li>Make first-cut Design Class Diagram. This includes only the problem domain classes.</li>
		<li>Make Sequence Diagram</li>
		<li>Refine Design Class Diagram by adding view layer, data access layer, and messages.</li>
	</ol>

	<p>The purpose of systems design is to balance the design principles of cohesion and coupling, class responsibility, indirection, and protection from variation.</p>

	<p>Data access classes access the database.</p>

	<h3>Determining System Events</h3>

	<p>To decide what the system is going to do, we must determine the events that will require the system to respond. The types of events that can occur within a system are external events, temporal events, and state events. External events are caused by an outside actor supplying or receiving information. Temporal events occur as a result of reaching a point in time. State events are triggered as a result of something happening inside the system.</p>
	
	<h3>Detailed Design</h3>

	<p>Detailed design is to determine the objects and methods within classes used to support use cases. Detailed design is done for each use case separately. Use case realization is the process of taking each use case and determining all of the classes that collaborate with it.</p>

	<h3>Utility Classes</h3>

	<p>Entity Classes are the problem domain classes.</p>
	<p>Boundary Classes are the view classes.</p>
	<p>Control Classes (artifact objects) are needed to execute the use cases but aren't based on any domain model class.</p>

	<h3 class="my-4">Sequence Diagrams</h3>

	<h4>Common Confusion Between Relational Databases and Object-Oriented Design</h4>

	<p>There is a common mixup that happens in a system that uses a relational database and object-oriented design patterns. A relational database uses keys (primary keys and foreign keys) to link and make references to other tables. When an object-oriented program is designed, it usually makes use of <strong>aggregation</strong>. Aggregation defines a "has a" relationship. The objects that "own" other objects, known as composition (a form of aggregation), contain references that point to the objects that are owned (or visible) to the object. Design Classes don't have foreign keys.</p>

	<p>When making Sequence Diagrams, it is important to make sure that source objects have navigation visibility to destination objects so messages can be sent. Every object that sends a message to another object must have navigational visibility to that object. After the problem domain object is created, a reference to it is returned to the object that needs visibility.</p>

	<h4>Multilayer Design</h4>
	
	<p>In some cases,the first-cut sequence diagram, which focuses mostly on the classes in the problem domain layer, may be sufficient documentation to program the solution. Every system will need view layer classes to represent the input and output screens of the application, but there may not be any benefit in adding them to the diagram.</p>

	<p>Data access layers aren't always required. When not much business logic is required, the entity classes / domain classes contain the data access logic required to persist themselves to the database. Relational databases exist so that problem domain objects may persist when the application is not executing. The data access layer is required when the business logic is failry complex and should be isolated from the SQL statements that access the database. Data access layer classes have the sole responsibility of executing database statements, retrieving the query results, and passing them to the domain layer classes.</p>
	

	<h3 class="my-4">Design Patterns</h3>

	<p>Design Patters are well-tested solutions to common problems and issues encountered in software development. They are best practices for how objects and classes should be arranged to accomplish a result. They become well known because of the Gang of Four. Their book detailed 23 design patters, which were split into three groups.</p>

	<p><strong>Cohesion</strong>: A qualitative measure of the focus or unity of purpose within a single class. A highly cohesive class has consistency among its functions.</p>

	<p><strong>Coupling</strong>: A qualitative measure of how closely classes are related/linked.</p>

	<ol>
		<li>Creational Patterns: patterns that deal with the creation of objects. These include:
			<ul>
				<li>Abstract Factory</li>
				<li>Builder</li>
				<li>Factory Method: a class is needed to instantiate utility objects -- but who is going to make them? It usually doesn't make sense for domain classes to make them because that isn't their responsibility. Factory classes instantiate objects from utility classes.</li>
				<li>Prototype</li>
				<li>Singleton: ensures a class has only one instance. Provides one way to access it.</li>
			</ul>
		</li>

		<li>Structural Patterns: Patterns that deal with designing classes. These include:
			<ul>
				<li>Adapter: a utility class that protects from variations and indirection. An adapter class plugs in an external class into an existing system. The method signatures on the external class are different from the method names being called from within the system. The adapter class is inserted to convert the method calls from within the system to the method names in the external class.</li>
				<li>Bridge</li>
				<li>Composite</li>
				<li>Decorator</li>
				<li>Facade</li>
				<li>Flyweight</li>
				<li>Proxy</li>
			</ul>
		</li>

		<li>Behavioral Patterns: Concerned with communication between objects during program execution. These include:
			<ul>
				<li>Chain of Responsibility</li>
				<li>Command</li>
				<li>Interpreter</li>
				<li>Iterator</li>
				<li>Mediator</li>
				<li>Momento: a way to manage change in an object. It allows an object to undo changes, without violating encapsulation.</li>
				<li>Observer</li>
				<li>State</li>
				<li>Strategy</li>
				<li>Template Method</li>
				<li>Visitor</li>
			</ul>
		</li>

	</ol>

	<h4>References</h4>

	<ol>
		<li>Satzinger, John W., Robert Jackson, Stephen Burd. Systems Analysis Design In a Changing World,  6th Edition. Nelson, 11/2011. VitalBook file.</li>
	</ol>

@endsection