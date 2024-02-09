<?php
include("session.php");

$id = $_GET["id"];

$mysql = "DELETE FROM announcements WHERE id = '$id'";

if (mysqli_query($conn, $mysql))
{
	echo '<script>alert("Successfully deleted!");
	window.location.href="mainpageAdmin.php";</script>';
}

else
{ 
	echo "Error ; " .mysqli_error($conn);
}
?>