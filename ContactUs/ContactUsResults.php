<?php

require_once("../Template/Discover.php");
require_once("../DB/DB.class.php");

$db = new DB();
$page = new Template("My Page");
$page2 = new Discover("Contact Us Results");
$page->setHeadSection("<link rel='stylesheet' href='../CSS/style.css'>");
$page->setHeadSection("<script src='../JavaScript/script1.js'></script>");
$page->setTopSection();
$page->setBottomSection();
$page2->setNavSection();
$page2->setFootSection();

print $page->getTopSection();
print $page2->getNavSection();
#ENSURE FORM FIELDS ARE SET

if (
	!isset($_POST['name'])    ||
	!isset($_POST['Phone'])   ||
	!isset($_POST['Comment'])
) {

	print "\n<h1 class='f'>ERROR: Not all form fields are set server-side. Malformed HTTP request or other error.</h1>";

	goto print_footer;	// Don't have time to restructure someone elses code right now... TODO: make a function

}

#ENSURE NECESSARY FIELDS ARE NOT EMPTY

// TODO: find a less shitty name
$bad_empty = false;

if(empty($_POST['name'])) {

	$bad_empty = true;

	$empty_error_message += "\nEmail field cannot be empty.";
}

if($bad_empty) {

	print "\n<h1 class='f'>The following fields are required for submission. Please fill them in:</h1>" .

		// TODO: Figure out what class this should be so the CSS works...
		"\n<p>" . $empty_error_message  . "</p>";

}

#CHECKING DATABASE STATUS

if (!$db->getConnStatus()){

	print "\n<p class='f'>An error has occurred while trying connect to database!</p>";

	goto print_footer;
}

#INSERTTING DATA

$safe_email = $db->dbEsc($_POST['name']);

if (empty($_POST['Phone'])){

	$safe_phone = $db->dbEsc("null");

}else{

	$safe_phone = $db->dbEsc($_POST['Phone']);

}

$safe_comment = $db->dbEsc($_POST['Comment']);

$query_INSERT = "INSERT INTO contactdata VALUES (null, '{$safe_email}', '{$safe_phone}', '{$safe_comment}');";

$db->dbCall($query_INSERT); #insert satement

#FINAL RESULTS

print "\n<p class='f'>Thank you for contacting us, someone will get back to you soon</p>";

print_footer:	// Don't have time to restructure someone elses code right now... TODO: make a function

print $page2->getFootSection();
print $page->getBottomSection();
?>
