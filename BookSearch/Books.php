<?php
require_once("../Template/Template.php");

$page = new Template("Book Search");
$page->setHeadSection("<link rel='stylesheet' href='../CSS/style.css'>");
$page->setHeadSection("<script src='../JavaScript/script1.js'></script>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
Print "<header class='nav'>";
print "<div class='location'>";
print "<div class='l3'><form id='frmSearch' class='search2' method='get' action='default.html'>";
print "<input id='txtSearch' type='text' name='serach_bar' size='31' maxlength='255' value='Search' style='width: 225px; height: 10px;'/>";
print "<input type='hidden' name='sitesearch' value='gymHomePage.html'/></form>";
print "</div>";
print "</div>";
Print "<h1>Book Search</h1>";
Print "<ul>";
Print "<li><a href='../HomePage/HomePage.php' title='Home Page'>Home Page</a></li>";
print "<li><a href='../ContactUs/ContactUs.php' title='Contact Us'>Contact Us</a></li>";
Print "<li><a href='../AboutUs/AboutUs.php' title='About Us'>About US</a></li>";
Print "</ul>";
Print "</header>";
Print "<p class='f'>Thank you for your buissness. All email request will be handled as soon as possible. Expect a reply within 48 to 72 hours normal buissness hours monday through friday.</p>";
Print "<p class='e'>GET IN TOUCH</p>";
Print "<p class='i'>Location:</p>";
Print "<p class='h'>1234 Gym Park Way Ave, Plover, WI 54467</p>";
Print "<p class='g'>Phone Number:</p>";
Print "<p class='h'>111-222-3333</p>";
Print "<p class='j'>Email:</p>";
Print "<p class='h'>email@email.com///</p>";
Print "<form method='post' action='BookResults.php'>";
Print "<fieldset>";
Print "<p><label class='b'> Book Title: <input type = 'text' id = 'myText' name = 'name'></label></P>";
Print "<p><label class='b'> Book ISBN: <input type = 'text'></label></p>";
Print "<p><label class='b'> Book Author:<input type = 'text'></label></p>";
Print "<fieldset class='fieldset1'>";
Print "<legend> Additional Comments:</legend>";
Print "<label><textarea rows='10' cols='120' id='myText2'></textarea></label>";
Print "</fieldset>";
Print "<input type = 'submit' onclick='myFunction()'>";
Print "</fieldset>";
Print "</form>";
Print "<footer>";
Print "<p>Home Page</p>";
Print "<p> | </p>";
Print "<p> Privacy Policy </p>";
Print "<p> | </p>";
Print "<p> Terms of Service </p>";
print "<a href = 'https://www.facebook.com/'>";
print "<img src = '../Pictures/facebook.png' alt='facebook'>";
print "</a>";
print "<a href = 'https://twitter.com/?lang=en'>";
print "<img src = '../Pictures/twitter.png' alt='twitter'>";
print "</a>";
print "<a href = 'https://www.instagram.com/?hl=en'>";
print "<img src = '../Pictures/instagram.png' alt='instagram'>";
print "</a>";
Print "</footer>";
print $page->getBottomSection();
?>