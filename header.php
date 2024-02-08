<!DOCTYPE html>
<html lang="en" class="theme">
<head>
	
	<title>Serenity Haven</title>
	<!--title logo-->
	<link rel = "icon" href = "https://cdn.onlinewebfonts.com/svg/img_425531.png" type = "image/x-icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		.theme {  
			--text: black;
			--background: rgba(235, 235, 235, 0.5);
			--sidebarBackground: rgba(235, 235, 235, 0.95);
			--overlay: rgba(255, 255, 255, 0.5);
			--arrowHover: rgba(0, 0, 0, 0.3);
			--table: rgba(235, 235, 235);
		}

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

		.header
		{
			display: flex;
			font-family: andale mono, monospace;
			background: rgba(235, 235, 235, 0.5);
			text-align: center;
			transition: 0.5s;
			border-radius: 8px;
		}

		.header .left
		{
			flex: 90%;
			color: black;
			border-radius: 8px;
		}

		.header .left a
		{
			color: black;
			text-decoration: none;
			font-size: 180%;
		}

		.header .right
		{
			flex: 10%;
			font-size: 150%;
	  		cursor: pointer;
  			color: black;
			padding: 30px 25px 30px 15px;
			border-radius: 8px;
		}

		.header .right a
		{
			color: black;
		}

		.header .login{
			text-decoration: underline;
		}

		@media screen and (max-width: 850px) {
			.header .left a {font-size: 80%;}
			.header .right {font-size: 60%;}
		}

		.left a:hover{
			color: rgba(0, 0, 0, 0.5);
			transition: 0.2s;
		}

		.right a:hover{
			color: rgba(0, 0, 0, 0.5);
			transition: 0.2s;
		}

	</style>

</head>

<body>

<div class="header">

    <div class="left">
		<h1><a href="index.php">Serenity Haven</a></h1>
	</div>

	<div class="right">
		<a href="loginForm.php" class="login">Login/Registration</a>  
  	</div>

</div>

</body>
</html>