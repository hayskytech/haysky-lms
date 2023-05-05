<h1>Movements</h1>
<?php sc1(); ?>
<button id="btn1">Increase</button>
<button id="btn2">Decrease</button>
<button id="btn3">STOP</button>

<div>hello</div>

<style type="text/css">
	div{
		background-color: hotpink;
		height: 400px;
		width: 400px;
		border: 1px solid;
		position: absolute;
		opacity: 0.8;
	}
</style>
<script type="text/javascript">
	$('#btn1').click(function(){
		$('div').animate({
			'height' : '+=300px',
			'width'  : '+=300px',
			'left'	 : '+=200px'
		},5000);
	});
	$('#btn2').click(function(){
		$('div').animate({
			'height' : '-=300px',
			'width'  : '-=300px',
			'left'	 : '-=200px'
		},5000);
	});	
	$('#btn3').click(function(){
		$('div').stop();
	});
</script>
<?php sc2(); ?>