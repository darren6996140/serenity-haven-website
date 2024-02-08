<!DOCTYPE html>
<html lang="en" class="theme">
<head>
	
	<title>The Cake Whisperer</title>
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

		.header
		{
			display: flex;
			font-family: andale mono, monospace;
			font-size: 170%;
			background: var(--background);
			text-align: center;
			transition: 0.5s;
			border-radius: 8px;
		}

		.header .left
		{
			flex: 90%;
			color: var(--text);
			border-radius: 8px;
		}

		.header .left a
		{
			color: var(--text);
			text-decoration: none;
		}

		.header .right
		{
			flex: 10%;
			font-size: 130%;
	  		cursor: pointer;
  			color: var(--text);
			padding: 30px 25px 30px 15px;
			border-radius: 8px;
		}

		.header .right a
		{
			color: red;
		}

		@media screen and (max-width: 850px) {
			.header {font-size: 130%;}
		}

		.left a:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

	</style>

</head>

<body>

<div class="header">

    <div class="left">
		<h1><a href="mainpageUser.php">Serenity Haven</a></h1>
  	</div>

	<div class="right">
		<a href="logout.php">Log Out</a>
	</div>

</div>

</body>
</html>