<?php
include ('dbConn.php');
include('session.php');

$oldPassword = $_POST['password'];
$password = hash('sha256', $oldPassword);
$name=$_POST['name'];
$noPhone=$_POST['noPhone'];

$mysql= "UPDATE user
SET password = '$password', name = '$name', noPhone = '$noPhone'
WHERE email = '$email'";

if (mysqli_query($conn, $mysql)){

	echo '<script>
		 alert("Data update successful!")
		 window.location.href="mainpageUser.php";</script>';
}

else{
	echo "Error;" . mysqli_error($conn);
}

mysqli_close($conn);
?>