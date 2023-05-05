<h2>Functions</h2>
A JavaScript function is a block of code designed to perform a particular task. A JavaScript function is executed when "something" invokes it (calls it).
<h2>Syntax</h2>
<pre>
function name(parameter1, parameter2, parameter3) {
  // code to be executed
}
</pre>


<h2>Function Invocation</h2>
The code inside the function will execute when "something" invokes (calls) the function:
When an event occurs (when a user clicks a button)
When it is invoked (called) from JavaScript code
Automatically (self invoked)
<?php sc1(); ?>
<script type="text/javascript">
  function apple(){
    alert('hello');
  }
  apple();
</script>
<?php sc2(); ?>


<h2>Parameters / Arguments</h2>
We can give / pass some variables / data to the function. These are called parameters.
<?php sc1(); ?>
<script type="text/javascript">
  function addition(a,b){
    alert(a+b);
  }
  addition(5,6);
  addition(1,9);
</script>
<?php sc2(); ?>


<h2>Function Return</h2>
When JavaScript reaches a return statement, the function will stop executing.<br>
If the function was invoked from a statement, JavaScript will "return" to execute the code after the invoking statement.<br>
Functions often compute a return value. The return value is "returned" back to the "caller".
<?php sc1(); ?>
<script>
var x = add(4, 3);
document.write(x);
function add(a, b) {
  return a * b;
}
</script>
<?php sc2(); ?>

<h2>Events</h2>
Events are user actions in browser.
<ul>
  <li>onclick - The user clicks an HTML element</li>
  <li>onchange - An HTML (input / select) element has been changed</li>
  <li>onmouseover - The user moves the mouse over an HTML element</li>
  <li>onmouseout - The user moves the mouse away from an HTML element</li>
  <li>onkeydown - The user pushes a keyboard key</li>
  <li>onload - The browser has finished loading the page (body)</li>
</ul>
<?php sc1(); ?>
<button onclick="run()">Click me</button>
<script type="text/javascript">
  function run(){
    alert("Button is clicked!");
  }
</script>
<?php sc2(); ?>
Similarly you can change "onclick" to any other event.