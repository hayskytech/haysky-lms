<h2>Other Tags</h2>


Short Quotations: We use &lt;q> tag for normal short quotations.
<?php sc1(); ?>
<q>Sun rises in the east</q>
<?php sc2(); ?>

&lt;blockquote> element defines a section that is quoted from another source.
<?php sc1(); ?>
<blockquote cite="http://www.worldwildlife.org/who/index.html">
For 50 years, WWF has been protecting the future of nature.</blockquote>
<?php sc2(); ?>

Abbreviations: We use &lt;abbr> tag along with title attribute. Full form is written inside the title.
<?php sc1(); ?>
<abbr title="World Health Organization">WHO</abbr>
<?php sc2(); ?>

Address or Contact Information
<?php sc1(); ?>
<address>
Written by Sufyan Shaik.<br>
Visit us at:<br>Kurnool, AP<br>India
</address>
<?php sc2(); ?>

&lt;cite> for Work Title: defines the title of a work. Browsers display &lt;cite> elements in italic.
<?php sc1(); ?>
<p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
<?php sc2(); ?>

&lt;bdo> for Bi-Directional Override:
<?php sc1(); ?>
<bdo dir="rtl">abcdefghijklmnop</bdo>
<?php sc2(); ?>

&lt;kbd> for Keyboard Input:
<?php sc1(); ?>
<p>Save the document by pressing <kbd>Ctrl + S</kbd></p>
<?php sc2(); ?>

&lt;samp> For Program Output:
<?php sc1(); ?>
<p>The program will return <samp>Error!</samp></p>
<?php sc2(); ?>

&lt;code> For Computer Code: defines a fragment of computer code.
<?php sc1(); ?>
<code>
x = 5;
y = 6;
z = x + y;
</code>
<?php sc2(); ?>

&lt;var> For Variables:
<?php sc1(); ?>
Einstein wrote: <var>E</var> = <var>mc</var><sup>2</sup>.
<?php sc2(); ?>

<h2>Iframes</h2>
An iframe is used to display a web page within a web page.<br>
We can give height and width attributes to the iframe. By default, an iframe has a border around it. To remove the border, add the style attribute and use the CSS border property:
<?php sc1(); ?>
<iframe src="new.html" style="border:none;" height="500" width="300"></iframe>
<?php sc2(); ?>

Iframe - Target for a Link: The target attribute of the link must refer to the name attribute of the iframe:
<?php sc1(); ?>
<p><a href="https://w3schools.com" target="bat">W3Schools.com</a></p>
<iframe src="demo_iframe.htm" name="bat"></iframe>
<?php sc2(); ?>

<h2>Video</h2>
The HTML &lt;video> element is used to show a video.
<?php sc1(); ?>
<video width="320" height="240" controls autoplay>
 <source src="movie.mp4" type="video/mp4">
 <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<?php sc2(); ?>

<h2>Audio</h2>
The HTML &lt;audio> element is used to play an audio file on a web page.
<?php sc1(); ?>
<audio controls>
 <source src="horse.ogg" type="audio/ogg">
 <source src="horse.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<?php sc2(); ?>

<h2>YouTube Embed</h2>
Right click on the YouTube video and Copy Embed code. Paste it in your HTML file.
<?php sc1(); ?>
<iframe width="420" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&amp;loop=1&amp;controls=0">
</iframe>
<?php sc2(); ?>

<h2>SVG Graphics</h2>
SVG stands for Scalable Vector Graphics.

SVG Circle
<?php sc1(); ?>
<svg width="100" height="100">
<circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>
<?php sc2(); ?>

SVG Rectangle
<?php sc1(); ?>
<svg width="400" height="100">
 <rect width="400" height="100" 
  style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
</svg>
<?php sc2(); ?>

SVG Rounded Rectangle
<?php sc1(); ?>
<svg width="400" height="180">
 <rect x="50" y="20" rx="20" ry="20" width="150" height="150"
 style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
</svg>
<?php sc2(); ?>

SVG Star
<?php sc1(); ?>
<svg width="300" height="200">
<polygon points="100,10 40,198 190,78 10,78 160,198"
style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;"/>
</svg>
<?php sc2(); ?>
