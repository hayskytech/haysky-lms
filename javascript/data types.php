<h1>Data Types</h1>
JavaScript variables can hold many data types: numbers, strings, objects and more. JavaScript Types are Dynamic. This means that the same variable can be used to hold different data types:
<?php sc1(); ?>
<script>
var x;         // Now x is undefined
x = 5;         // Now x is a Number
x = "John";      // Now x is a String
document.write( x );
</script>
<?php sc2(); ?>
<h2>Strings</h2>
A string (or a text string) is a series of characters. Strings are written with quotes. You can use single or double quotes.
<?php sc1(); ?>
<script>
var answer1 = "It's alright";
var answer2 = "He is called 'Johnny'";
var answer3 = 'He is called "Johnny"';
document.getElementById("demo").innerHTML =
answer1 + "<br>" + 
answer2 + "<br>" + 
answer3;
</script>
<?php sc2(); ?>


<h2>Numbers</h2>
JavaScript has only one type of numbers. Numbers can be written with, or without decimals.
<?php sc1(); ?>
<script>
var y = 123;
var z = 123e-5;
document.write(y + "<br>" + z);
</script>
<?php sc2(); ?>


<h2>Booleans</h2>
Booleans can only have two values: true or false.
<?php sc1(); ?>
<script>
var x = 5;
var y = 7;
document.write(x > y);
</script>
<?php sc2(); ?>
<h2>Arrays</h2>
JavaScript arrays are written with square brackets and array items are separated by commas.
<?php sc1(); ?>
<script>
var cars = ["Saab","Volvo","BMW"];
document.write(cars[0]);
</script>
<?php sc2(); ?>
JavaScript Object you will see in later chapters.

<h2>Adding Numbers and Strings</h2>
JavaScript uses the + operator for both addition and concatenation.
Numbers are added. Strings are concatenated.
If you add two numbers, the result will be a number:    
<?php sc1(); ?>
<script>
var x = 10;
var y = 20;
var z = x + y;
</script>
<?php sc2(); ?>

If you add two strings, the result will be a string concatenation:
<?php sc1(); ?>
<script type="text/javascript">
var x = "10";
var y = "20";
var z = x + y;
</script>
<?php sc2(); ?>
If you add a number and a string, the result will be a string concatenation:
<?php sc1(); ?>
<script type="text/javascript">
var x = 10;
var y = "20";
var z = x + y;   
</script>
<?php sc2(); ?>
If you add a string and a number, the result will be a string concatenation:
<?php sc1(); ?>
<script type="text/javascript">
var x = "10";
var y = 20;
var z = x + y;
</script>
<?php sc2(); ?>
