<!DOCTYPE html>
<html lang="en">
<head>
	<title>Observer</title>
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

	<?php
	include "dbconnection.php";
	session_start();
		$nic=$_SESSION["nic"];
		$cat=$_SESSION["t"];
		
		$sql="select * from obuser where nic='".$nic."'";
		$result = $conn->query($sql);
					
					if ($result->num_rows <1) 
						{
						header('Location: ob_location.php');;	
						}
						
					
					$conn->close();
	
	
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  	  <p class="login100-form-title-1 style3">IDO - Admin's dashboard </p>
					</div>
				</div>
		
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=family.php> New Product Family </a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=activity.php>New Job Activity </a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=family_activity.php>Map Activity to Product Family </a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=halfdrop.html>New Half Drop Reasons </a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=cat.php> New Job Category </a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=user.php> New User Account </a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=admin.php>Home</a></h1></center>
						</div>
						</div>
						
					
					
				
			</div>
		</div>
	</div>
	


</body>
</html>