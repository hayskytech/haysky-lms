<h2 style="color: red;">You need to know JavaScript before learning JQuery.</h2>
<h1>JQuery</h1>
<p>jQuery is a lightweight, "write less, do more", JavaScript library. The purpose of jQuery is to make it much easier to use JavaScript on your website. jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.</p>
<h1>Getting started</h1>
<p>In order work with JQuery, we need to include it in the top. Search for <a href="https://google.com/search?q=jquery cdn" target="_blank">"jquery cdn"</a> and download min file or copy its link.</p>
<h2>Offline Method</h2>
<p>Download jquery.js file in your folder.</p>
<?php sc1(); ?>
<script type="text/javascript" src="jquery.js"></script>
<?php sc2(); ?>
<h2>Online Method</h2>
<?php sc1(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<?php sc2(); ?>


<h1>Events</h1>
Normal Method using JavaScript
<?php sc1(); ?>
<button onclick="run()">Click me</button>
<script type="text/javascript">
  function run(){
    alert('Hello');
  }
</script>
<?php sc2(); ?>

<h2>JQuery way to trigger a function</h2>
<?php sc1(); ?>
<button>Click me</button>
<script type="text/javascript">
	$('button').click(run);
	function run(){
		alert("It's working");
	}
</script>
<?php sc2(); ?>

<h2>We can directly write inline function (without name)</h2>
<?php sc1(); ?>
<button>Click me</button>
<script type="text/javascript">
	$('button').click(function(){
		alert("It's working");
	});
</script>
<?php sc2(); ?>

<h1>Show / Hide Elements</h1>
<?php sc1(); ?>
<p>Hello click me to hide</p>
<script type="text/javascript">
$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});
</script>
<?php sc2(); ?>

<h2>Hide element on button click</h2>
<?php sc1(); ?>
<button>Hide it</button>
<h2>Hello world</h2>
<script type="text/javascript">
	$('button').click(function(){
		$('h2').hide();
	})
</script>
<?php sc2(); ?>