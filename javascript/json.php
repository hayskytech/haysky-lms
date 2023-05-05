<h1>JSON</h1>
<ul>
<li>JSON is a format for storing and transporting data. JSON is often used when data is sent from a server to a web page.</li>
<li>JSON stands for JavaScript Object Notation</li>
<li>JSON is a lightweight data interchange format</li>
<li>JSON is language independent *</li>
<li>JSON is "self-describing" and easy to understand</li>
<li>JSON Syntax Rules</li>
<li>Data is in name/value pairs</li>
<li>Data is separated by commas</li>
<li>Curly braces hold objects</li>
<li>Square brackets hold arrays</li>
</ul>
<h2>JavaScript Objects</h2>
JavaScript objects are written with curly braces {}. Object properties are written as name:value pairs, separated by commas.
<?php sc1(); ?>
<script>
var person = {
  firstName : "John",
  lastName  : "Doe",
  age     : 50,
  eyeColor  : "blue"
};
document.write(person.firstName + " is " + person.age + " years old.");
</script>
<?php sc2(); ?>


<h2>JSON Example</h2>
<?php sc1(); ?>
<script type="text/javascript">
	person = {
		"fname":"ramesh",
		"lname":"kumar"
	}
	alert(person.fname);
	stu = {
		"child1" : [
			{"fname" : "ramesh"},
			{"lname" : "al;jsdg"},
			{"phone" : "698464645"}
		],
		"child2" : [
			{"fname" : "suresh"},
			{"lname" : "al;jsdg"},
			{"phone" : "841444474"}
		]
	}
	alert(stu.child1[0].fname);
	std = {
		"child1" : { "fname":"nag",'lname':'kabsjd' },
		"child2" : { "fname":"suresh",'lname':'kabsjd' },
		"child3" : { "fname":"amhsdv",'lname':'kabsjd' },
	}
	alert(std.child1.fname);
</script>
<?php sc2(); ?>
<h2>JSON Data - A Name and a Value</h2>
JSON data is written as name/value pairs, just like JavaScript object properties.
<?php sc1(); ?>
"firstName":"John"
<?php sc2(); ?>
JSON names require double quotes. JavaScript names do not.


<h2>JSON Arrays</h2>
JSON arrays are written inside square brackets.
<?php sc1(); ?>
"employees":[
  {"firstName":"John", "lastName":"Doe"},
  {"firstName":"Anna", "lastName":"Smith"},
  {"firstName":"Peter", "lastName":"Jones"}
]
<?php sc2(); ?>