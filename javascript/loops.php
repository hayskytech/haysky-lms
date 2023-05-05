<h1>Loops</h1>
Loops are used to execute a block of code number of continuously.
<ul>
	<li>for - loops through a block of code a number of times</li>
	<li>for/in - loops through the properties of an object</li>
	<li>for/of - loops through the values of an iterable object</li>
	<li>while - loops through a block of code while a specified condition is true</li>
	<li>do/while - also loops through a block of code while a specified condition is true</li>
</ul>
<h2>For loop</h2>
<?php sc1(); ?>
<script>
for (i = 0; i < 5; i++) {
  alert(i);
}
for(x=5; x >= 1; x--){
   document.write("hello<br>");
}
</script>
<?php sc2(); ?>
<h2>The For/In Loop</h2>
<p>The for/in statement loops through the properties of an object.</p>
<?php sc1(); ?>
<script>
var person = {fname:"John", lname:"Doe", age:25};
for (x in person) {
  alert(person[x]);
}
</script>
<?php sc2(); ?>


<h2>For/Of Loop</h2>
<p>The JavaScript for/of statement loops through the values of an iterable objects for/of lets you loop over data structures that are iterable such as Arrays, Strings, Maps, NodeLists, and more.</p>
<?php sc1(); ?>
<script>
txt = ["John","Doe","blue"]
for (x of txt) {
  alert(x);
}
</script>
<?php sc2(); ?>


<h2>While Loop</h2>
The while loop loops through a block of code as long as a specified condition is true.
<?php sc1(); ?>
<script>
var i = 0;
while (i < 5) {
  document.write("hello<br>");
  i++;
}
</script>
<?php sc2(); ?>


<h2>Do/While Loop</h2>
The do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.
<?php sc1(); ?>
<script>
var i = 20;
do {
    alert(i);
    i++;
}
while (i < 10);
</script>
<?php sc2(); ?>
<h2>Break and Continue</h2>
The break statement "jumps out" of a loop. The continue statement "jumps over" one iteration in the loop.
<?php sc1(); ?>
<script>
for (i = 1; i <= 20; i++) {
   if (i==5) {
      continue;
   }
   if (i==10) {
      break;
   }
   document.write(i+') hai<br>');
}
</script>
<?php sc2(); ?>
<h1>Example</h1>
<h2>Triangle (left aligned)</h2>
<?php sc1(); ?>
&lt;script type="text/javascript">
str = ''
for(x=0;x<=10;x++){
  for (y=0;y<=x;y++){
    str += '* '
  }
  str += '<br>'
}
document.write('&lt;pre>'+str+'&lt;/pre>')
&lt;/script>
<?php sc2(); ?>

<h2>Triangle (center aligned)</h2>
<?php sc1(); ?>
&lt;script type="text/javascript">
str = ''
for(x=0; x<=10; x++){
  for (z=0;z<=10-x;z++){
    str += ' ' // use double space for right aligned
  }
  for (y=0; y<=x; y++){
    str += '* '
  }
  str += '<br>'
}
document.write('&lt;pre>'+str+'&lt;/pre>')
&lt;/script>
<?php sc2(); ?>