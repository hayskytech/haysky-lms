<h2>Image</h2>

<?php sc1(); ?>

<img src="apple.jpg" width="200" height="300" alt="Hello">

<?php sc2(); ?>

<h2>Images on other folders</h2>

<?php sc1(); ?>
<img src="one/apple.jpg">
<img src="../apple.jpg">
<img src="/apple.jpg">
<img src="https://haysky.com/wp-content/uploads/2021/02/transparent-logo-extended-small.png">
<?php sc2(); ?>

<h2>Hyperlink</h2>
<?php sc1(); ?>
<a href="about.html">About</a>
<a href="https://haysky.com">Click to open Haysky</a>
<a href="https://google.com" target="_self">Open in Same Tab</a>
<a href="https://google.com" target="_blank">Open in New Tab</a>
<?php sc2(); ?>

<h2>Block level Elements</h2>

Block – level element always starts on a new line and takes up the full width available (stretches out to the left and right as far as it can). Some block level elements in HTML:

<?php sc1(); ?>
<address> <article> <aside> <blockquote> <canvas> <dd> <div> <dl> <dt>  
<figcaption> <figure> <footer> <form> <h1><h6> <header> <hr> <li> <main> <nav>
<noscript> <ol> <p> <pre> <section> <table> <tfoot> <ul> <video> <fieldset>
<?php sc2(); ?>

<h2>Inline Elements</h2>
Inline element does not start on a new line and only takes up as much width as necessary.
<?php sc1(); ?>
<a> <abbr> <acronym> <b> <bdo> <big> <button> <cite> <code> <dfn> <em> <i>
<img> <input> <kbd> <label> <map> <object> <output> <q> <samp> < script>
<small> <span> <strong> <sub> <sup> <textarea> <time> <tt> <var> <select>
<?php sc2(); ?>

<h2>HTML Grouping Tags</h2>

&lt;div> and &lt;span> elements. The &lt;div> element is often used as a container for other HTML elements. The &lt;span> element is often used as a container for some text or inline elements.

<?php sc1(); ?>
<div>Hello</div>
<span>Hai</span>
<?php sc2(); ?>