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
					  	  <p class="login100-form-title-1 style3">IDO - Observer's dashboard </p>
					</div>
				</div>

								
					
										

						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=ob_track.php>Start Activity</a></h1></center>
						</div>
						</div>
				
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=ob_comp.php>Complete Activity</a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=counter_count.php>Count Queue</a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1 ><a href=user.php> New User Account </a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=report.php>Reports</a></h1></center>
						</div>
						</div>
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=view_mydata.php>My Data</a></h1></center>
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