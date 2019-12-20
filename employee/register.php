
<?php 
	include 'config.php';
    session_start();
	$error = "";
	// remove all session variables
	if (isset($_SESSION['username'])) {
	    header("Location: index.php");
	}
  if(isset($_POST['register_btn'])){
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$password2 = $_POST['password2'];
	  	if ($password==$password2) {
	  		$password = md5($password);
	  		$sql = "INSERT INTO employees(username,email,password) VALUES('$username','$email','$password')";
	  		if (mysqli_query($con,$sql)) {
	  			$_SESSION['username']= $username;
	  			header("location: index.php");
	  		}
	  	}else{
	  		$_SESSION['message']="The tow password do not match";
	  	}
    }

 ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

	 

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value=" ">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value=" ">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" value="Register">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>