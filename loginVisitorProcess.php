<?php
session_start();

include('dbConn.php');

$email=$_POST['email'];
$name=$_POST['name'];
$noUnit=$_POST['noUnit'];
$noPhone=$_POST['noPhone'];
$carPlate=$_POST['carPlate'];

$check = "SELECT noUnit FROM user WHERE noUnit = '$noUnit'";
$result = mysqli_query($conn, $check) or die(mysqli_error());

if (mysqli_num_rows($result)> 0)
{
	echo '<script>
		alert("This unit does not exist, please try again.");
		window.location.href="userForm.php";</script>';
}

else{
	$mysql= "INSERT INTO user
	(email, password, name, noPhone, status)
	VALUES ('$email', '$name', '$noUnit' , '$noPhone' , '$carPlate')";

	if (mysqli_query($conn, $mysql)){

		echo '<script>
			alert("Visitor registration successful!")
			window.location.href="loginForm.php";</script>';
		}

	else{
		echo "Error;" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>