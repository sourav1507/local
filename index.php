<!Doctype html>
<html>
	<title>Encapsulaters pvt Ltd&reg;
	</title>
	<link type="text/css" rel="stylesheet" href="slideshow.css">	
	<head><meta charset="utf-8"/>
	</head>
		<body>
		<div class="upperlayout"><h2>Edu-Rigth</h2><img src="logo1.png"  class="logo"></div>
		
		<div class="login-box"><h1>Sign Up Here</h1>

				
		
				<img src="avatar.png" class="avatar" >
				<form name=fr1 method="post" onsubmit=" return <?php $_SERVER["PHP_SELF"];?>">
				<p>Name*</p>
					<p>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
					Username*</p>
				<input type="text" name="user" id="user" placeholder="Enter username" required>
				<p>
				Password*
				</p>
				<input type="password" name="password" id="password" placeholder="Enter password" required>
				<br>
				
				<input type="submit" value="submit" name="submit" onClick="<?php
	
		include 'config.php';
		if(isset($_POST['name']))
		{
		$name = $_POST['name'];
		}
		if(isset($_POST['user'])){
   
			$username = $_POST['user'];
		}
		if(isset($_POST['password'])){
			
		$password = $_POST['password'];
		}
			
		
		$sql="INSERT INTO users(name,username,password) VALUES ('$name', '$username', '$password')";
			$db=mysqli_query($conn,$sql);
			if($db){?>
			<script>window.location.href="main.html"</script><?php
				
			
			}
			else{
				echo '<script>alert("please try again")</script>';
			}
		
	
?>
				
		<a href="login.php" >Already a user? Sign In</a>
		</form></body></div>
		
		
</html>

