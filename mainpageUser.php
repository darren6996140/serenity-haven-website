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

        .info, .report, .facilities, .announcements{
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
            margin-top: 2%;
        }

        .info .title p, .report .title p, .facilities .title p, .announcements .title p{
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .info table, .report table, .facilities table, .announcements table{
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

        .info table, .info td, .report table, .report td, .facilities table, .facilities td, .announcements table, .announcements td{
            text-align: right;
        }

        .facilities .left {
            text-align: left;
        }

        .info .form, .report .form, .facilities .form, .announcements .form{
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .info .button, .report .button, .facilities .button, .announcements .button{
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        .info .button:hover, .report .button:hover, .facilities .button:hover, .announcements .button:hover{
            background-color: rgba(255, 255, 255, 0.5);
        }

        .report textarea, .announcements textarea{
            font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
            font-size: 120%;
        }

        .facilities .date{
            font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
            font-size: 120%;
        }

        .announcements .result{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: auto;
			border-radius: 5px;
        }

		.announcements .result td{
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
		}

		.announcements .result th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}

	</style>
	
</head>

<body>

    <div class="info">
        <form action="infoProcess.php" method="POST">
            <div class="title">
                <p>Update Personal Information</p>
            </div>
            
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
					<td>Name :</td>
					<td><input type="text" name="name" placeholder="Batman bin Suparman" class="form" required></td>
					<td></td>
				</tr>

                <tr>
                    <td></td>
                    <td>Password :</td>
                    <td><input type="password" name="password" placeholder="8+ characters" pattern=".{8,128}" class="form" required></td>
                    <td></td> 
                </tr>


                <tr>
                    <td></td>
                    <td>Phone Number :</td>
                    <td><input type="text" name="noPhone" placeholder="0121234567" class="form" required></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="register" value="Update" class="button"></td>
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

    </div>

    <div class="report">
        <form action="reportProcess.php" method="POST">
            <div class="title">
                <p>Incident Report</p>
            </div>
            
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
    </div>

    <div class="facilities">
        <form action="facilitiesProcess.php" method="POST">
            <div class="title">
                <p>Facilities Booking</p>
            </div>
            
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
                    <td>Date :</td>
                    <td><input class="date" type="date" name="date" class="form" required></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Selection: </td>
                    <td id="left">
                        <input type="radio" name="selection" value="gym" id="gym"><label for="gym">Gym</label>
                        <input type="radio" name="selection" value="pool" id="pool"><label for="pool">Pool</label>
                        <input type="radio" name="selection" value="badminton" id="badminton"><label for="badminton">Badminton Court</label>
                        <input type="radio" name="selection" value="basketball" id="basketball"><label for="basketball">Basketball Court</label>
                        <input type="radio" name="selection" value="tennis" id="tennis"><label for="tennis">Tennis Court</label>
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
    </div>

    <div class="announcements">
        <form action="announcementProcess.php" method="POST">
            <div class="title">
                <p>Announcements</p>
            </div>
            
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

        <div class="title">
            <p>All Announcements</p>
        </div>
        <?php

			$query = "SELECT * FROM announcements";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='result'>";
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
				echo"<div class='title' style='text-decoration: underline'><p>No Data</p></div>";
			}

		?>

        <div class="title">
            <p>Your Announcements</p>
        </div>
        <?php

			$query = "SELECT * FROM announcements WHERE email = '$email'";
			$result = mysqli_query($conn, $query) or die(mysql_error());

			if (mysqli_num_rows ($result) > 0)
			{
				echo "<table class='result'>";
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
				echo"<div class='title' style='text-decoration: underline'><p>No Data</p></div>";
			}

		?>
    </div>

</body>
<?php
include("footer.php");
?>
</html>