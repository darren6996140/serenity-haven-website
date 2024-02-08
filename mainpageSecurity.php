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

		.visitor{
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
			text-align: center;
			margin-top: 2%;
        }

		.visitor h1{
            font-size: 300%;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

		.visitor .order{
            font-size: 150%;
            border-radius: 5px;
            border: solid;
            border-width: 2px;
			margin-right: 1%;
			transition: 0.3s;
        }

		.visitor .order:hover{
			background-color: rgba(233, 233, 237,0.5);
        }

		.visitor .button{
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.2s;
        }

		.visitor .button:hover{
            background-color: rgba(255, 255, 255, 0.5);
        }

		.visitor .table{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: auto;
			border-radius: 5px;
        }

		.visitor .table td{ 
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
		}

		.visitor .table th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}

	</style>
	
</head>

<body>

	<div class="visitor">

		<h1>Visitor Database</h1>

		<?php
		
		$query = "SELECT * FROM visitor";
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
			echo "<th>Name</th>";
			echo "<th>Phone Number</th>";
			echo "<th>Car Plate</th>";
			echo "<th>Unit Number</th>";

			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['noPhone']."</td>";
				echo "<td>".$row['carPlate']."</td>";
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

</body>
<?php
include("footer.php");
?>
</html>