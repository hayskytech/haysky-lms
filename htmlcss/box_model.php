<h1>CSS Box Model</h1>

<b>Content</b> - The content of the box, where text and images appear.
<b>Padding</b> - Clears an area around the content. (transparent)
<b>Border</b> - A line that goes around the padding and content. (colored)
<b>Outline</b> - A line that goes around the outline and falls on margin. (colored)
<b>Margin</b> - Clears an area outside the border. (transparent)
<h2>Content</h2>
<?php sc1(); ?>
<h1>Hello</h1>
<style>
h1{
  background: pink;
  width: 400px;
  height: 250px;
</style>
<?php sc2(); ?>

<h2>Padding</h2>
Creates a transparent gap inside the element.
<pre>padding: 20px;</pre>
<strong>Padding Individual sides</strong>
<pre>padding-top:10px;
padding-right:40px;</pre>
<strong>Padding Shorthand property (top right bottom left)</strong>
<pre>padding: 10px 40px 30px 0px;</pre>
<h2>Margin</h2>
Creates a transparent gap outside of the element.
<pre>margin: 30px;</pre>
<strong>Margin Individual sides</strong>
<pre>margin-top:10px;
margin-right:40px;</pre>
<strong>Margin Shorthand property (top right bottom left)</strong>
<pre>margin: 10px 40px 30px 0px;</pre>
<h2>Border</h2>
<strong>Shorthand property</strong>
<pre>border: 1px solid black;</pre>
<strong>Border Properties
</strong>
<pre>border-width: 2px;
border-style: solid; (double / dashed / ridge / groove / hidden / none )
border-color: red;</pre>
<strong>Border on individual sides</strong>
<pre>border-top-width: 10px;
border-bottom-width: 20px;
border-top-color: blue;
border-left-color: red;</pre>
<strong>Border Individual Shorthand Property</strong>
<pre>border-width: 10px 30px 40px 50px;
border-color: red blue green yellow;</pre>
<h2>Outline</h2>
<strong>Shorthand property</strong>
<pre>outline: 1px solid black;</pre>
<strong>Outline Properties</strong>
<pre>outline-width: 2px;
outline-style: solid;
outline-color: red;</pre>
<strong>Outline on Individual Sides</strong>
<pre>outline-top-width: 10px;
outline-bottom-width: 20px;
outline-top-color: blue;
outline-left-color: red;</pre>
<strong>Outline Individual Shorthand Property</strong>
<pre>outline-width: 10px 30px 40px 50px;
outline-color: red blue green yellow;</pre>