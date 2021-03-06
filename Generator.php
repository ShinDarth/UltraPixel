<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Nome del Tema: <input type="text" name="themename" value=""></p>
<p>Inserisci il primo colore:<input type="text" name="color1" value=""></p>
<p>Inserisci il secondo colore:<input type="text" name="color2" value=""></p>
<p><input type="submit" value="Crea Tema"></p>
</form>
<?php
$nomefile="style.css";
$file = fopen($nomefile, "w+");
$themename=$_POST['themename'];
$color1=$_POST['color1'];
$color2=$_POST['color2'];
$testo= "
/*

Theme Name: UltraPixel - $themename

Theme URL: http://ultrapixel.altervista.org

Description: Combinazione colori $color1,$color2,white, interfaccia elegante con sidebar destra pi� una comoda footbar modificabile.

Author: Helias's Generator

Version: 2.4.0

Tags: italian translations, $color1, white, $color2, two-columns, threaded-comments, fixed-width, theme-options, right-sidebar, footbar editable.

.

Rilasciato sotto licenza <a href=\"http://www.opensource.org/licenses/gpl-license.php\">GPL</a>.

.

*/

{

margin: 0;

padding: 0;

}



h1, h2, h3, h4, h5, h6, p {

margin: 0;

padding: 10px 0;

}



h1, h2, h3, h4, h5, h6 {

font-family: Verdana;

}



hr {

color: white;

border: 1px solid $color1;

}



pre {

height: auto;

overflow-x:scroll;

}



fieldset {

margin: 0;

padding: 0;

border: 0;

}



dd {

padding-left: 15px;

}





p {
font-size: 9pt;

}



a {
color: $color1;
text-decoration: none;

}



a:hover {
color: $color2;
text-decoration: underline;

}



a img {

border: none;

}



blockquote {

background: black;

border: 1px solid #060606;

padding: 5px 15px;

margin: 10px 10px 5px 15px;

font-style: bold;

color: $color1;

}



code {

color: $color1;

font-style: italic;

}



strong {

font-size: 110%;

}



body {

text-align: center;

margin: 0;

padding: 0 0 15px 0;

font-family: trebuchet ms, arial, helvetica, sans-serif;

background: black url(images/bgbody.jpg) top center no-repeat;

}





/* Header and wrapper */

#wrapper {

margin: 0 auto;

width: 960px;

text-align: left;

padding: 0;

}



#header {

padding: 0;

margin: 0;

height: 80px;

}



#header #topright {

text-align: right;

float: right;

width: 600px;

margin: 5px 0 0 0;

}

#header #topright ul {

list-style: none;

padding: 0;

margin: 0;

}

#header #topright li {

display: inline;

}

#header #topright li a {

color: white;

font-size: 9pt;

padding: 0 0 0 25px;

}

#header #topright li a:hover {

color: $color2;

text-decoration: none;

}



#header #logo {

float: left;

width: 350px;

margin: 25px 0 0 0;

padding: 0;

}

#header h1 {

padding: 0;

margin: 0;

}

#header h1 a {

color: $color1;

font-size: 17pt;

text-decoration: none;

}

#header h1 a:hover {

color: $color2;

text-decoration: none;

}

#header span {

padding: 0;

color: $color2;

font-size: 11pt;

}





/* Menu */



#catnav {

margin: 20px 0 0 0;

padding: 0;

clear: both;

height: 44px;

width: 960px;

}



#nav {

list-style: none;

margin: 0;

padding: 0;

}


#nav ul {

margin: 0;

padding: 0;

}



#nav li {

float: left;

margin: 0;

padding: 0;

}



#nav a {

display: block;

line-height: 44px;

margin: 0;

padding: 0 20px 0 15px;

font-size: 10pt;

color: $color2;

letter-spacing: -1px;

}



#nav li a:hover {

color: $color1;

text-decoration: none;

display: block;

}



#nav li ul {

