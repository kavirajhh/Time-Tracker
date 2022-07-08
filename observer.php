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
	<?php
			include "dbconnection.php";
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">create observer account </p>
					  </div>
				</div>

				<form class="login100-form validate-form" action=obuserup.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="NIC is required">
						<span class="label-input100">NIC </span>
						<input class="input100" type="text" name="nic" placeholder="Enter NIC">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100"> Name </span>
						<input class="input100" type="text" name="fname" placeholder="Enter Your  Name">
						<span class="focus-input100"></span>
				  	</div>
					
						
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Password </span>
						<input class="input100" type="password" name="pw" placeholder="Enter Your password">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Confirm Password </span>
						<input class="input100" type="password" name="cpw" placeholder="Enter Your password again">
						<span class="focus-input100"></span><br>
				  	</div>
					
					<div class="container-login100-form-btn">
					
						<br><button class="login100-form-btn">
							Create Account
						</button>
					</div>
				</form>
			
			
			<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=admin.php>Admin Dashboard</a></h1></center></div>
				</div>
				
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=oblogoff.php target=_self>Sign Out</a></h1></center></div>
				</div>
				</div>
		</div>
	</div>
	


</body>
</html>