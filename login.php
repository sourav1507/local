
<!Doctype html>
<html>
	<title>Encapsulaters pvt Ltd&reg;
	</title>
	<link type="text/css" rel="stylesheet" href="login.css">	
	<head><meta charset="utf-8"/>
	</head>
		<body>
		<div class="upperlayout"><h2>Edu-Rigth</h2><img src="logo1.png"  class="logo"></div>
		
		<div class="login-box"><h1>Sign Up Here</h1>

				
		
				<img src="avatar.png" class="avatar" >
				<form name=fr1 method="post">
				Username*</p>
				<input type="text" name="user" id="user" placeholder="Enter username" required>
				<p>
				Password*
				</p>
				<input type="password" name="password" id="password" placeholder="Enter password" required>
				<br>
				
				<input type="submit" value="submit" name="submit" onclick="<?php
	
	
		include 'config.php';
	if(isset($_POST['user'])){
	$username = $_POST['user'];
		}
		if(isset($_POST['password'])){
			
		$password = $_POST['password'];
		}
		$sql = "SELECT username, password FROM users WHERE username = '".$username."' AND  password = '".$password."'";

			$db=mysqli_query($conn,$sql);
			if(mysqli_num_rows($db)>0)
			{
			
				
			
			}
			else{
				echo "invalid username/password";
			}
			
?>" >
			</br>
				
				<a href="index.php" >Havn't signed up?</a>
		</form></body></div>
		
		
</html>