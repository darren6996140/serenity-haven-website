<?php
include ('dbConn.php');
include('session.php');

$selection=$_POST['selection'];
$floor=$_POST['floor'];
$unit=$_POST['unit'];

$noUnit  = $selection . "-" . $floor . "-" . $unit;

$check = "SELECT noUnit FROM unit WHERE noUnit = '$noUnit'";
$result = mysqli_query($conn, $check) or die(mysqli_error());

if (mysqli_num_rows($result)> 0)
{
	echo '<script>
		alert("This date is already reserved for this facility, please try again.");
		window.location.href="mainpageUser.php";</script>';
}

else{

	$mysql= "INSERT INTO unit
	(noUnit, noFloor, email)
	VALUES ('$noUnit', '$floor', '$email')";

	if (mysqli_query($conn, $mysql)){

		echo '<script>
			alert("Registration successful!")
			window.location.href="mainpageUser.php";</script>';

		}
		
	else{
		echo "Error;" . mysqli_error($conn);
		}
}

mysqli_close($conn);
?>