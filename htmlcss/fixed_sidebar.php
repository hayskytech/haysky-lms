<h1>Fixed sidebar</h1>

<?php sc1(); ?>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<main>
<h1>Haysky Technologies</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1>
<h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1>
</main>
<style>
li a {
  display: block;
  text-decoration: none;
  font-size: 20px;
  background-color: #dddddd;
  border: 1px solid;
  margin: 2px 2px;
  padding: 10px;
}
li a:hover{
  background-color: skyblue;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: pink;
  width: 150px;
  height: 100vh;
  position: fixed;
}
main{
  margin-left: 150px;
  padding: 10px;
}
body{
  margin: 0;
}
</style>
<?php sc2(); ?>

<h1>Fixed top menu</h1>
<?php sc1(); ?>
<ul>
  <li>HOME</li>
  <li>ABOUT</li>
  <li>SERVICES</li>
  <li>FEEDBACK</li>
  <li>CONTACT</li>
</ul>
<main>
<h1>Haysky</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1>
<h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1><h1>hello</h1>
</main>
<style type="text/css">
p{
  font-size: 25px;
  text-align: justify;
}
li{
  display: inline-block;
  border: 2px solid blue;
  border-radius: 20px;
  padding: 10px 20px;
  background-color: skyblue;
}
ul{
  list-style-type: none;
  padding: 10px;
  top: 0;
  background-color: pink;
  position: fixed;
  width: 100%;
  margin: 0;
  text-align: center;
  height: 45px;
}
body{
  margin: 0;
}
main{
  width: 1100px;
  margin: auto;
  margin-top: 45px !important;
  border: 1px solid red;
  padding: 40px;
}
</style>
<?php sc2(); ?>