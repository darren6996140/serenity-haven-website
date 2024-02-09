<!DOCTYPE html>
<html lang="en">
<?php
include("session.php");
include("header2.php");
?>
<head>

	<style>
		body
		{
			padding: 10px;
			font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
			margin: 0;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}


		.user, .report, .facilities, .announcements{
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
			text-align: center;
			margin-top: 2%;
        }

		.user h1, .report h1, .facilities h1, .announcements h1{
            font-size: 300%;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

		.user .table, .report .table, .facilities .table, .announcements .table{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: auto;
			border-radius: 5px;
        }

		.user .table td, .report .table td, .facilities .table td, .announcements .table td{
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
		}

		.user .table th, .report .table th, .facilities .table th, .facilities .table th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}

	</style>
	
</head>

<body>

	<div class="user">

		<h1>User Database</h1>

		<?php

			$query = "SELECT * FROM user";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='table'>";
				echo "<col>";
				echo "<col>";
				echo "<col>";
				echo "<tr>";
				echo "<th>Email</th>";
				echo "<th>Name</th>";
				echo "<th>Phone Number</th>";
				echo "<th>Status</th>";
				echo "<th>Unit Number</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['noPhone']."</td>";
					echo "<td>".$row['status']."</td>";
					echo "<td>".$row['noUnit']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}

			else{
				echo"<h1><u>No data</u></h1>";
			}

		?>
	</div>

	<div class="report">

		<h1>Report Database</h1>

		<?php

			$query = "SELECT * FROM report";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='table'>";
				echo "<col>";
				echo "<col>";
				echo "<col>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Email</th>";
				echo "<th>Subject</th>";
				echo "<th>Details</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['subject']."</td>";
					echo "<td>".$row['details']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}

			else{
				echo"<h1><u>No data</u></h1>";
			}

		?>
	</div>

	<div class="facilities">

		<h1>Facility Booking</h1>

		<?php

			$query = "SELECT * FROM facilities";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='table'>";
				echo "<col>";
				echo "<col>";
				echo "<col>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Email</th>";
				echo "<th>Selection</th>";
				echo "<th>Date</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['selection']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}

			else{
				echo"<h1><u>No data</u></h1>";
			}

		?>
	</div>

	<div class="announcements">

		<h1>Announcements</h1>

		<?php

			$query = "SELECT * FROM announcements";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='table'>";
				echo "<col>";
				echo "<col>";
				echo "<col>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Email</th>";
				echo "<th>Subject</th>";
				echo "<th>Details</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['subject']."</td>";
					echo "<td>".$row['details']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}

			else{
				echo"<h1><u>No data</u></h1>";
			}

		?>
	</div>

</body>
<?php
include("footer.php");
?>
</html>