<h1>HTML DOM EventListener</h1>
<h2>The addEventListener() method</h2>
Syntax:
<pre>
element.addEventListener(event, function, useCapture);
</pre>
<ul>
	<li>The addEventListener() method attaches an event handler to the specified element.</li>
	<li>It can attach an event handler to an element without overwriting existing event handlers. </li>
	<li>You can add many event handlers to one element. </li>
	<li>You can add many event handlers of the same type to one element, i.e two "click" events. </li>
	<li>You can add event listeners to any DOM object not only HTML elements. i.e the window object.</li>
</ul>

<h2>Add an Event Handler to an Element</h2>
<?php sc1(); ?>
<button id="myBtn">Try it</button>
<script>
document.getElementById("myBtn").addEventListener("click", function() {
  alert("Hello World!");
});
</script>
<?php sc2(); ?>
<h2>The removeEventListener() method</h2>
The removeEventListener() method removes event handlers that have been attached with the addEventListener() method:
<?php sc1(); ?>
<script>
function removeHandler() {
document.getElementById("myDIV").removeEventListener("mousemove", myFunction);
}
</script>
<?php sc2(); ?>

Example:
<?php sc1(); ?>
<button id="hello">HELLO</button>
<button id="turnon" onclick="turnon()">TURN ON</button>
<button id="turnoff" onclick="turnoff()">TURN OFF</button>
<script type="text/javascript">
	btn = document.getElementById("hello");
	function run(){
		alert('hai');
	}

	function turnon(){
		btn.addEventListener('click',run);
		btn.style.backgroundColor = 'pink';
	}
	function turnoff(){
		btn.removeEventListener('click',run);
		btn.style.backgroundColor = 'gray';
	}
</script>
<?php sc2(); ?>

<h2>Stars Triangle Generator</h2>

<?php sc1(); ?>
<input type="number" id="inp" value="5" autofocus>
<div id="output"></div>
<script type="text/javascript">
function load_triangle(){
n = document.getElementById('inp').value;
str = ''
for(x=1; x<=n; x++){
  for (z=1;z<=n-x;z++){
    str += ' '
  }
  for (y=1;y<=x;y++){
    str += '* '
  }
  str += '<br>'
}
document.getElementById('output').innerHTML = '<pre>'+str+'</pre>'
}
load_triangle();
document.getElementById("inp").addEventListener("change",load_triangle)
</script>
<?php sc2(); ?>