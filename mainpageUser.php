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
			background-image: url('images/baking<?php echo(rand(0,4)); ?>.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

        .infoForm {
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
            margin-top: 2%;
        }

        .infoForm .title p{
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .infoForm table {
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

        .infoForm table, .infoForm td {
            text-align: right;
        }

        .infoForm #left {
            text-align: left;
        }

        .infoForm .form {
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .infoForm .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        .infoForm .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .infoForm a {
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
            color: rgb(26, 140, 255);
        }

	</style>
	
</head>

<body>

<div class="infoForm">
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

</body>
<?php
include("footer.php");
?>
</html>