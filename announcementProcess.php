<?php
include ('dbConn.php');
include('session.php');

$subject=$_POST['subject'];
$details=$_POST['details'];

$mysql= "INSERT INTO announcements
(email, subject, details)
VALUES ('$email', '$subject', '$details')";

if (mysqli_query($conn, $mysql)){

	echo '<script>
		 alert("Successfully submitted!")
		 window.location.href="mainpageUser.php";</script>';
}

else{
	echo "Error;" . mysqli_error($conn);
}

mysqli_close($conn);
?>