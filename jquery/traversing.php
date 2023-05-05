<h2>Parents / Ancestors</h2>
<?php sc1(); ?>
<button id="btn1">Parent</button>
<button id="btn2">All Parents</button>
<button id="btn3">ParentsUntill .main</button>

<div class="main">
	<div class="sub">
		<p>Apple
		<b id="apple">Bat</b>
		</p>
		<p>Cat</p>
		<p>Dog</p>
	</div>
	<p>last para</p>
</div>
<p>Hello world para</p>

<script type="text/javascript">
$("#btn1").click(function(){
	$('#apple').parent().css('color','red');
});
$("#btn2").click(function(){
	$('#apple').parents().css('color','blue');
});
$("#btn3").click(function(){
	$('#apple').parentsUntil('.main').css('color','pink');
});
</script>
<?php sc2(); ?>

<h2>Children – Find</h2>
<?php sc1(); ?>
<button id="btn1">Children p.new</button>
<button id="btn2">Find #apple</button>

<div class="main">
	<p>Hello world
		<b id="apple">hello apple</b>
	</p>
	<pre>Bye world</pre>
	<p>asudias</p>
	<p class="new">new para</p>
</div>
<p>Hello world Para</p>

<script type="text/javascript">
$("#btn1").click(function(){
	$('.main').children('p.new').css('color','red');
});
$("#btn2").click(function(){
	$('.main').find('#apple').css('color','blue');
});
</script>
<?php sc2(); ?>

<h2>Siblings</h2>
<?php sc1(); ?>
<button id="btn1">All Siblings of p.new</button>
<button id="btn2">H2 siblings only</button>

<div class="main">
	<p>Hello world</p>
	<h2>hello apple</h2>
	<p class="new">new para</p>
	<h2>hai hat</h2>
	<pre>Hello world</pre>
	<p>asudias</p>
</div>
<p>Hello man</p>

<script type="text/javascript">
$("#btn1").click(function(){
	$('.new').siblings().css('color','red');
});
$("#btn2").click(function(){
	$('.new').siblings('h2').css('color','blue');
});
</script>
<?php sc2(); ?>

<h2>Next / Prev</h2>
<?php sc1(); ?>
<button id="btn1">Next</button>
<button id="btn2">Next ALL</button>
<button id="btn3">Next Untill pre</button>

<div class="main">
	<p class="new">new para</p>
	<p>as du alsidas</p>
	<h2>hello apple</h2>
	<h2>hai hat</h2>
	<pre>las daisdgai</pre>
	<p>asudias</p>
</div>
<p>not sibling</p>

<script type="text/javascript">
$("#btn1").click(function(){
	$('.new').next().css('color','red');
});
$("#btn2").click(function(){
	$('.new').nextAll().css('color','blue');
});
$("#btn3").click(function(){
	$('.new').nextUntil('pre').css('color','hotpink');
});
</script>
<?php sc2(); ?>

<h2>Filter – First – Last – eq – Not</h2>
<?php sc1(); ?>
<button id="btn1">First</button>
<button id="btn2">Last inside div.main</button>
<button id="btn3">3rd</button>
<button id="btn4">filter .intro</button>
<button id="btn5">not .intro</button>

<div class="main">
	<p class="new">0th element</p>
	<p>Hello world</p>
	<p>hello apple</p>
	<p>this is 3rd element</p>
	<p>las daisdgai</p>
	<p>asudias</p>
</div>
<p class="intro">not sibling</p>
<p class="intro">not sibling</p>
<p>last element</p>

<script type="text/javascript">
$("#btn1").click(function(){
	$('p').first().css('color','red');
});
$("#btn2").click(function(){
	$('div.main p').last().css('color','blue');
});
$("#btn3").click(function(){
	$('p').eq(3).css('color','hotpink');
});
$("#btn4").click(function(){
	$('p').filter('.intro').css('color','orange');
});
$("#btn5").click(function(){
	$('p').not('.intro').css('color','brown');
});
</script>
<?php sc2(); ?>