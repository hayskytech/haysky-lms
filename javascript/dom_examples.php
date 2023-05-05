<h1>DOM Examples</h1>

<h2>Connect element to function</h2>

<?php sc1(); ?>
<button  id="myBtn">Change to red</button>
<script>
document.getElementById("myBtn").onclick = run();
function run() {
	alert('Hello');
}
</script>
<?php sc2(); ?>
<h2>Without function name</h2>
<?php sc1(); ?>
<button  id="myBtn2">Change to red</button>
<script>
document.getElementById("myBtn2").onclick = function() {
	alert('Welcome to Haysky!');
}
</script>
<?php sc2(); ?>


<h2>Onchange select/input element</h2>

<?php sc1(); ?>
<select onchange="run1(this)">
	<option>Male</option>
	<option>Female</option>
</select>
<input type="number" onchange="run3(this)" value="20">
<h1 id="ans">hai</h1>
<script type="text/javascript">
	function run2(x){
		alert(x.value);
	}
	function run3(z){
		document.getElementById('ans').style.fontSize = z.value+'px'
	}
</script>
<?php sc2(); ?>