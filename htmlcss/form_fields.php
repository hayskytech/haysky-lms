<h2>Form</h2>
Form is used to collect user input. Text Input:
<?php sc1(); ?>
<b><input type="text"></b> defines a one-line input field for text input.
<?php sc2(); ?>

<?php sc1(); ?>
<form>
First name:<br>
<input type="text" name="firstname"><br>
Last name:<br>
<input type="text" name="lastname"><br>
<input type="submit" value="Submit">
</form>
<?php sc2(); ?>

<b>The Submit Button</b>: It defines a button for submitting the form data to a form-handler.
<h2>Form in Table</h2>

<?php sc1(); ?>
<form>
	<table>
		<tr>
			<td>First name:</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>Last name:</td>
			<td><input type="text" name="lname"></td>
		</tr>	
		<tr>
			<td></td>
			<td><input type="submit"></td>
		</tr>
	</table>
</form>
<?php sc2(); ?>

<h2><b>Form Elements</b></h2>

<?php sc1(); ?>
<b>The &lt;input> Element</b>: This is the most important form element. The &lt;input> element can be displayed in several ways, depending on the type attribute.
<?php sc2(); ?>

<?php sc1(); ?>
<input type="text" name="firstname">
<?php sc2(); ?>

<b>The select element defines a drop-down list:</b>

<?php sc1(); ?>
<select name="cars" size="3" multiple="">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
</select>
<?php sc2(); ?>

To define a pre-selected option, add the selected attribute to the option: &lt;option value="fiat" selected>Fiat&lt;/option>

<b>Visible Values:</b> Use the size attribute to specify the number of visible values. Use the multiple attribute to allow the user to select more than one value.

<b>The &lt;textarea> element</b> defines a multi-line input field (a text area).

<?php sc1(); ?>
<textarea name="message" rows="10" cols="30"></textarea>
<?php sc2(); ?>

<b>The &lt;button> Element</b>. If the type button is given it will not submit the form. Without the type attribute, clicking on the button element will submit the form.

<?php sc1(); ?>
<button type="button">Click Me!</button>
<button>Click Me!</button>
<?php sc2(); ?>

<b>Radio Button Input:</b> Radio buttons let users select ONE of a limited number of choices.

<?php sc1(); ?>
<input type="radio" name="gender" value="male" checked> Male<br> 
<input type="radio" name="gender" value="female"> Female<br> 
<input type="radio" name="gender" value="other"> Other
<?php sc2(); ?>

<h2>Input Types</h2>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/table.min.css">
<table class="ui blue striped compact collapsing table">
<tbody>
<tr>
<td>&lt;input type="button"><br>
&lt;input type="checkbox"><br>
&lt;input type="color"><br>
<b>&lt;input type="date"></b><br>
&lt;input type="datetime-local"><br>
<b>&lt;input type="email"></b><br>
&lt;input type="week"></td>
<td>&lt;input type="file"><br>
<b>&lt;input type="hidden"></b><br>
&lt;input type="month"><br>
&lt;input type="number"><br>
<b>&lt;input type="password"></b><br>
&lt;input type="radio"><br>
&lt;input type="range"></td>
<td>&lt;input type="reset"><br>
&lt;input type="search"><br>
<b>&lt;input type="submit"></b><br>
&lt;input type="tel"><br>
<b>&lt;input type="text"></b><br>
&lt;input type="time"><br>
&lt;input type="url"></td>
</tr>
</tbody>
</table>
<h2>Login Form</h2>

<?php sc1(); ?>
<h3>Login Form</h3>
<form method="post">
<fieldset>
<legend>Enter the details and Login</legend>
<table>
<tr>
  <td>Email</td>
  <td><input type="email" name="email" placeholder="your email"></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="password" name="password"></td>
</tr>
<tr>
  <td colspan="2">
  <input type="checkbox" name="tnc"> I accept all T&amp;C
  </td>
</tr>
<tr>
<td></td>
  <td>
  <input type="submit" name="submit" value="Login">
  </td>
</tr>
</table>
</fieldset>
</form>
<?php sc2(); ?>
