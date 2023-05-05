<h1>CSS</h1>
CSS full form is <b>Cascading Style Sheets</b>. CSS is a style sheet language that describes the presentation of an HTML
document. External style sheets are stored in CSS files. The file extension is ".css". CSS describes how HTML elements
are to be displayed on screen, paper, or in other media. CSS saves a lot of work. It can control the layout of multiple
web pages all at once. CSS is a Loosely Typed Language. Extra white spaces and empty new lines are ignored. CSS is not
case-sensitive.
<h2><b>Syntax</b></h2>
<pre>Selector{
	property: value;
	property: value;
}</pre>
<h2><strong>Comments</strong></h2>
<pre>/* This is a single-line comment */
/* This is multi line comment
----------------
*/</pre>
<b>Selectors: </b>CSS selectors are used to "find" (or select) HTML elements based on their element name, id, class,
attribute, and more.
<h2><b>The element Selector</b></h2>

<?php sc1(); ?>
<p>Hello world</p>
<style>
	p {
		color: red;
	}
</style>
<?php sc2(); ?>

<h2><b>The id selector</b></h2>
The id selector uses the id attribute of an HTML element to select a specific element.
<?php sc1(); ?>
<h1 id="para1">Welcome to CSS</h1>
<p>Hello world</p>
<style>
	#para1 {
		text-align: center;
		color: red;
	}
</style>
<?php sc2(); ?>

<h2><b>The Class selector</b></h2>
The class selector uses the class attribute of an HTML element to select a specific element.
<?php sc1(); ?>
<h1 class="apple">Welcome to CSS</h1>
<p>Hello world</p>
<style>
	.apple {
		text-align: right;
		color: blue;
	}
</style>
<?php sc2(); ?>

<h2><b>Grouping Selectors</b></h2>
<?php sc1(); ?>
<h1 class="apple">Welcome to CSS</h1>
<p>Hello world</p>
<style>
	h1,
	p,
	.apple,
	#para1 {
		color: red;
	}
</style>
<?php sc2(); ?>

<h2><b>Text</b></h2>
<table>
	<tbody>
		<tr>
			<td>text-transform:</td>
			<td>uppercase; | lowercase; | capitalize;</td>
		</tr>
		<tr>
			<td>text-decoration:</td>
			<td>none; | overline; | line-through; | underline;</td>
		</tr>
		<tr>
			<td>color:</td>
			<td>pink; | #fed1ff; | rgb(254,209,255);

				hsl(0, 100%, 50%);</td>
		</tr>
		<tr>
			<td>text-align:</td>
			<td>center; | left; | right; | justify;</td>
		</tr>
		<tr>
			<td>text-indent:</td>
			<td>50px;</td>
		</tr>
		<tr>
			<td>letter-spacing:</td>
			<td>3px; | -3px;</td>
		</tr>
		<tr>
			<td>line-height:</td>
			<td>0.8; | 1.8;</td>
		</tr>
		<tr>
			<td>direction:</td>
			<td>rtl;</td>
		</tr>
		<tr>
			<td>word-spacing:</td>
			<td>10px; | -5px;</td>
		</tr>
	</tbody>
</table>
<table>
	<tbody>
		<tr>
			<td>font-family:</td>
			<td>Times New Roman; | Times; | serif;</td>
		</tr>
		<tr>
			<td>font-style:</td>
			<td>normal; | italic; | oblique;</td>
		</tr>
		<tr>
			<td>font-size:</td>
			<td>40px; | 2.5em; | 100%;</td>
		</tr>
		<tr>
			<td>font-weight:</td>
			<td>normal; | bold;</td>
		</tr>
		<tr>
			<td>font-variant:</td>
			<td>normal; | small-caps;</td>
		</tr>
	</tbody>
</table>
<h2>Lists</h2>
<table>
	<tbody>
		<tr>
			<td><b>ol</b></td>
			<td>list-style-type:</td>
			<td>upper-roman; | lower-alpha; | upper-alpha;</td>
		</tr>
		<tr>
			<td><b>ul</b></td>
			<td>list-style-type:</td>
			<td>disc; | circle; | square; | none;</td>
		</tr>
		<tr>
			<td><b>ul</b></td>
			<td>list-style-image:</td>
			<td>url('one.jpg');</td>
		</tr>
		<tr>
			<td><b>ul</b></td>
			<td>list-style-position:</td>
			<td>inside; | outside;</td>
		</tr>
	</tbody>
</table>
<strong>Shorthand List Property</strong>
<pre>ul {
	 list-style: square inside url("one.gif");
}
li{
	background: pink;
}</pre>