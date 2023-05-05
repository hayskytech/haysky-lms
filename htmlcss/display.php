<h1>Display</h1>

<table>
<tbody>
<tr>
<td>display:</td>
<td>block; | inline; | inline-block;</td>
<td>(show)</td>
</tr>
<tr>
<td>display:</td>
<td>none;</td>
<td>(hide &amp; no space)</td>
</tr>
<tr>
<td>visibility:</td>
<td>hidden;</td>
<td>(hide with space)</td>
</tr>
<tr>
<td>visibility:</td>
<td>visible;</td>
<td>(default visible state)</td>
</tr>
</tbody>
</table>

<h2>Max-Width</h2>
<table>
<tbody>
<tr>
<td>max-width:</td>
<td>500px;</td>
<td>(can be less than 500px not more than that)</td>
</tr>
<tr>
<td>min-width:</td>
<td>200px;</td>
<td>(can be more than 200px not less than that)</td>
</tr>
<tr>
<td>max-height:</td>
<td>300px;</td>
<td>(can be less than 500px not more than that)</td>
</tr>
<tr>
<td>min-height:</td>
<td>400px;</td>
<td>(can be more than 200px not less than that)</td>
</tr>
</tbody>
</table>
<h2>Float</h2>
<table>
<tbody>
<tr>
<td>float:</td>
<td>left;</td>
<td>(element goes to left)</td>
</tr>
<tr>
<td>float:</td>
<td>right;</td>
<td>(element goes to right)</td>
</tr>
<tr>
<td>clear:</td>
<td>both;</td>
<td>(given to elements after float elements)</td>
</tr>
</tbody>
</table>
<h2>Align Center</h2>
We can use margin: auto; to align center.

<?php sc1(); ?>
<h1>Haysky</h1>
<style>
h1{
  background: pink;
  width: 300px;
  margin: auto;
}
</style>
<?php sc2(); ?>

<h2>Overflow</h2>
If an element is taller than the element containing it, and it is floated, it will overflow outside of its container then we can add overflow: auto; to the containing element to fix this problem.
<table>
<tbody>
<tr>
<td>overflow:</td>
<td>visible;</td>
<td>(extra content is visible) <strong>Default</strong></td>
</tr>
<tr>
<td>overflow:</td>
<td>auto;</td>
<td>(scroll appears if needed)</td>
</tr>
<tr>
<td>overflow:</td>
<td>scroll;</td>
<td>(scroll appears always)</td>
</tr>
<tr>
<td>overflow:</td>
<td>hidden;</td>
<td>(hide extra content)</td>
</tr>
</tbody>
</table>
<strong>Example</strong>

<?php sc1(); ?>
<div>lorem ipsum...</div>
<style>
div{
  height: 150px;
  width: 300px;
  border: 2px solid red;
  overflow: auto;
}
</style>
<?php sc2(); ?>


<h2>Opacity</h2>
The opacity property can take a value from 0.0 - 1.0. Lower the value, the more transparent.

<?php sc1(); ?>
<img src="apple.jpg">
<h1>Hello</h1>
<style>
img { opacity: 0.4; }
h1{ opacity: 0.5; }
</style>
<?php sc2(); ?>

<h2>Navigation Menu-1</h2>

<?php sc1(); ?>
<ul>
  <li>HOME</li>
  <li>ABOUT</li>
  <li>SERVICES</li>
  <li>FEEDBACK</li>
  <li>CONTACT</li>
</ul>
<style type="text/css">
  ul{
    list-style-type: none;
    padding: 0;
  }
  li{
    display: inline-block;
    border: 2px solid blue;
    padding: 10px 20px;
    background-color: skyblue;
  }
</style>
<?php sc2(); ?>

<h2>Navigation Menu-2</h2>
<?php sc1(); ?>
<ul>
  <li><a href="index.html">HOME</a></li>
  <li><a href="about.html">ABOUT</a></li>
  <li><a href="services.html">SERVICES</a></li>
  <li><a href="feedback.html">FEEDBACK</a></li>
  <li><a href="contact.html">CONTACT</a></li>
</ul>
<style type="text/css">
ul{
  list-style-type: none;
  padding: 0;
  display: block;
}
li{
  display: inline-block;
  margin: 0px 5px;
}
li a{
  display: inline-block;
  font-family: Arial;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  border: 2px solid blue;
  padding: 10px 20px;
  background-color: pink;
}
li a:hover{
  background-color: hotpink;
  border-color: red;
  color: yellow;
  outline: 4px solid orange;
}
</style>
<?php sc2(); ?>

<h2>Navigation Menu-2</h2>
<?php sc1(); ?>
<ul>
  <li><a href="index.html">HOME</a></li>
  <li><a href="about.html">ABOUT</a></li>
  <li><a href="services.html">SERVICES</a>
    <ol>
      <li><a href="design.html">Design</a></li>
      <li><a href="development.html">Development</a></li>
      <li><a href="hosting.html">Hosting</a></li>
      <li><a href="training.html">Training</a></li>
    </ol>
  </li>
  <li><a href="feedback.html">FEEDBACK</a></li>
  <li><a href="contact.html">CONTACT</a>
    <ol>
      <li><a href="#">PHONE</a></li>
      <li><a href="#">EMAIL</a></li>
      <li><a href="#">ADDRESS</a></li>
    </ol>
  </li>
</ul>
<style type="text/css">
  ul,ol{
    list-style-type: none;
    padding: 0;
    display: block;
    text-align: center;
  }
  ul>li{
    display: inline-block;
    margin: 0px 5px;
    height: 50px;
    position: relative;
  }
  body a{
    font-family: Arial;
    text-decoration: none;
    font-weight: bold;
  }
  ul>li>a{
    display: inline-block;
    font-size: 20px;
    border: 2px solid blue;
    padding: 10px 20px;
    background-color: teal;
    color: white;
  }
  ul>li>a:hover{
    background-color: hotpink;
    border-color: red;
    color: yellow;
    outline: 4px solid orange;
  }
  ul>li:hover >ol{
    display: block;
    position: absolute;
    width: 100%;
  }
  ol>li{
    display: block;
    z-index: 22;
    border: 1px solid;
  }
  ol>li>a{
    padding: 10px;
    background-color: skyblue;
    text-decoration: none;
    display: block;
  }
  ol{
    display: none;
  }
  ol>li>a:hover{
    background-color: teal;
    color: wheat;
  }
</style>
<?php sc2(); ?>