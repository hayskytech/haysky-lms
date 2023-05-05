<h1>Javascript</h1>
<p>JavaScript is the programming language of HTML and the Web. Programming makes computers do what you want them to do.
	JavaScript is easy to learn. JavaScript is Case Sensitive.
	JavaScript does NOT have any built-in print or display functions. JavaScript can "display" data in different ways:</p>
<ul>
	<li>Writing into an alert box, using window.alert().</li>
	<li>Writing into the HTML output using document.write().</li>
	<li>Writing into the browser console, using console.log().</li>
</ul>
<?php sc1(); ?>
<script>
	window.alert("hello world");
	document.write("bye");
	console.log('Hai');
</script>
<?php sc2(); ?>
<p><b>Activate the browser console with F12, and select the "Console" tab in the menu.
	</b></p>

<h1>Syntax</h1>
<p>JavaScript syntax is the set of rules, how JavaScript programs are constructed:</p>

<p><b>JavaScript Literals:</b> Numbers are written with or without decimals.</p>
<?php sc1(); ?>
<script>
	document.write(10.50);
</script>
<?php sc2(); ?>
<h1>Identifiers</h1>
<p><b>Variables</b> or <b>constants</b> are used to store data. The first character must be a letter or an underscore
	(_) or a dollar sign ($)<br>
	Numbers are not allowed as the first character.
</p>
<?php sc1(); ?>
<script>
	var x;
	x = 6;
	document.write(x);
</script>
<?php sc2(); ?>
<p><b>Expressions</b>: An expression is a combination of values, variables, and operators, which computes to a value.
</p>
<?php sc1(); ?>
<script>
	var x;
	x = 5;
	document.write(x * 10);
</script>
<?php sc2(); ?>
<p><b>Keywords</b> JavaScript keywords are used to identify actions to be performed. Examples: if else for var etc. The
	var keyword tells the browser to create variables.</p>
<?php sc1(); ?>
<script>
	var x, y;
	x = 5 + 6;
	y = x * 10;
	document.write(y);
</script>
<?php sc2(); ?>
<h1>Comments</h1>
<p>Code after double slashes // or between /* and */ is treated as a comment. (Shortcut: Ctrl /)</p>
<?php sc1(); ?>
<script>
	x = 5;
	// x = 6; will not be executed
	document.write(x);
/*
	document.write("Hello world<br>");
	document.write("How are you?");
	*/
</script>
<?php sc2(); ?>