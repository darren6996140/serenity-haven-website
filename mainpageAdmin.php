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


		.user, .report, .facilities, .announcements, .unit{
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
			text-align: center;
			margin-top: 2%;
        }

		.user h1, .report h1, .facilities h1, .announcements h1, .unit h1{
            font-size: 300%;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

		.user .table, .report .table, .facilities .table, .announcements .table ,.unit .table{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: auto;
			border-radius: 5px;
        }

		.user .table td, .report .table td, .facilities .table td, .announcements .table td, .unit .table td{
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
		}

		.user .table th, .report .table th, .facilities .table th, .announcements .table th, .unit .table th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}


        .announcements form table{
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

		.announcements form table, .announcements form td{
            text-align: right;
        }

		.announcements form .form{
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

    	.announcements form .button{
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        .announcements form .button:hover{
            background-color: rgba(255, 255, 255, 0.5);
        }

		.announcements textarea{
            font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
            font-size: 120%;
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

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['noPhone']."</td>";
					echo "<td>".$row['status']."</td>";
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

        <form action="announcementProcess.php" method="POST">
            
            <table cellpadding=5px>

                <tr>
                    <td style="width: 20px"></td>
                    <td></td>
                    <td></td>
                    <td style="width: 20px"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

				<tr>
					<td></td>
					<td>Subject :</td>
					<td><input type="text" name="subject" placeholder="Enter subject here" class="form" required></td>
					<td></td>
				</tr>

                <tr>
                    <td></td>
                    <td>Details :</td>
                    <td>
                        <textarea name="details" id="details" placeholder="Enter details here" cols="30" rows="5" required></textarea>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit" class="button"></td>
                    <td></td>
				</tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </form>

		<br><br>

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
				echo "<th>Email</th>";
				echo "<th>Subject</th>";
				echo "<th>Details</th>";
				echo "<th>Delete</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['subject']."</td>";
					echo "<td>".$row['details']."</td>";
					echo "<td><a href='deleteAnnouncement.php?id=".$row['id']."'> <img src='images/delete.png' width='50' height='50'> </a> </td>";
					echo "</tr>";
				}
				echo"</table>";
			}

			else{
				echo"<h1><u>No data</u></h1>";
			}

		?>
	</div>

	<div class="unit">

		<h1>Units Info</h1>

		<?php

			$query = "SELECT * FROM unit";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='table'>";
				echo "<col>";
				echo "<col>";
				echo "<col>";
				echo "<tr>";
				echo "<th>Unit Number</th>";
				echo "<th>Floor Number</th>";
				echo "<th>Email</th>";

				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$row['noUnit']."</td>";
					echo "<td>".$row['noFloor']."</td>";
					echo "<td>".$row['email']."</td>";
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