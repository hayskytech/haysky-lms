<h2><b>Input Attributes</b></h2>
The <b>required</b> attribute specifies the initial value for an input field:<br>
&lt;input type="text" name="firstname" required=""><br>
<br>
The <b>value</b> attribute specifies the initial value for an input field:<br>
&lt;input type="text" name="firstname" value="John"><br>
<br>
The <b>placeholder</b> attribute specifies instructions for an input field:<br>
&lt;input type="text" name="firstname" placeholder="John"><br>
<br>
The <b>readonly</b> attribute specifies that the input field is read only (submitted &amp; can't be changed):<br>
&lt;input type="text" name="firstname" value="John" readonly><br>
<br>
The <b>disabled</b> attribute specifies that the input field is disabled (not submitted in form).<br>
&lt;input type="text" name="firstname" value="John" disabled><br>
<br>
The <b>size</b> attribute specifies the size (<b>width</b>) for the input field.<br>
&lt;input type="text" name="firstname" value="John" size="40"><br>
<br>
The <b>maxlength</b> <b>minlength</b> attribute specifies the allowed <b>number of characters</b> for the input field.<br>
<br>
&lt;input type="text" name="phone" maxlength="10" minlength="5"><br>
<br>
The <b>autocomplete</b> attribute can disabled autofill suggestions.<br>
<br>
&lt;input type="text" name="phone" autocomplete="off"><br>
<br>
The <b>autofocus</b> attribute specifies that the input field should automatically get focus when the page loads.<br>
&lt;input type="text" name="phone" autofocus=""><br>

<h2>The <i>form</i> attribute</h2>
The <b>form</b> Attribute: specifies the form the &lt;input> element belongs to. The value of this attribute must be equal to the id attribute of the &lt;form> element it belongs to. An input field located outside of the HTML form (but still a part of the form):
<pre>&lt;form action="/action_page.php" <b>id="apple"</b>>
&lt;input type="text" name="fname">
&lt;input type="submit" value="Submit">
&lt;/form>
&lt;input type="text" name="lname" <b>form="apple"</b>></pre>
<h2><b>Form Attributes</b></h2>
<b>The Action Attribute</b>: Defines the action to be performed when the form is submitted. If the action attribute is omitted, the action is set to the current page.
&lt;form action="/action_page.php">

<b>The Target Attribute</b>: specifies if the submitted result will open in a new browser tab, a frame, or in the current tab.
&lt;form action="/action_page.php" target="_blank">

<b>The novalidate</b> specifies that the form data should not be validated when submitted.
&lt;form novalidate="">

<b>The Method Attribute:</b> The method attribute specifies the HTTP method (GET or POST) to be used when submitting the form data. GET is the default method. When GET is used, the submitted form data will be visible in the page address field. Always use POST if the form data contains sensitive or personal information. The POST method does not display the submitted form data in the page address field.

&lt;form action="/action_page.php" method="get"> 	 --- or ----
&lt;form action="/action_page.php" method="post">

<b>enctype="multipart/form-data" is used for file uploading</b>

<b>Grouping Form Data with &lt;fieldset>.</b> It is used to group related data in a form. The &lt;legend> element defines a caption for the &lt;fieldset> element.
<pre>&lt;form action="/action_page.php">
 	&lt;fieldset>
 			&lt;legend>Personal information:&lt;/legend>
 					First name: &lt;input type="text" name="firstname" value="Mickey">&lt;br>
 					Last name: &lt;input type="text" name="lastname" value="Mouse">&lt;br>&lt;br>
 			&lt;input type="submit" value="Submit">
 	&lt;/fieldset>
&lt;/form></pre>
<b>All the attributes below, only work with input types: submit and image.</b>
The <b>formaction</b> Attribute: specifies the URL of the file that will process the input when the form is submitted. This attribute overrides the action attribute of the &lt;form> element.

<?php sc1(); ?>
&lt;form action="action_page.php">
&lt;label for="fname">First name:&lt;/label>
&lt;input type="text" id="fname" name="fname">&lt;br>&lt;br>
&lt;input type="submit" value="Submit">
&lt;input type="submit" formaction="/page2.php" value="Submit as Admin">
&lt;/form>
<?php sc2(); ?>

Others
<pre>&lt;input type="submit" formenctype="multipart/form-data" value="Multipart/form data">
&lt;input type="submit" formmethod="post" value="Submit using POST">
&lt;input type="submit" formtarget="_blank" value="Submit to a new tab">
&lt;input type="submit" formnovalidate="formnovalidate" value="without validation"></pre>
<h2>Registration Form</h2>

<?php sc1(); ?>
<h3>Registration Form</h3>
<form method="post">
<table>
 <tr>
   <td>First Name</td>
    <td><input type="text" name="fname" autofocus=""></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lname"></td>
  </tr>
 <tr>
    <td>Date of Birth</td>
    <td><input type="date" name="dob"></td>
  </tr>
  <tr>
   <td>Gender</td>
    <td>
      <select name="gender">
        <option>MALE</option>
        <option>FEMALE</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <textarea name="address"></textarea>
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
  </tr>
  <tr>
    <td></td>
    <td>
       <input type="submit" value="Register">
       <input type="reset">
   </td>
  </tr>
</table>
</form>
<?php sc2(); ?>