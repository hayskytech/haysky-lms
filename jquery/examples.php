<h1>Addition</h1>
<?php sc1(); ?>
X : <input type="number" id="x"> <br><br>
Y : <input type="number" id="y"> <br><br>
<button id="add">Addition</button>
<h2 id="result"></h2>

<script type="text/javascript">
$('#add').click(function(){

	x = $('#x').val();
	y = $('#y').val();
	z = parseInt(x) + parseInt(y);
	$('#result').html(z);

});
</script>
<?php sc2(); ?>
<h1>Show / Hide password</h1>
<?php sc1(); ?>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css">

<form>
	EMail: <input type="email" id="email"><br><br>
	Password: <input type="password" id="pwd">
	<i class="red slash eye icon" type="button" id="eye"></i><br><br>
</form>

<script type="text/javascript">
$('#eye').click(function(){

	pwd = $('#pwd');
	eye = $('#eye');
	x = pwd.attr('type');

	if (x=='text') {
		pwd.attr('type','password');
		eye.addClass('slash');
	} else {
		pwd.attr('type','text');
		eye.removeClass('slash')
	}

});
</script>

<style type="text/css">
	#eye{
		position: relative;
		right: 25px;
	}
</style>
<?php sc2(); ?>