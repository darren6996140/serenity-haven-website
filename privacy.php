<!DOCTYPE html>
<html lang="en">
<head>

    <?php

    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $email = $_SESSION['email'];

    if ($email == true){
        include("headerUser.php");
    }

    else{
        include("header.php");
    }
    ?>

	<style>

        .privacy{
            padding: 2%;
            font-size: 250%;
            font-weight: bold;
            transition: 0.5s;
            background-color: var(--background);
            border-radius: 5px;
            color: var(--text);
        }

        @media screen and (max-width: 850px) {
			.privacy{
				font-size: 180%;
			}
		}

	</style>
	
</head>

<body>

    <div class="privacy">
        <p>
            The Cake Whisperer ("The Company") will absolutely collect and sell all your data for optimal monetary benefits. Thank you and have fun learning!
        </p>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>