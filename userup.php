<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">User Account Created </p>
					  </div>
				</div>
				<?php 
					include "dbconnection.php";
					
					$nic=$_POST["nic"];
					$fname=$_POST["fname"];
					$lname=$_POST["lname"];
					$pw=$_POST["pw"];
					$cpw=$_POST["cpw"];
					$branch=$_POST["branch"];
					$title=$_POST["counter"];
					
					$sql="insert into user values('".$nic."','".$fname."','".$lname."','".$pw."','".$branch."','".$title."','')";
					$result = $conn->query($sql);
					echo " User Account $fname Created";

				?>
	
	
				<div align="center" class="login100-form-btn"><a href="new.php" target="_self">Home</a>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
