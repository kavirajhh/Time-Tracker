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
<body bgcolor=black>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center"><p class="login100-form-title-1 style3">Add Activity </p> </div></div>

				<form class="login100-form validate-form" action=activityup.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Job Title is required">
						<span class="label-input100">Job Activity </span>
						<input class="input100" type="text" name="a_name" placeholder="Enter Activity" required>
						<span class="focus-input100"></span>
				  	</div>
							<div><span class="focus-input100"></span><br></div>
				 			<br><div class="container-login100-form-btn"><button class="login100-form-btn">Add Activity</button></div>
								
				</form>
				
			
			
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=obindex.php>Observer Dashboard</a></h1></center></div>
				</div>
				
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=oblogoff.php target=_self>Sign Out</a></h1></center></div>
				</div>
				</div>
			</div>	
		</div>
	</div>
	


</body>
</html>