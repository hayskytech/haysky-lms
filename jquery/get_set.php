<h1>GET - SET</h1>

<h2>Get-Set HTML</h2>

<?php sc1(); ?>
<h1>Haysky</h1>

<button id="btn1">Get HTML</button>
<button id="btn2">Set HTML</button>

<script type="text/javascript">
$('#btn1').click(function(){
	x = $('h1').html();
	alert(x);
});	
$('#btn2').click(function(){
	$('h1').html('Technologies');
});	
</script>
<?php sc2(); ?>

<h2>Get-Set CSS</h2>
<?php sc1(); ?>
<h1>Haysky</h1>

<button id="btn1">Get Color</button>
<button id="btn2">Set Color</button>
<button id="btn3">Set Background Color</button>

<script type="text/javascript">
$('#btn1').click(function(){
	x = $('h1').css('color');
	alert(x);
});
$('#btn2').click(function(){
	$('h1').css('color','red');
});
$('#btn3').click(function(){
	$('h1').css('background-color','darkblue');
});	
</script>
<?php sc2(); ?>

<h2>Get and Set CSS Classes</h2>

<?php sc1(); ?>
<button id="btn1">Add Red</button>
<button id="btn2">Add Blue</button>
<button id="btn3">Remove Red</button>
<button id="btn4">Remove Blue</button>
<button id="btn5">Toggle Red</button>
<button id="btn6">Toggle Blue</button>

<div>
	<p>askukgdalisdadsli</p>
	<p>las daisdgai</p>
	<p>asudias</p>
</div>

<script type="text/javascript">
$("#btn1").click(function(){
	$('p').addClass('red');
});
$("#btn2").click(function(){
	$('p').addClass('blue');
});
$("#btn3").click(function(){
	$('p').removeClass('red');
});
$("#btn4").click(function(){
	$('p').removeClass('blue');
});
$("#btn5").click(function(){
	$('p').toggleClass('red');
});
$("#btn6").click(function(){
	$('p').toggleClass('blue');
});
</script>

<style type="text/css">
	div{
		height: 200px;
		background-color: pink;
	}
	.red{
		color: red;
	}
	.blue{
		background-color: skyblue;
	}
</style>
<?php sc2(); ?>

<h2>Value</h2>

<?php sc1(); ?>
Branch: <select id="branch">
	<option>EEE</option>
	<option>ECE</option>
	<option>CSE</option>
</select>
<p id="response"></p>
<script type="text/javascript">
	$('#branch').change(function(){
		b = $('#branch').val();
		$('#response').html(b + " selected.")
	});
</script>


State: <select id="state">
	<option>AP</option>
	<option>TS</option>
	<option>KA</option>
</select>
<select id="district">
	<option class="AP">KNL</option>
	<option class="AP">NDL</option>
	<option class="AP">KDP</option>
	<option class="AP">ATP</option>
	<option class="TS">HYD</option>
	<option class="TS">MDK</option>
	<option class="TS">MHB NGR</option>
	<option class="TS">Ranga reddy</option>
	<option class="KA">BNGLR</option>
	<option class="KA">NEW</option>
</select>
<script type="text/javascript">
	$('#district option').hide();
	$('#state').val('');
	$('#district').val('');
	$('#state').change(function(){
		$('#district option').hide();
		$('#district').val('');
		x = $('#state').val();
		$('#district .'+x).show();
	});
</script>

<?php sc2(); ?>

<img src="https://haysky.com/wp-content/uploads/2023/03/jquery-dimensions.gif" style="display:inline-block;height: 300px;float: right;padding-right: 100px;">
<h2>jQuery Dimension Methods</h2>

<ul style="display: inline-block;">
	<li>width()</li>
	<li>height()</li>
	<li>innerWidth()</li>
	<li>innerHeight()</li>
	<li>outerWidth()</li>
	<li>outerHeight()</li>
</ul>

<br style="clear: both;">
<?php sc1(); ?>
<button id="btn1">Get Height</button>
<button id="btn2">Set Height & Width</button>

<div>
	<p>askukgdalisdadsli</p>
	<p>las daisdgai</p>
	<p>asudias</p>
</div>

<script type="text/javascript">
$("#btn1").click(function(){
	x = $('div').height();
	alert(x);
});
$("#btn2").click(function(){
	$('div').height(250).width(600);
});
</script>

<style type="text/css">
	div{
		height: 200px;
		background-color: pink;
	}
</style>
<?php sc2(); ?>