list-style: none;

position: absolute;

width: 150px;

left: -999em;

}



#nav li:hover ul, #nav li.sfhover ul {

left: auto;

}


#nav li li {

float: left;

margin: 0;

padding: 0;

width: 150px;

}


#nav li li a {

width: 150px;

height: 24px;

line-height: 24px;

color: #hover;

border-top: 1px solid #131f27;

background: black;

margin: 0;

padding: 5px 20px 5px 15px;

}


#nav li li a:hover {

border-top: 1px solid #131f27;

background: black;

padding: 5px 20px 5px 15px;

}



#nav li:hover, #nav li.sfhover { /* prevents IE7 drop-down menu bug (focus on a page element prevents nested menus from disappearing) */

position: static;

}



#toprss {

float: right;

margin: 10px 15px 0 0;

display: inline;

width: 65px;

line-height: 41px;

}







/* Top Content */



#main {

margin: 5px 15px 0 15px;

clear: both;

width: 930px;

padding-bottom: 5px;

}

#contentwrapper {

float:left;

width: 560px;

margin: 0 0 15px 0;

padding: 0;

}

#contentwrapper2 {

float:left;

width: 900px; margin: 0 0 15px 0;

padding: 0;

}

#contentwrapper .pageTitle, #contentwrapper2 .pageTitle {

margin: 15px 0 10px 0;

font-size: 14pt;

letter-spacing: -1px;

color: $color1;

font-weight: normal;

background: url(images/bg-trans.png) repeat;

padding: 5px;

}

.topPost {

margin: 0;

padding: 0;

font-size: 9pt;

}

.topPost h2.topTitle a {

font-size: 15pt;

font-weight: normal;

color: white;

letter-spacing: -2px;

}

.topPost h2.topTitle a:hover {

text-decoration: none;

color: $color1;

}

.topPost p.topMeta {

padding: 0;

margin: -10px 0 0 0;

font-size: 9pt;

color: $color1;

}

.topPost p.topMeta a {

text-decoration: underline;

color: white;

}

.topPost p.topMeta a:hover {

color: $color2;

}

.topPost div.topContent {

font-size: 9pt;

color: $color2;

margin: 8px 0;

}

.topPost div.topContent a {

text-decoration: underline;

color: $color1;

}

.topPost div.topContent a:hover {

text-decoration: underline;

color: white;

}



.topPost div.topContent ul, .topPost div.topContent ol {

padding: 0 0 0 30px;

}

.topPost div.topContent ul li, .topPost div.topContent ol li {

color: $color2;

}

.topPost span.topComments, .topPost span.topMore, .topPost span.topTags {

font-size: 9pt;

font-style: italic;

background: url(images/bg-trans.png) repeat;

padding: 8px 10px;

margin-right: 5px;

line-height: 27pt;

color: $color1;

border: 1px solid #111;

}

.topPost span.linkpages {

font-size: 9pt;

font-style: italic;

color: $color1;

margin-bottom: 10px; display:block;

}

.topPost span.linkpages a:hover {

color: $color2;

}

.topPost span.topComments:hover, .topPost span.topMore:hover, .topPost span.topTags:hover {

background: black;

}

.topPost span.topComments a {

color: white;

background: url(images/comments.gif) left no-repeat;

padding-left: 20px;

line-height: 27pt;

vertical-align: middle;

}

.topPost span.topMore a {

color: white;

background: url(images/more.gif) left no-repeat;

padding-left: 20px;

line-height: 27pt;

vertical-align: middle;

}

.topPost span.topTags em {

background: url(images/tags.gif) left no-repeat;

padding-left: 20px;

line-height: 27pt;

vertical-align: middle;

color: $color1;

}

.topPost span.topTags a {

color: $color1;

line-height: 27pt;

vertical-align: middle;

}

.topPost span.topComments a:hover, .topPost span.topMore a:hover, .topPost span.topTags a:hover {

color: $color2;

text-decoration: underline;

}



