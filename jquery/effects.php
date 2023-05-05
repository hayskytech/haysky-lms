<h1>Effects</h1>

<h2>Show / Hide / Toggle</h2>

<?php sc1(); ?>
<button id="btn1">Show</button>
<button id="btn2">Hide</button>
<button id="btn3">Toggle</button>
<h2>Haysky</h2>
<script type="text/javascript">
	$('#btn1').click(function(){
		$('h2').show();
	});
	$('#btn2').click(function(){
		$('h2').hide();
	});
	$('#btn3').click(function(){
		$('h2').toggle();
	});
</script>
<?php sc2(); ?>

<h2>SlideUp SlideDown</h2>
<?php sc1(); ?>
<button id="btn1">Slide Up</button>
<button id="btn2">Slide Down</button>
<button id="btn3">Slide Toggle</button>
<br>
<img width="300" src="https://haysky.com/wp-content/uploads/2023/01/Haysky-office-outer-view.jpg">
<script type="text/javascript">
	$('#btn1').click(function(){
		$('img').slideUp();
	});
	$('#btn2').click(function(){
		$('img').slideDown();
	});
	$('#btn3').click(function(){
		$('img').slideToggle();
	});
</script>
<?php sc2(); ?>

<h2>Fade Effect</h2>
We can also add time duration (in milli seconds).
<?php sc1(); ?>
<button id="btn1">Fade In</button>
<button id="btn2">Fade Out</button>
<button id="btn3">Fade Toggle</button>
<br>
<img width="300" src="https://haysky.com/wp-content/uploads/2023/01/Haysky-office-outer-view.jpg">
<script type="text/javascript">
	$('#btn1').click(function(){
		$('img').fadeIn(5000);
	});
	$('#btn2').click(function(){
		$('img').fadeOut(2000);
	});
	$('#btn3').click(function(){
		$('img').fadeToggle(500);
	});
</script>
<?php sc2(); ?>