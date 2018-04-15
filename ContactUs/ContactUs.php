<?php
require_once("../Template/Template.php");

$page = new Template("ContactUs");
$page->setHeadSection("<link rel='stylesheet' href='../CSS/style.css'>");
$page->setHeadSection("<script src='../JavaScript/script1.js'></script>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
Print "<header class='nav'>";
print "<div class='location'>";
print "<div class='l3'>";
Print "<a href='../LogOn/LogOn.php' title='Log On'>Log On</a>";
Print "<a href='../HomePage/HomePage.php' title='Log Off'>Log Off</a>";
print "</div>";
print "</div>";
Print "<h1>Contact Us</h1>";
Print "<ul>";
Print "<li><a href='../HomePage/HomePage.php' title='Home Page'>Home Page</a></li>";
Print "<li><a href='../AboutUs/AboutUs.php' title='About Us'>About US</a></li>";
print "<li><a href='../BookSearch/Books.php' title='Book Search'>Book Search</a></li>";
if(isset($_SESSION['usrname']) && isset($_SESSION['role'])){
	print "<li><a href='../ContactData/ContactDataPage.php' title='Contact Data'>User Data</a></li>";
}
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
Print "<form method='post' action='ContactUsResults.php'>";
Print "<fieldset>";
Print "<p><label class='b'> TO: <input type = 'text' value='email@email.com///'></label></P>";
Print "<p><label class='b'> Email Address: <input type = 'text' id = 'myText' name = 'name'></label></P>";
Print "<p><label class='b'> Phone Number: <input type = 'text' name = 'Phone'></label></p>";
Print "<fieldset class='fieldset1'>";
Print "<legend> Additional Comments:</legend>";
Print "<label><textarea rows='10' cols='120' id='myText2' name = 'Comment'></textarea></label>";
Print "</fieldset>";
Print "<input type = 'submit' onclick='myFunction()'>";
Print "</fieldset>";
Print "</form>";
Print "<footer>";
Print "<p>Contact Us</p>";
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