#nextprevious {

margin: 10px 0 5px 0;

}

#nextprevious a {

color: $color1;

text-transform: lowercase;

text-decoration: underline;

}

#nextprevious a:hover {

color: $color2;

}





/* Comments */



#comments {

margin-bottom: 10px;

margin-top: 15px;

background: black;

width: 530px; /* fixes bug in IE7 where putting focus on the text makes it disappear behind the background. yeah, weird. they call it a dimensional bug. */

border: 1px solid black;

padding: 0px 15px 10px 15px;

color: $color1;

}

#comments h3 {

font-size: 10pt;

font-weight: normal;

color: white;

margin: 15px 0;

padding: 0;

}

#comments p a {

color: $color1;

}

#comments p a:hover {

color: white;

}

#comments p {

padding:0;

margin: 7px 0;

}

ul.commentlist, ul.trackback {

list-style-type: none;

margin: 10px 0;

font-size: 9pt;

}

.commentlist li, .trackback li {

margin: 10px 0 15px 0;

padding: 10px;

background: black;

border: 1px solid #040404;

list-style-type: none;

}

.commentlist li.alt {

background: black;

border: 1px solid #020202;

border: none;

margin-top:10px;

}

.commentlist li.cleared {

background: transparent;

border: none;

}

.commentlist a:hover {

color: $color2;

}

.commentlist a.gravatar {

float: left;

margin: 0 15px 10px 0;

width: 60px;

}

.commentlist .commentbody {

margin: 0;

padding: 0;

}

.commentlist .commentbody p a {

text-decoration: underline;

}

.commentlist cite {

font-size: 10pt;

font-style: normal;

color: $color1;

}

.commentlist small.commentmetadata a {

color: grey;

}

.commentlist p {

color: white;

}

#respond {

clear: both;

margin-top: 15px;

}

textarea#comment {

width: 450px;

background: #fff;

color: #111;

padding: 10px;

}

#comments #submit {

margin: 0;

}

#extrastuff a {color:$color2; font-size:0.8em;}

#extrastuff a:hover {color:$color1; text-decoration:none;}

#extrastuff #rssleft {float:left; width:250px;}

#extrastuff #trackright {float:right; width:180px; text-align:right;}




/* Welcome section */



#main #welcome {

margin: 0 0 20px 0;

padding: 0 0 5px 0;

background: url(images/bg-trans.png) repeat;

}

#main #welcome h2 {

font-size: 14pt;

font-weight: normal;

color: white;

letter-spacing: -2px;

margin: 0 10px;

padding: 10px 0 3px 0;

}

#main #welcome p {

font-size: 9pt;

color: $color1;

margin: 0 10px;

padding: 6px 0;

}

#main #welcome a {

text-decoration: underline;

color: $color2;

}

#main #welcome a:hover {

color: white;

}

#main #welcome form {

margin: -5px 0 0 0;

background: transparent; /* required for IE */

}

#main #welcome #feedbox {

border: 1px solid #ccc;

padding: 2px 1px;

width: 180px;

}

.submitbutton {

margin: -5px 0 0 5px;

background: black;

color: $color1;

font-size: 8pt;

padding: 3px 6px;

vertical-align: middle;

border: 1px solid #111;

}

.submitbutton:hover {

cursor: pointer;

background: #050505;

}




/* Sidebars */

#sidebars {

margin: 15px 0 0 0;

float: right;

width: 340px;

color: white;

}

#sidebars .sidebarbox {

background: url(images/bg-trans.png) repeat;

padding: 8px 15px;

}



#sidebar_full {

padding: 0;

margin: 0;

}



#sidebar_left {

float: left;

width: 160px;

}



#sidebar_right {

float: right;

width: 160px;

}



#sidebars h2 {

margin: 0;

padding: 0 0 8px 0;

font-weight: normal;

font-size: 11pt;

color: white;

