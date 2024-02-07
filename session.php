<?php
session_start ();

include ('dbConn.php');

$email = $_SESSION['email'];

$mysql = mysqli_query($conn, "SELECT * FROM user WHERE email= '$email'");
$row = mysqli_fetch_array($mysql);

$name = $row['name'];
$status = $row['status'];

if(!isset($email))
{
	header("Location: index.php");
}

?>