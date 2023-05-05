<h2>Unordered List</h2>
An unordered list starts with the &lt;ul> tag. Each list item starts with the &lt;li> tag.

<?php sc1(); ?>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Juice</li>
  <li>Water</li>
</ul>
<?php sc2(); ?>
<h2>Ordered List</h2>
An ordered list starts with the &lt;ol> tag. Each list item starts with the &lt;li> tag. The list items will be marked with numbers:
<?php sc1(); ?>
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Juice</li>
  <li>Milk</li>
</ol>
<?php sc2(); ?>
Change type attribute: &lt;ol type="a"> A i I 1
<?php sc1(); ?>
<ol type="A">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Juice</li>
  <li>Milk</li>
</ol>
<?php sc2(); ?>
<h2>Nested HTML Lists</h2>
List can be nested (lists inside lists):
<?php sc1(); ?>
<ul>
  <li>Coffee</li>
  <li>Tea
     <ul>
        <li>Black tea</li>
        <li>Green tea</li>
     </ul>
  </li>
  <li>Milk</li>
</ul>
<?php sc2(); ?>
<strong>Control List starting number using start attribute:</strong>
<?php sc1(); ?>
<ol start="20">
  <li>Apple</li>
  <li>Bat</li>
</ol>
<?php sc2(); ?>
<strong>Example:</strong>
<?php sc1(); ?>
<!DOCTYPE html>
<html>
<body>
<ul>
  <li>APPLE 
     <ul>
        <li>MANGO</li>
        <li>ORANGE  
           <ul>
              <li>BANANA</li>
              <li>PINEAPPLE</li>
           </ul>
        </li>
        <li>GUAVA</li>
        <li>LEMON</li>
     </ul>
  </li>
  <li>POMEGRANITE</li>
  <li>BAT</li>
  <li>CAT</li>
  <li>DOG</li>
  <li>BUFFALO 
     <ul>
        <li>COW</li>
     </ul>
  </li>
</ul>
<hr>
<ol>
  <li>APPLE 
     <ol type="a">
        <li>MANGO</li>
        <li>ORANGE  
           <ol type="i">
              <li>BANANA</li>
              <li>PINEAPPLE</li>
           </ol>
        </li>
        <li>GUAVA</li>
        <li>LEMON</li>
     </ol>
  </li>
  <li>SAPOTA</li>
  <li>NERUDU</li>
  <li>POMEGRANITE 
     <ol type="a">
        <li>DRAKSHA</li>
     </ol>
  </li>
</ol>
</body>
</html>
<?php sc2(); ?>
<h2>Example:</h2>
<?php sc1(); ?>
<table border="1">
<tbody>
<tr>
  <td colspan="3">
    <center>HOTEL NAME<br>ADDRESS<br>CELL NO:9999999999</center>
  </td>
</tr>
<tr>
 <td>1</td>
  <td>DOSA</td>
  <td>30</td>
</tr>
<tr>
  <td>2</td>
  <td>POORI</td>
  <td>30</td>
</tr>
<tr>
  <td>3</td>
  <td>IDLI</td>
  <td>60</td>
</tr>
<tr>
  <td>4</td>
  <td>PANI</td>
  <td>50</td>
</tr>
<tr>
  <td></td>
  <td><b>TOTAL</b></td>
  <td><b>343</b></td>
</tr>
</tbody>
</table>
<?php sc2(); ?>