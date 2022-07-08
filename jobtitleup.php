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
					  <p class="login100-form-title-1 style3">New Branch Added </p>
					  </div>
				</div>
				<?php 
					include "dbconnection.php";
					$id="";
					$title=$_POST["jtitle"];
					$des=$_POST["jdes"];
					$sql="insert into job values('','".$title."','".$des."')";
					$result = $conn->query($sql);
					echo " Job Title $title Updated";

				?>
	
	
				<div align="center"><a href="admin.php" target="_self">Home</a>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
