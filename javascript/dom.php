<h1>JavaScript HTML DOM</h1>
With the HTML <b><i>Document Object Model</i></b>, JavaScript can access and change all the elements of an HTML document. When a web page is loaded, the browser creates a Document Object Model of the page. With the object model, JavaScript gets all the power it needs to create dynamic HTML:
<ul>
	<li>JavaScript can change all the HTML elements in the page</li>
	<li>JavaScript can change all the HTML attributes in the page</li>
	<li>JavaScript can change all the CSS styles in the page</li>
	<li>JavaScript can remove existing HTML elements and attributes</li>
	<li>JavaScript can add new HTML elements and attributes</li>
	<li>JavaScript can react to all existing HTML events in the page</li>
	<li>JavaScript can create new HTML events in the page</li>
</ul>

<h1>Finding HTML Elements</h1>
<ul>
	<li>document.getElementById(id)</li>
</ul>
<?php sc1(); ?>
<h1 id="demo">Hai</h1>
<button onclick="run()">Change it</button>
<script type="text/javascript">
	function run(){
		document.getElementById("demo").innerHTML = "Hello world";
	}
</script>
<?php sc2(); ?>
<ul>
	<li>document.getElementsByTagName(name)[0]</li>
</ul>
<?php sc1(); ?>
<h1 class="apple">Hai</h1>
<button onclick="run2()">Change it</button>
<script type="text/javascript">
	function run(){
		document.getElementByTagName("h1")[0].innerHTML = "Hello world";
	}
</script>
<?php sc2(); ?>

<ul>
	<li>document.getElementsByClassName(name)[0]</li>
</ul>
<?php sc1(); ?>
<h1>Hai</h1>
<button onclick="run2()">Change it</button>
<script type="text/javascript">
	function run(){
		document.getElementByClassName("apple")[0].innerHTML = "Bye";
	}
</script>
<?php sc2(); ?>

<h1>Changing HTML Elements</h1>

<h2>innerHTML</h2>
We have already seen this in first example.
<h2>Attribute</h2>
Now we try to change src and width of an image.
<?php sc1(); ?>
<button onclick="change_img()">Click here</button><br>
<img id="myImage" src="https://haysky.com/wp-content/uploads/2021/02/transparent-logo-extended-small.png">
<script type="text/javascript">
	function change_img(){
		img = document.getElementById("myImage")
		img.src = "https://haysky.com/wp-content/uploads/2022/11/wide-screen-1-1024x576.jpg";
	}
</script>
<?php sc2(); ?>

<h2>Change CSS</h2>
<?php sc1(); ?>
<button onclick="run2()">Change to red</button>
<h2 id="p2">Hello World!</h2>
<script>
	function run2(){
		document.getElementById("p2").style.color = "blue";
		document.getElementById("p2").style.backgroundColor = "pink";
	}
</script>

<?php sc2(); ?>

<h2>Add Remove Toggle Class</h2>

<?php sc1(); ?>
<h1 id="apple">Hello world</h1>
<button id="btn1">Add Class</button>
<button id="btn2">Remove Class</button>
<button id="btn3">Toggle Class</button>
<style type="text/css">
	.mystyle{
		color: red;
	}
</style>
<script type="text/javascript">
	btn1 = document.getElementById("btn1");
	btn2 = document.getElementById("btn2");
	btn3 = document.getElementById("btn3");
	element = document.getElementById('apple');
	btn1.addEventListener('click',function(){
		element.classList.add("mystyle");
	})
	btn2.addEventListener('click',function(){
		element.classList.remove("mystyle");
	})
	btn3.addEventListener('click',function(){
		element.classList.toggle("mystyle");
	})
</script>
<?php sc2(); ?>