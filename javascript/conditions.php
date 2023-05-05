<h1>Conditional Statements</h1>

<h2>if</h2>

<p>Execute a block of code <b>if</b> a <b>condition</b> is <b>true</b></p>

<?php sc1(); ?>
<script type="text/javascript">
	age = 20;
	if (age > 18) {
		document.write("Eligible for voting");
	}
</script>
<?php sc2(); ?>

<h2>if else</h2>

<p>Execute another block of code <b>if</b> a <b>condition</b> is <b>false</b></p>

<?php sc1(); ?>
<script type="text/javascript">
	age = 15;
	if (age > 18) {
		document.write("Eligible for voting");
	} else {
		document.write("Not Eligible for voting");
	}
</script>
<?php sc2(); ?>

<h2>else if <i>ladder</i></h2>

<?php sc1(); ?>
<script type="text/javascript">
	if (amount > 200) {
		alert("Lunch");
	} else if (amount > 100){
		alert("Breakfast");
	} else if (amount > 50){
		alert("Snack");
	} else {
		alert("Nothing");
	}
</script>
<?php sc2(); ?>
<h2>Switch</h2>
<ul>
	<li>The value of the expression is compared with the values of each case.</li>
	<li>If there is a match, the associated block of code is executed.</li>
	<li>If there is no match, the default code block is executed.</li>
</ul>

<?php sc1(); ?>
<script>
x = 2;
switch (x) {
  case 1:
    alert("Monday");
    break;
  case 2:
    alert("Tuesday");
    break;
  case 3:
    alert("Wednesday");
    break;
  case 4:
    alert("Thursday");
    break;
  case 5:
    alert("Friday");
    break;
  case 6:
    alert("Saturday");
    break;
  case 7:
    alert("Sunday");
    break;
  default:
    echo("Invalid day");
    break;
}
</script>

<?php sc2(); ?>


<h1>Tasks</h1>
<li>Write a program to determine student <b>pass or fail</b>. <i>(Marks should be above 35.)</i></li>
<li>Write a program to choose <b>month</b> using switch.</li>