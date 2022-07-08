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
					  	  <p class="login100-form-title-1 style3">IDO - Delete info </p>
					</div>
				</div>
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=view_branch.php>Branch</a></h1></center>
						</div>
						</div>
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=view_activity.php>Activity</a></h1></center>
						</div>
						</div>
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=view_halfdrop.php>Half Drop Reasons</a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=view_user.php>User</a></h1></center>
						</div>
						</div>
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=admin.php>Admin's Dashboard</a></h1></center>
						</div>
						</div>
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=oblogoff.php>Log off</a></h1></center>
						</div>
						</div>
						
					
					
				
			</div>
		</div>
	</div>
	


</body>
</html>