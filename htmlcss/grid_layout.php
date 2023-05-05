<h1>Grid Layout</h1>

<?php sc1(); ?>
<style type="text/css">
body{
  padding: 0;
  margin: 0;
  background: pink;
}
main{
  max-width: 1200px;
  background: skyblue;
  padding: 20px;
  overflow: auto;
  margin: auto;
}
.grid{
  width: 100%;
}
.box{
  float: left;
  width: 25%;
}
.inner-box{
  background: orange;
  margin: 5px;
  border: 1px solid darkblue;
  padding: 10px;
}
@media(max-width:768px){
  .box{
    width: 50%;
  }
}
@media(max-width:480px){
  .box{
    width: 100%;
  }
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<main>
<div class="grid">
<h1>Grid Layout</h1>
<div class="box">
  <div class="inner-box">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet</p>
  </div>
</div>
<div class="box">
  <div class="inner-box">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet</p>
  </div>
</div><div class="box">
  <div class="inner-box">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet</p>
  </div>
</div><div class="box">
  <div class="inner-box">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet</p>
  </div>
</div>
<div class="box">
<div class="inner-box">
<h2>Title</h2>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
</main>
<?php sc2(); ?>