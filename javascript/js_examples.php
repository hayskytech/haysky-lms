<h2>Addition of two numbers using Form</h2>
<?php sc1(); ?>
<p>Enter two values for addition</p>
Enter a <input type="number" id="a">
<br>
Enter b <input type="number" id="b">
<button onclick="addition()">Addition</button>
<h2 id="add"></h2>
<script type="text/javascript">
function addition(){
	a = document.getElementById('a').value;
	b = document.getElementById('b').value;
	add = parseInt(a)+parseInt(b);
	document.getElementById('add').innerHTML = add
}
</script>
<?php sc2(); ?>

<h2>Voting Eligibility</h2>
<?php sc1(); ?>
<p>Enter your age to check voting eligblity</p>
<input type="number" id="age" onchange="voting()"> <button onclick="voting()">Check</button>
<h2 id="result"></h2>
<script type="text/javascript">
function voting(){
	age = document.getElementById('age').value;
	if (age >= 18) {
		result = 'Eligible for voting.';
	} else {
		result = 'Not Eligible for voting.';
	}
	document.getElementById('result').innerHTML = result
}
</script>
<?php sc2(); ?>

<h2>Two numbers equal or not</h2>
<?php sc1(); ?>
<p>Two numbers equal or not</p>
Enter x <input type="number" id="x" onchange="check_equal()"><br>
Enter y <input type="number" id="y" onchange="check_equal()"><br>
<button onclick="check_equal()">SUBMIT</button>
<h2 id="equal_result"></h2>
<script type="text/javascript">
function check_equal(){
	x = document.getElementById('x').value;
	y = document.getElementById('y').value;
	if (x==y) {
		result = 'Both are equal';
	} else {
		result = 'Both are not equal';
	}
	document.getElementById('equal_result').innerHTML = result
}
</script>
<?php sc2(); ?>

<h2>Even or Odd</h2>
<?php sc1(); ?>
Enter a number (even or odd)
<input type="number" id="z"><button onclick="even_odd()">SUBMIT</button>
<h2 id="even_odd"></h2>
<script type="text/javascript">
function even_odd(){
	z = document.getElementById('z').value;
	if ((z % 2) == 0) {
		result = (z + " is even number.");
	} else {
		result = (z + " is odd number.");
	}
	document.getElementById('even_odd').innerHTML = result
}
</script>
<?php sc2(); ?>

<h2>DOM Changing CSS</h2>
<?php sc1(); ?>
<p id="p1">Lorem ipsum</p>
<button onclick="increase()">+</button>
<button onclick="decrease()">-</button>
<button onclick="pink()">Pink</button>
<button onclick="skyblue()">Sky Blue</button>
<button onclick="white()">White</button>
<script type="text/javascript">
function increase(){
	document.getElementById('p1').style.fontSize = '20px';
}
function decrease(){
	document.getElementById('p1').style.fontSize = '10px';
}
function pink(){
	document.getElementById('p1').style.backgroundColor = 'pink';
}
function skyblue(){
	document.getElementById('p1').style.backgroundColor = 'skyblue';
}
function white(){
	document.getElementById('p1').style.backgroundColor = 'white';
}
</script>
<?php sc2(); ?>

<h2>Changing Body color</h2>
<?php sc1(); ?>
<h1 id="h1">Hello world</h1>
<button onclick="change_color('black')">black</button>
<button onclick="change_color('blue')">blue</button>
<button onclick="change_color('red')">red</button>
<button onclick="change_color('green')">green</button>
<br>
<button onclick="change_theme('black','white')">Dark</button>
<button onclick="change_theme('white','black')">Bright</button>
<button onclick="change_theme('pink','black')">Pink</button>
<button onclick="change_theme('#8787ff','white')">BlueRed</button>
<script type="text/javascript">
function change_color(c){
	document.getElementById('h1').style.color = c;
}
function change_theme(b,c){
	document.getElementsByTagName('body')[0].style.backgroundColor = b;
	document.getElementsByTagName('body')[0].style.color = c;
}
</script>
<?php sc2(); ?>


<h2>Change Image options</h2>
<?php sc1(); ?>
<button onclick="change_img('bg8.jpg')">IMG 1</button>
<button onclick="change_img('new.jpeg')">IMG 2</button>
<button onclick="img_show()">SHOW</button>
<button onclick="img_hide()">HIDE</button>
<br>
<img id="i1" src="bg8.jpg" height="300" width="400">
<script type="text/javascript">
function change_img(x){
	document.getElementById('i1').src = x;
}
function img_hide(){
	document.getElementById('i1').style.display = 'none';
}
function img_show(){
	document.getElementById('i1').style.display = 'inline';
}
</script>
<?php sc2(); ?>


<h2>Change color based on given input</h2>
<?php sc1(); ?>
<p id="p1">Lorem ipsum </p>

Body:<input type="color" id="body_color" onchange="run()">
Text:<input type="color" id="text_color" onchange="run1()">

<script type="text/javascript">
function run(){
	c = document.getElementById("body_color").value;
	document.body.style.backgroundColor = c;
}
function run1(){
	c = document.getElementById("text_color").value;
	document.getElementById('p1').style.color = c;
}
</script>
<?php sc2(); ?>


<h2>Using "this" parameter inside a function</h2>
<?php sc1(); ?>
<h1 id="p1">Lorem ipsum </h1>
Body:<input type="color" onchange="run(this)">
Text:<input type="color" onchange="run1(this)">
<script type="text/javascript">
function run(element){
	document.body.style.backgroundColor = element.value;
}
function run1(element){
	document.getElementById('p1').style.color = element.value;
}
</script>
<?php sc2(); ?>