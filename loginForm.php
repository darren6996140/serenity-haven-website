<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .formContainer{
            display: flex;
            margin-top: 2%;
        }

        .forms{
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 2%;
            border-radius: 5px;
            margin-left: 2%;
            margin-right: 2%;
        }

        .forms .title p {
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .forms table {
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

        .forms table, .forms td {
            text-align: right;
        }

        .forms .form {
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .forms .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.2s;
        }

        .forms .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .forms a {
            font-size: 120%;
            font-weight: bold;
            text-decoration: underline;
            color: rgb(26, 140, 255);
        }

        #registration{
            flex: 50%;
        }

        #login{
            flex: 50%;
        }

    </style>

</head>

<body>

    <?php
    include("header.php");
    ?>

    <div class="formContainer">
        
        <div class="forms" id="registration">
            <form action="loginVisitorProcess.php" method="POST">
                <div class="title">
                    <p>Visitor Registration</p>
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
                        <td>Email :</td>
                        <td><input type="email" name="email" placeholder="email@email.com" class="form" required></td>
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
                        <td>Unit Num. :</td>
                        <td><input type="text" name="noUnit" placeholder="[Block]-[Floor]-[Unit]" class="form" required></td>
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
                        <td>Car Plate :</td>
                        <td><input type="text" name="carPlate" placeholder="WYS6691" class="form" required></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="login" value="Register" class="button"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="index.php">Back To Main Menu</a></td>
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

        <div class="forms" id="login">

            <form action="loginProcess.php" method="POST">
                <div class="title">
                    <p>Log In</p>
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
                        <td>Email :</td>
                        <td><input type="text" name="email" class="form" required></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Password :</td>
                        <td><input type="password" name="password" class="form" required></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="login" value="Log In" class="button"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="userForm.php">Register As New User</a></td>
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

    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>