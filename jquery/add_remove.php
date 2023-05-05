<h2>Append - Prepend - Before - After</h2>

<?php sc1(); ?>
<h2 style="border:2px solid;"> Haysky </h2>
<br>
<input type="text">
<button onclick="run1()">Append</button>
<button onclick="run2()">Prepend</button>
<button onclick="run3()">Before</button>
<button onclick="run4()">After</button>
<script type="text/javascript">
	x = $('input');
	function run1(){
		$('h2').append(x.val());
	}
	function run2(){
		$('h2').prepend(x.val());
	}
	function run3(){
		$('h2').before(x.val());
	}
	function run4(){
		$('h2').after(x.val());
	}
</script>
<?php sc2(); ?>	

<h1>Empty / Remove</h1>

<?php sc1(); ?>
<button id="btn1">Empty</button>
<button id="btn2">Remove</button>
<h1 id="one">Haysky</h1>
<h1 id="two">Technologies</h1>
<script type="text/javascript">
	$('#btn1').click(function(){
		$('#one').empty();
	});
	$('#btn2').click(function(){
		$('#two').remove();
	});
</script>
<style type="text/css">
	#one{
		background-color: pink;
	}
	#two{
		background-color: orange;
	}
	h1{
		border: 2px solid;
		height: 50px;
		width: 300px;
	}
</style>
<?php sc2(); ?>

<h1>ToDo List</h1>
<?php sc1(); ?>
<input type="text" placeholder="Enter ToDo Item" autofocus><button id="btnAdd">Add</button>
<br>
<br>
<table></table>

<script type="text/javascript">
	$('#btnAdd').click(function(){
		todo = $('input').val();
		$('input').val('');
		$('table').append('<tr><td>'+todo+'</td><td><button>Delete</button></td></tr>')
		$('input').focus();
		$('td button').click(function(){
			$(this).parents('tr').remove();
		});
	});
</script>

<style type="text/css">
	table,td{
		border: 1px solid;
		border-collapse: collapse;
	}
	td,input,button{
		padding: 10px;
		font-size: 18px;
	}
</style>
<?php sc2(); ?>