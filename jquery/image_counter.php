<?php sc1(); ?>
<h1 id="count">0</h1>
<h1 id="reset">Reset</h1>
<br>
<div class="img-box">
	<img src="https://gdb.voanews.com/64be4562-1c02-48f1-9016-21dfcaa3e4ad_cx14_cy1_cw60_w1200_r1.jpg" id="img" width="300">
	<progress value="1" max="100">
</div>

<script type="text/javascript">
	$('img').click(function(){
		x = parseInt($('#count').text());
		if (x < 33) {
			$('img').css('opacity','+=.03');
			y = parseInt($('progress').val())+3;
			$('progress').attr('value',y);
			x++;
			$('#count').text(x);
		}
	});
	$('#reset').click(function(){
		$('progress').attr('value','0');
		$('#img').css('opacity',0);
		$('#count').text(0);
	})
</script>
<style type="text/css">
	progress{
		width: 100%;
	}
	#img{
		display: block;
		opacity: 0;
	}
	.img-box{
		border: 2px dotted black;
		display: inline-block;
	}
	#count,#reset{
		display: inline-block;
	}
	h1:hover{
		background-color: hotpink;
	}
	h1{
		cursor: pointer;
		width: 100px;
		background-color: pink;
		text-align: center;
		border: 2px solid black;
		border-radius: 20px;
	}
</style>
<?php sc2(); ?>