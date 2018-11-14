@extends('layouts.app')

@section('content')

	<h1>Java Development</h1>

	<p>Java is fun. Getting started, however, is not. Choosing an IDE for Java can be very frustrating if you choose the wrong one. I had been inclined to make the switch from Sublime 2 (a text editor) to Microsoft's Visual Studio Code (an IDE). VS Code supports Java, but I find it to be a much less intuitive workspace. Once I made the switch to Eclipse I found myself more at ease. There are some really good IDE's such as IntelliJ by JetBrains.</p>

	<p>You don't need to know very much code to actually compile and run a java program from the command line:</p>

	<pre>javac Example.java </pre>

	<p>This will generate platform-independent java bytecode. In our example, our file will appear as Example.class. We can omit the .class extension when we run the program as follows:</p>

	<pre>java Example </pre>

	<pre>If we have included javadoc comments in our source code, we can run</pre>

	<pre>javadoc Example.java</pre>

	<p>to generate an html document of our java program's documentation.</p>
	
	<p>If you want to debug your java application in the command line, compile your source code with:</p>

	<pre>javac -g</pre>

	<p>This generates all the debugging information. To debug the program, we type:</p>

	<pre>jdb Example -Xdebug -Xrunjdwp:transport=st_socket,server=y,address=8000,suspend=y</pre>

	<p>This will initialize the jdb, but will not run the debugger. We may now set our breakpoints before running the program. To do this, enter:</p>

	<pre>stop at Example:10</pre>

	<p>This will defer the breakpoint. It will be set when the class is loaded. To run the JVM, type:</p>

	<pre>run</pre>
	
	<p>It will hit our breakpoint. At this point, we can type:</p>

	<pre>list</pre>

	<p>which will print out all of our code, past our breakpoint. We can use: </p>

	<pre>print <value></pre>

	<p>in order to print out the value stored in a variable. To continue with the program, type:</p>

	<pre>cont</pre>

	<p>If at any point you want to see a list of available commands inside the debugger, just type:</p>

	<pre>help</pre>
	

@endsection