letter-spacing: -1px;

}



#sidebars table {

width: 130px;

}



#sidebars ul {

margin: 0;

padding: 0 0 5px 0;

}



#sidebars li {

margin-bottom: 20px;

list-style: none;

font-size: 9pt;

}



#sidebars li ul {

padding: 0;

}



#sidebars ul ul li {

margin: 0;

padding: 2px 2px 2px 16px;

color: white;

background: url(images/bullet.gif) left 8px no-repeat;

line-height: 17px; /* Required for cross-browser consistency; cross-browser defaults vary. */

}



#sidebars a {

display: inline;

color: $color1;

}

#sidebars a:hover {

color: $color2;

text-decoration: underline;

}



#sidebars p {

padding: 2px 0;

font-size: 9pt;

color: white;

}



#tag_cloud a {

display: inline;

}



#sidebars ul.children li {border-bottom:none;}

#sidebars ul.children {margin-bottom:0;}







/* Before footer */



#morefoot {

background: black url(images/bggrad.jpg) top left repeat-x;

border: 1px solid #070707;

padding: 15px;

color: white;

margin: 0 0 10px 0;

}

#morefoot p {

margin: 5px 0;

padding: 5px 0;

}

#morefoot ul {

list-style-type: none;

margin-top: 5px;

}

#morefoot ul li, #morefoot p {

font-size: 9pt;

}

#morefoot a {

text-decoration: underline;

color: white;

}

#morefoot a:hover {

text-decoration: underline;

color: $color2;

}

#morefoot h3 {

font-size: 12pt;

font-weight: normal;

color: white;

letter-spacing: -1px;

border-bottom: 1px dotted #444;

margin: 0;

padding: 0 0 2px 0;

}

#morefoot #searchbox {

padding: 1px;

width: 180px;

}

#morefoot .col1 {

float: left;

width: 340px;

}

#morefoot .col2 {

margin: 0 25px;

}

#morefoot .col2, #morefoot .col3 {

float: left;

width: 260px;

}

#morefoot li {

padding-left: 20px;

margin-bottom: 5px;

background: url(images/more.gif) left 2px no-repeat;

line-height: 17px; /* Required for cross-browser consistency; cross-browser defaults vary. */

}





/* footer*/

#footer {

clear: both;

background: black;

border: 1px solid #070707;

padding: 15px 15px 10px 15px;

}

#footer p {

font-size: 9pt;

color: white;

padding: 0;

}

#footer a {

color: white;

text-decoration: underline;

}

#footer a:hover {

color: $color2;

}

#footerleft {

float: left;

width: 500px;

}

#footerright {

float: right;

width: 300px;

text-align: right;

}







/* Misc */



.highlight {

color: $color1;

font-weight: bold;

}



.cleared {

margin: 0;

padding: 0;

clear: both;

}



.alignleft {

float: left;

margin: 5px 10px 5px 0;

}

.alignright {

float: right;

margin: 5px 0 5px 10px;

}

.aligncenter,

div.aligncenter {

margin: 10px auto;

text-align: center;

display: block;

}



img.alignleft {

float: left;

margin: 5px 10px 5px 0;

}

img.alignright {

float: right;

margin: 5px 0 5px 10px;

}

img.aligncenter {

margin: 10px auto;

text-align: center;

display: block;

}



.wp-caption {

border: 1px solid $color1;

text-align: center;

background-color: $color1;



padding-top: 4px;



/* optional rounded corners for browsers that support it */



-moz-border-radius: 3px;



-khtml-border-radius: 3px;



-webkit-border-radius: 3px;

border-radius: 3px;

}



.wp-caption img {

margin: 0;

padding: 0;

border: none;

}



.wp-caption p.wp-caption-text {

font-size: 11px;

line-height: 17px;

padding: 0 4px 5px;

margin: 0;

color: $color1;

}
";

fwrite($file, $testo);
fclose($file);
?>