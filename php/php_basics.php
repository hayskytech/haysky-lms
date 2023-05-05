<h1>PHP</h1>
PHP is a programming language. It is executed on the server side and output is given in HTML format. PHP 8 is the latest stable release. PHP's full form is Hypertext Preprocessor. It was previously called the Personal Home Page. PHP files can contain text, HTML, CSS, JavaScript and PHP code. The file extension is ".php". PHP can generate dynamic page content, file handling, collect form data and modify cookies and databases. PHP is a Loosely Typed Language. Extra white spaces and empty new lines are ignored. Case sensitive: In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are case-sensitive. However all variable names are case-sensitive!
<br>

<p>Installation: Download and install xampp software. Go to the xampp folder and open the htdocs folder. Remove all files in the htdocs folder. Create a new file index.php and write PHP code in it. Go to any browser and open localhost/index.php</p>

<h2>PHP Syntax:</h2>
<pre>
&lt;?php
echo "hello world!";
?&gt;
</pre>

<h2>Comments in PHP</h2>
<pre>
// This is a single-line comment
# This is also a single-line comment
/* This is 
multi line comment
*/
</pre>

<h2>PHP Variables</h2>

A variable starts with the $ sign, followed by the name of the variable and must start with a letter or the underscore. A variable name cannot start with a number. It can have alpha-numeric characters and underscore ( _ ). Variable names are case-sensitive ($age and $AGE are two different variables).

<pre>
$x = 5;
$y = 1.2;
$txt = 'Hello world';
</pre>

<h2>Echo and Print statements</h2>
The echo and print statements are used to output the data. The difference is echo has no return value and print has a return value of 1.
<pre>
$txt = "W3Schools.com";
echo "I love $txt!";
print "I love $txt!";
</pre>

<h2>Include / Require</h2>
<pre>
require 'menu'.php;
include 'sidebar.php';
</pre>

<h1>PHP Data Types</h1>

Variables can store data of different types.

<ol>
<li>String – (text, alphabet, numbers and all special characters).</li>
<li>Integer – (Numbers like 0,1,2,3 and -1,-2,-3 etc).</li>
<li>Float – (Numbers with decimal point 0.1, 12.5, -3.9 etc).</li>
<li>Boolean – (TRUE or FALSE).</li>
<li>Array – (Set of values stored in one variable).</li>
<li>Object – (Object oriented form of data).</li>
<li>NULL – (Only one value NULL means nothing, not even zero).</li>
</ol>
