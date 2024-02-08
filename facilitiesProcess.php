<?php
include ('dbConn.php');
include('session.php');

$selection=$_POST['selection'];
$date=$_POST['date'];

$check = "SELECT selection, date FROM facilities WHERE selection = '$selection' AND date = '$date'";
$result = mysqli_query($conn, $check) or die(mysqli_error());

if (mysqli_num_rows($result)> 0)
{
	echo '<script>
		alert("This date is already reserved for this facility, please try again.");
		window.location.href="mainpageUser.php";</script>';
}

else{

	$mysql= "INSERT INTO facilities
	(email, selection, date)
	VALUES ('$email', '$selection', '$date')";
	
	if (mysqli_query($conn, $mysql)){

		echo '<script>
			alert("Booking successful!")
			window.location.href="mainpageUser.php";</script>';
			
		}
		
	else{
		echo "Error;" . mysqli_error($conn);
		}
}


mysqli_close($conn);
?>