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
					<div align="right">
					  <p class="login100-form-title-1"> admin's dashboard </p>
					  
					</div>
				</div>
<?php 

	include "dbconnection.php";
	session_start();
		$nic=$_SESSION["nic"];
	
	$sql="select * from obuser where nic='".$nic."'";
		$result = $conn->query($sql);
					
					if ($result->num_rows <1) 
						{
						header('Location: adminsignin.html');;	
						}
						
					
					$conn->close();
	
	
	?>							
					
										

						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center>
							  <h1><a href=observer.php>Create Observer</a></h1>
							</center>
						</div>
						</div>
					
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=new.php>New</a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=del.php>Delete</a></h1></center>
						</div>
						</div>
						
						
						<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=report.php>Reports</a></h1></center>
						</div>
						</div>
						
						
					<div class="wrap-input100 validate-input m-b-26">
						<div class="input100">
							<center><h1><a href=oblogoff.php target="_self">Logoff</a></h1></center>
						</div>
						</div>
					
					
				
			</div>
		</div>
	</div>
	


</body>
</html>