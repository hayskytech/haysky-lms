<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/table.min.css">
<h1>Operators</h1>
<h2>Arithmetic Operators</h2>
<table class="ui blue striped compact collapsing table">
  <thead>
    <tr>
      <th>Operator</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>+</td>
      <td>Addition</td>
    </tr>
    <tr>
      <td>-</td>
      <td>Subtraction</td>
    </tr>
    <tr>
      <td>*</td>
      <td>Multiplication</td>
    </tr>
    <tr>
      <td>**</td>
      <td>Exponentiation</td>
    </tr>
    <tr>
      <td>/</td>
      <td>Division</td>
    </tr>
    <tr>
      <td>%</td>
      <td>Modulus (Division Remainder)‎</td>
    </tr>
    <tr>
      <td>++</td>
      <td>Increment (x++)</td>
    </tr>
    <tr>
      <td>--</td>
      <td>Decrement (x--)</td>
    </tr>
  </tbody>
</table>
<h2>Assignment Operators</h2>
<table class="ui blue striped compact collapsing table">
  <thead>
    <tr>
      <td>Operator</td>
      <td>Example</td>
      <td>Same as</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>=</td>
      <td>x = y</td>
      <td>x = y</td>
    </tr>
    <tr>
      <td>+=</td>
      <td>x += y</td>
      <td>x = x + y</td>
    </tr>
    <tr>
      <td>-=</td>
      <td>x -= y</td>
      <td>x = x - y</td>
    </tr>
    <tr>
      <td>*=</td>
      <td>x *= y</td>
      <td>x = x * y</td>
    </tr>
    <tr>
      <td>/=</td>
      <td>x /= y</td>
      <td>x = x / y</td>
    </tr>
    <tr>
      <td>%=</td>
      <td>x %= y</td>
      <td>x = x % y</td>
    </tr>
    <tr>
      <td>**=</td>
      <td>x **= y</td>
      <td>x = x ** y</td>
    </tr>
  </tbody>
</table> 
<?php sc1(); ?>
<script>
x = 10;
x += 5;
document.write(x);
</script>
<?php sc2(); ?>

<h2>String Operators</h2> 
<p>The += assignment operator can also be used to add (concatenate) strings. If you add a number and a string, the result will be a string!</p>

<?php sc1(); ?>
<script>
x = 5 + 5;
y = "5" + 5;
z = "Hello" + 5;
document.write( x + "<br>" + y + "<br>" + z );
</script> 
<?php sc2(); ?>

<h2>Comparison Operators</h2>
<table class="ui blue striped compact collapsing table">
  <tbody>
    <tr>
      <td>==</td>
      <td>equal to</td>
    </tr>
    <tr>
      <td>===</td>
      <td>equal value and equal type</td>
    </tr>
    <tr>
      <td>!=</td>
      <td>not equal</td>
    </tr>
    <tr>
      <td>!==</td>
      <td>not equal value or not equal type</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td>greater than</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td>less than</td>
    </tr>
    <tr>
      <td>&gt;=</td>
      <td>greater than or equal to</td>
    </tr>
    <tr>
      <td>&lt;=</td>
      <td>less than or equal to</td>
    </tr>
    <tr>
      <td>?:</td>
      <td>ternary operator z = (x&gt;y)? 6 : 9;</td>
    </tr>
  </tbody>
</table>

<h1>Tasks</h1>
<p>Write a program to add two numbers</p>

<?php sc1(); ?>
<script type="text/javascript">
  x = 5; 
  y = 6;
  window.alert(x + y);
</script>
<?php sc2(); ?>
<p>Write a program to compare two value</p>
<?php sc1(); ?>
<script type="text/javascript">
  a = 10;
  b = 5;
  alert(a > b);
</script>
<?php sc2(); ?>