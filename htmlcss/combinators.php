A combinator is something that explains the relationship between the selectors. There are four different combinators in CSS.
<h2>Descendant (space)</h2>
Matches all elements that are descendants of a specified element. Elements can be direct children or children of children.
<pre>&lt;div&gt;
  &lt;b&gt;Hai&lt;/b&gt;
  &lt;p&gt;Haysky &lt;b&gt;Technologies&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;style&gt;
<strong>div b</strong>{ 
  color: red;
}
&lt;/style&gt;</pre>
<h2>Child (&gt;)</h2>
Selects all elements that are the immediate children of a specified element.
<pre>&lt;div&gt;
  &lt;b&gt;Hai&lt;/b&gt;
  &lt;p&gt;Haysky &lt;b&gt;Technologies&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;style&gt;
<strong>div &gt; b</strong>{ 
  color: red;
}
&lt;/style&gt;</pre>
<h2>Adjacent Sibling (+)</h2>
Selects all elements that are the adjacent siblings of a specified element.
<pre>&lt;div&gt;
  &lt;p&gt;Haysky&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;Hello&lt;/p&gt;
&lt;p&gt;Hai&lt;/p&gt;
&lt;style&gt;
<strong>div + p</strong>{ 
  color: red;
}
&lt;/style&gt;</pre>
<h2>General Sibling (~)</h2>
Selects all elements that are siblings of a specified element.
<pre>&lt;div&gt;
  &lt;p&gt;Haysky&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;Hello&lt;/p&gt;
&lt;p&gt;Hai&lt;/p&gt;
&lt;style&gt;
<strong>div ~ p</strong>{ 
  color: red;
}
&lt;/style&gt;</pre>
<h2>Pseudo-class</h2>
A pseudo-class is used to define a special state of an element.
<pre>&lt;a href="new.html"&gt;Click here&lt;/a&gt;
&lt;style&gt;
/* unvisited */
a:link {
  color: red;
}
a:visited {
  color: brown;
}
a:hover {
  color: skyblue;
}
a:active {
  color: hotpink;
}
&lt;/style&gt;</pre>
<h2>Child selection</h2>
We can select child element: first-child, last-child, nth-child(5), nth-child(even), nth-child(odd).
<pre>&lt;div&gt;
  &lt;p&gt;hello world&lt;/p&gt;
  &lt;p&gt;hello world&lt;/p&gt;
  &lt;p&gt;hello world&lt;/p&gt;
  &lt;p&gt;hello world&lt;/p&gt;
&lt;/div&gt;
&lt;style type="text/css"&gt;
p:first-child{
  background: pink;
}
p:last-child{
  background: hotpink;
}
p:nth-child(3){
  background: skyblue;
}
table, td{
  border: 1px solid black;
  border-collapse: collapse;
}
td{
 height: 50px;
  width: 100px;
}
tr:nth-child(even){
background: skyblue;
}
tr:nth-child(odd){
  background: grey;
}
&lt;/style&gt;
&lt;table&gt;
  &lt;tr&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;hai&lt;/td&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;hai&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;hai&lt;/td&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;hai&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;hai&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;haysky&lt;/td&gt;&lt;td&gt;technologies&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;hai&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;</pre>
<h2>Media Query</h2>
Add this tag for mobile optimisation.
<pre>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</pre>
<h2>Screen size</h2>
Specify different CSS for different screen sizes. As per below example, pink background will come only in devices with width less than 768px.
<pre>@media(max-width: 768px){
  div {
    background: pink;
  }
}</pre>
<h2>Orientation: Portrait / Landscape</h2>
<pre>@media only screen and (orientation: landscape) {
  body{
    background-color: lightblue;
  }
}</pre>