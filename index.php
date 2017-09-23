<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Sample Login and Sign up</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="site-content">
			<header class="hero" data-bg-image="images/banner.jpg">
				<div class="container">
					<a href="#" class="branding"><img src="images/10.png" alt="Start-up" style="height:120px;width:80px;"></a>
					<div class="hero-content">
						<h1><strong>Basic Login and Simple Sign Up</strong></h1>
					</div>
					<form method="post" action="login.php"> 
					<input type="text" name="txtuname" />
					<input type="password" name="txtpword">
					<input type="submit" name="login" value="Log In">
					</form>
					<hr> 
					<form method="post" action="login.php"> 
					<input type="text" name="txtuname" />
					<input type="password" name="txtpword">
					<input type="submit" name="signup" value="Signup">
					</form>

					<hr>

				
				</div>
			</header> <!-- hero -->

			<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
	</body>

</html>
