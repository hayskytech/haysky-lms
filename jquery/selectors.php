<h1>Selectors</h1>

<h2>Select an element by "name"</h2>
<?php sc1(); ?>
<h2>Click me</h2>
<script type="text/javascript">
	$('h2').css('color','red');
</script>
<?php sc2(); ?>

<h2>Select an element by "id"</h2>
<?php sc1(); ?>
<h1 id="apple">hello world</h1>
<script type="text/javascript">
	$('#apple').css('color','red');
</script>
<?php sc2(); ?>
<h2>Select an element by "class"</h2>
<?php sc1(); ?>
<h1 class="bat">hello world</h1>
<script type="text/javascript">
	$('.bat').css('color','blue');
</script>
<?php sc2(); ?>


<h2>More ways to select</h2>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/table.min.css">
<table class="ui blue striped compact collapsing table">
  <tbody>
    <tr>
      <td>Syntax</td>
      <td>Description</td>
    </tr>
    <tr>
      <td>$("*")</td>
      <td>Selects all elements</td>
    </tr>
    <tr>
      <td>$(this)</td>
      <td>Selects the current HTML element</td>
    </tr>
    <tr>
      <td>$("p.intro")</td>
      <td>Selects all &lt;p&gt; elements with class="intro"</td>
    </tr>
    <tr>
      <td>$("p:first")</td>
      <td>Selects the first &lt;p&gt; element</td>
    </tr>
    <tr>
      <td>$("ul li:first")</td>
      <td>Selects the first &lt;li&gt; element of the first &lt;ul&gt;</td>
    </tr>
    <tr>
      <td>$("ul li:first-child")</td>
      <td>Selects the first &lt;li&gt; element of every &lt;ul&gt;</td>
    </tr>
    <tr>
      <td>$("[href]")</td>
      <td>Selects all elements with an href attribute</td>
    </tr>
    <tr>
      <td>$("a[target='_blank']")</td>
      <td>Selects all &lt;a&gt; elements with a target attribute value equal to "_blank"</td>
    </tr>
    <tr>
      <td>$("a[target!='_blank']")</td>
      <td>Selects all &lt;a&gt; elements with a target attribute value NOT equal to "_blank"</td>
    </tr>
    <tr>
      <td>$(":button")</td>
      <td>Selects all &lt;button&gt; elements and &lt;input&gt; elements of type="button"</td>
    </tr>
    <tr>
      <td>$("tr:even")</td>
      <td>Selects all even &lt;tr&gt; elements</td>
    </tr>
    <tr>
      <td>$("tr:odd")</td>
      <td>Selects all odd &lt;tr&gt; elements</td>
    </tr>
  </tbody>
</table>


<h1>Events</h1>
<table class="ui blue striped compact collapsing table">
	<thead>
    <tr>
      <th>Mouse Events</th>
      <th>Keyboard Events</th>
      <th>Form Events</th>
      <th>Document/Window Events</th>
    </tr>
	</thead>
  <tbody>
    <tr>
      <td>click</td>
      <td>keypress</td>
      <td>submit</td>
      <td>load</td>
    </tr>
    <tr>
      <td>dblclick</td>
      <td>keydown</td>
      <td>change</td>
      <td>resize</td>
    </tr>
    <tr>
      <td>mouseenter</td>
      <td>keyup</td>
      <td>focus</td>
      <td>scroll</td>
    </tr>
    <tr>
      <td>mouseleave</td>
      <td></td>
      <td>blur</td>
      <td>unload</td>
    </tr>
  </tbody>
</table>


<h2>Example</h2>
<?php sc1(); ?>
<button>click here</button>
<script type="text/javascript">
	$('button').click(function() {
		alert('hai');
	});
</script>
<?php sc2(); ?>
Similarly change "click" to other events.