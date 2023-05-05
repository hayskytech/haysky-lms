<h1>Document Structure</h1>

An HTML document starts and ends with &lt;html> and &lt;/html> tags. These tags tell the browser that the entire document is composed in HTML. Inside these two tags, the document is split into two sections:
The &lt;head>...&lt;/head> element contains information about the document such as title of the document, author of the document, metadata etc.
The &lt;body>...&lt;/body> elements, which contain the real content of the document that you see on your screen.
Here is some example code of a HTML document.

<?php sc1(); ?>
<!DOCTYPE html>
<html>
<head>
<title>This is title</title>
</head>
<body>
<h1>This is heading</h1>
<p>This is paragraph</p>
</body>
</html>
<?php sc2(); ?>

<h2>Head</h2>
The &lt;head> element is a container for metadata (data about the HTML document). Metadata is not displayed in output. The following tags describe metadata: &lt;title>, &lt;style>, &lt;meta>, &lt;link>, &lt;script>, and &lt;base>.

The base element specifies the base URL and base target for all relative URLs in a page.
The script element is used to define client-side JavaScript.
The viewport is the user's visible area of a web page. It varies with the device, and will be smaller on a mobile phone than on a computer screen. Setting the viewport makes the web page mobile responsive.
The link element is used to link to external style sheets.
The style element is used to define internal style information for a single HTML page.
The title element defines a title in the browser tab, provides a title for the page when it is added to favorites and displays a title for the page in search engine results.

<?php sc1(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Hello World</title>
 <meta charset="UTF-8">
 <meta name="description" content="Free Web tutorials">
 <meta name="keywords" content="HTML, CSS, XML, JavaScript">
 <meta name="author" content="John Doe">
 <meta http-equiv="refresh" content="30">
 <style>
  p {color: blue;}
 </style>
 <link rel="stylesheet" href="mystyle.css">
 <script type="text/javascript">
  alert('hai!!!');
 </script>
 <base href="images/" target="_blank">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 <h1>Welcome</h1>
</body>
</html>
<?php sc2(); ?>

<h2>Body</h2>
Semantic HTML elements are those that clearly describe their meaning in a human- and machine-readable way.

header - Defines a header for a document or a section
nav - Defines a container for navigation links
section - Defines a section in a document
article - Defines an independent self-contained article
aside - Defines content aside from the content (like a sidebar)
footer - Defines a footer for a document or a section
details - Defines additional details
summary - Defines a heading for the details element
<h2>Tags and Elements</h2>
<p>HTML language is a markup language and we use many tags to markup text. Every tag has a tag name, sometimes followed by an optional list of attributes, all placed between opening and closing brackets (< and >). The simplest tag is nothing more than a name appropriately enclosed in brackets, such as head and i. More complicated tags contain one or more attributes, which specify or modify the behavior of the tag.</p>

<p>Browsers will not give any error if you have not put any HTML tag or attribute properly. They will just ignore that tag or attribute and will apply only correct tags and attributes before displaying the result.</p>

<p>HTML is not case sensitive. It means &lt;head> and &lt;HEAD> are the same. But mostly all developers use small letters for coding.</p>
<ul>
 	<li>html - The main container for HTML pages. HTML tag covers the entire document.</li>
 	<li>head - The container for page information.</li>
 	<li>title - The title of the page. Title tag will be inside head tag.</li>
 	<li>body - The main body of the page. Body tag starts after closing head tag.</li>
</ul>
HTML element usually consists of a start tag and an end tag, with the content inserted in between: &lt;tagname>Content goes here…&lt;/tagname>

HTML elements can be nested (elements can contain elements).

<?php sc1(); ?>
<p>Hello this is <b>paragraph</b> only</p>
<?php sc2(); ?>

Do Not Forget the End Tag: Some HTML elements will display correctly, even if you forget the end tag. Never rely on this. It might produce unexpected results or errors if you forget the end tag.
<h2>Empty Elements</h2>
HTML elements with no content are called empty elements. Stand alone tags.
Example:   &lt;br>  &lt;hr>
Empty elements can be "closed" in the opening tag like this: <br/>
<h2>Attributes</h2>
All HTML elements can have attributes.
Attributes provide additional information about an element.
Attributes are always specified in the start tag.
Attributes usually come in name/value pairs like: name="value"
<h2>Images</h2>

<?php sc1(); ?>
<img src="apple.jpg" alt="Apple photo">(alt text shown when there's no image)
<img src="html5.png" alt="HTML5 Icon" width="128" height="128">
<img src="globe/logo.png"> (Images in another folder)
<img src="../logo.png"> (Images in parent folder)
<img src="https://picsum.photos/300/200"> (Absolute URL)
<?php sc2(); ?>

<h2>id, class, style attributes</h2>
We can give a unique id for each element using the id attribute.

<?php sc1(); ?>
<h1 id="apple">Hello</h1>
<p id="bat">This is paragraph</p>
<?php sc2(); ?>

We can give one or more elements the same class name.

<?php sc1(); ?>
<h2 class="master cat">Heading</h2>
<p class="master">This is one paragraph.</p>
<p class="master">This is another paragraph.</p>

<?php sc2(); ?>

We can give text color, background color, size etc. in style attribute.

<?php sc1(); ?>
<h1 style="color: red; background-color: pink;">Hello World</h1>
<?php sc2(); ?>

<h2>Links / Hyperlinks</h2>
HTML links are hyperlinks. You can click on a link and jump to another document. When you move the mouse over a link, the mouse arrow will turn into a little hand. A link need not have to be text. It can be an image or any other HTML element.

<?php sc1(); ?>
<a href="url">link text</a>
<a href="https://www.haysky.com/">Visit my website</a>
<?php sc2(); ?>

The example above used an absolute URL (a full web address).

Local Link is (link to the same web site) is specified with a relative URL (without https://www....).

<?php sc1(); ?>
<a href="about.html">About</a>
<?php sc2(); ?>

The target Attribute specifies where to open the linked document. The target attribute can have one of the following values:
_blank - Opens the linked document in a new window or tab
_self - Opens the linked document in the same window/tab as it was clicked (this is default)
_parent - Opens the linked document in the parent frame
_top - Opens the linked document in the full body of the window
framename - Opens the linked document in a named frame
<h2>Create a Bookmark</h2>
HTML bookmarks are used to allow readers to jump to specific parts of a Web page. Bookmarks are practical if your website has long pages. To make a bookmark, you must first create the bookmark, and then add a link to it. When the link is clicked, the page will scroll to the location with the bookmark.

<?php sc1(); ?>
<a href="#c1">Chapter 1</a>
<a href="#c2">Chapter 2</a>
<a href="#c3">Chapter 3</a>
<a href="#c4">Chapter 4</a>
<a href="#c5">Chapter 5</a>

<h1 id="#c1">Chapter 1</h1>
<p>some dummy matter</p>
<h1 id="#c2">Chapter 2</h1>
<p>some dummy matter</p>
<h1 id="#c3">Chapter 3</h1>
<p>some dummy matter</p>
<h1 id="#c4">Chapter 4</h1>
<p>some dummy matter</p>
<h1 id="#c5">Chapter 5</h1>
<p>some dummy matter</p>
<?php sc2(); ?>
