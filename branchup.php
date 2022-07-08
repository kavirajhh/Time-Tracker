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
					$branch_no=$_POST["bid"];;
					$branch=$_POST["branch"];
					$sql="insert into branch values('".$branch_no."','".$branch."')";
					$result = $conn->query($sql);
					echo " Branch $branch added to Database";

				?>
	
	
				<div align="center"><a href="branch.html" target="_self">Add Next</a>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
