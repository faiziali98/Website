<?php

	$error = "";
	$success = "";

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$error = "";

		if(!$name)
			$error = "Please enter your name.<br>";

		if(!$email)
			if(strlen($error)==0)
				$error = "Please enter your email.<br>";
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			if(strlen($error)==0)
				$error = "Please enter a valid email address.<br>";

		if(!$password)
			if(strlen($error)==0)
				$error = "Please enter a password.<br>";
		if(strlen($password) < 6)
			if(strlen($error)==0)
				$error = "Your password must be at least 6 characters long.";
		if(!preg_match("'[A-Z]'", $password))
			if(strlen($error)==0)
				$error = "Your password must contain an uppercase letter.";
		if(!preg_match("'[0-9]'", $password))
			if(strlen($error)==0)
				$error = "Your password must contain atleast one digit.";


		if(strlen($error)==0){

				$link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
		  		$query = "SELECT * FROM authorized_users WHERE email = '$email' ";

				$result = $link->query($query);
				if($result->num_rows > 0){
					if(strlen($error)==0)
						$error = "This email already exists in our database.";
				}else{
					$success = "Success! Your account is created.";
					$query = "INSERT INTO authorized_users (name, email, password, dp,about) VALUES ('$name','$email','$password','images/anony.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo nisl, ullamcorper ut dictum sit amet, fermentum accumsan justo. Vestibulum vestibulum consectetur purus vel ultricies. Phasellus finibus porta felis eget auctor. Proin laoreet nibh risus. Donec in erat eget orci tempor convallis. Etiam quis dolor odio. Fusce quam ligula, feugiat eget lorem eu, pharetra rhoncus felis. Suspendisse faucibus tempor justo scelerisque commodo. Etiam ultrices est est, vel iaculis nisi viverra sed. Pellentesque pharetra rutrum risus sed viverra. Ut auctor tellus et tortor malesuada auctor. Nunc semper quam vitae lacus tincidunt pharetra. Mauris orci lectus, laoreet nec lorem non, dictum.') ";
					$link->query($query);
				}	

				$link->close();
			}

	}
?>

<html>

<head>

  <meta charset="UTF-8">

  <title>Writers Signup Form</title>

    <style>
		
		@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	
	body{
		margin: 0;
		padding: 0;
		/*background: #fff;*/

		/*color: #fff;*/
		font-family: Arial;
		font-size: 12px;
	}

	.body{
		position: absolute;
		top: -20px;
		left: -20px;
		right: -40px;
		bottom: -40px;
		background-image: url(http://static.tumblr.com/db6d6056efbbc156f35c9967e7d9f14c/v56ekyk/b8Nmtsggm/tumblr_static_writing.jpg);
		background-size: cover;
		-webkit-filter: blur(1px);
		z-index: 0;
	}

	.grad{
		position: absolute;
		top: -20px;
		left: -20px;
		right: -40px;
		bottom: -40px;
		/*width: auto;*/
		/*height: auto;*/
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		opacity: 0.7;
	}

	.header{
		position: absolute;
		top: calc(30% + 5px);
		left: calc(15% - 56px);
		z-index: 2;
	}

	.header div{
		float: left;
		color: #F00E0E;
		font-family: 'Exo', sans-serif;
		font-size: 35px;
		font-weight: 210;
	}

	.header div span{
		color: #0A08A4 !important;
	}

	.login{
		position: absolute;
		top: calc(45% - 50px);
		left: calc(15% - 55px);
		height: 150px;
		width: 350px;
		padding: 10px;
		z-index: 2;
	}

	.login input[type=text]{
		width: 290px;
		height: 35px;
		background: transparent;
		border: 1px solid rgba(255,255,255,0.6);
		border-radius: 2px;
		color: #fff;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
		margin-top: 10px;
	}

	.login input[type=password]{
		width: 290px;
		height: 35px;
		background: transparent;
		border: 1px solid rgba(255,255,255,0.6);
		border-radius: 2px;
		color: #fff;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
		margin-top: 10px;
	}

	.login input[type=submit]{
		width: 290px;
		height: 40px;
		background: #fff;
		border: 1px solid #fff;
		cursor: pointer;
		border-radius: 2px;
		color: #a18d6c;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 6px;
		margin-top: 30px;
	}

	.login input[type=submit]:hover{
		opacity: 0.8;
	}

	.login input[type=submit]:active{
		opacity: 0.6;
	}

	.login input[type=text]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=password]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=submit]:focus{
		outline: none;
	}

	::-webkit-input-placeholder{
	   color: rgba(255,255,255,0.6);
	}

	::-moz-input-placeholder{
	   color: rgba(255,255,255,0.6);
	}

	body {
	   overflow: hidden;  
	}

	.alert {
   		width:290px;    
	}

</style>

    <script src="js/prefixfree.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>

		<div class="header">
			<!-- <div>
			<a href="#">
				<img src="http://localhost/kami/include/logo.png">
			</a>
			</div> -->
			<div> <span>LUMS </span>Daily Student</div>
		</div>
		<br>
		<div class="login">
				<form method="post" action="signup.php">

					<!-- <div class="alert alert-success">Success! Well done its submitted.</div>
					<div class="alert alert-danger">Error ! Change few things.</div> -->

					<?php
						if($error) 
							echo "<div class=\"alert alert-danger\">
								<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
  								<span class=\"sr-only\">Error:</span>
								$error</div>";
						else if($success)
							echo "<div class=\"alert alert-success\">
								$success</div>"
					?>
					

					<input type="text" placeholder="Name" name="name"><br>
					<input type="text" placeholder="Email" name="email"><br>
					<input type="password" placeholder="Password" name="password"><br>

					<input type="submit" value="Signup" name="submit">
				</form>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>


</body>

</html>