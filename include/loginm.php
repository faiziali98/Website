<?php
	session_start();

	$error = "";
	$success = "";	

	if (!(isset($_SESSION['authorized_user']))){
		if(isset($_POST['email']) && isset($_POST['password'])){
			
			$email = $_POST['email'];
			$password = $_POST['password'];

			$link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");

	  		$email_query = "SELECT * FROM authorized_users WHERE email = '$email' ";
	  		$password_query = "SELECT * FROM authorized_users WHERE password = '$password' ";

	  		$email_result = $link->query($email_query);
	  		$password_result = $link->query($password_query);

	  		
	  		if(!$email)
	  			$error = "Please enter your email address.";
	  		else if($email_result->num_rows == 0)
	  			$error = "The email you entered does not belong to any account.";
	  		else if(!$password)
	  			$error = "Please enter your password.";
	  		else if($password_result->num_rows == 0)
	  			$error = "The password you entered is incorrect. Please try again.";

	  		if($email_result->num_rows > 0 && $password_result->num_rows > 0){
	  			$row = mysqli_fetch_array($email_result, MYSQL_ASSOC);
	            $id = $row["id"];

	            $success = "Welcome back, <strong>".$row["name"]. "</strong>!" ;

				$_SESSION['authorized_user'] = $id;
	  		}		
			$link->close();
			if ($success)
				echo $success;
			else
				echo $error;
		}
	}else{
		header("Location: http://localhost/kami/best_profile/edit-profile.php");
	}
?>