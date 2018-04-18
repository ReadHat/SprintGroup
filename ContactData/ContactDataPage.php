<?php
require_once("../Template/Discover.php");
require_once("../DB/DB.class.php");

$db = new DB();
$page = new Template("Sprint 2");
$page2 = new Discover("User Info");
$page->setHeadSection("<link rel='stylesheet' href='../CSS/style.css'>");
$page->setHeadSection("");
$page->setTopSection();
$page->setBottomSection();
$page2->setNavSection();
$page2->setFootSection();


print $page->getTopSection();
print $page2->getNavSection();

$query = "select username, userpass, email, creationdate, realname, userstatus, rolename
		from user, user2role, role
		where user.userid = user2role.userid
		and user2role.roleid = role.roleid";
$results = $db->dbCall($query);
	
if (!$db->getConnStatus()){
	print "<p class='f'>An error has occurred while trying connect to database!</p>\n";
	}

if(isset($_SESSION['usrname']) && in_array('admin', $_SESSION['role'], FALSE)){

?>

<div>
	<table>
	<tr>
		<th>ID</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Created On</th>
		<th>Real Name</th>
		<th>User Status</th>
		<th>User Role</th>
	</tr>
		
	 <?php

	 foreach($results as $row){
		 print "<tr>\n";
		 foreach ($row as $cell){
			 print "<td>";
			 print "$cell";
			 print  "</td>\n";
		 }
		 print "</tr>\n";
	 }
	 ?>
	 
	 </table>
</div>
<?php
	}else{
			print "Could Not Display Any Contact Information";
	}
print $page2->getFootSection();
print $page->getBottomSection();
?>