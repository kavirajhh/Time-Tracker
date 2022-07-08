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
					  <p class="login100-form-title-1 style3">observer's SiGN IN </p>
				  </div>
				</div>

				<form class="login100-form validate-form" action=ob_locationup.php method="post">
					
						<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Select Branch </span>
						<select class="input100" name="branch" required>
						<option value=""  selected="selected">Select Branch</option>
							<?php 
								$sql = mysqli_query($conn, "SELECT * FROM branch");
								while ($row = $sql->fetch_assoc()){
								$bid=$row['BID'];
								$branch=$row['BNAME'];
								echo "<option value=".$bid.">".$branch."</option>";
								}
							?>
							</select>
						
						<span class="focus-input100"></span><br>
				  	</div>
					
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="NIC is required">
						<span class="label-input100">NIC </span>
						<input class="input100" type="text" name="nic" placeholder="Enter NIC"  >
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
						<span class="label-input100">Password </span>
						<input class="input100" type="password" name="pw" placeholder="Enter Password" >
						<span class="focus-input100"></span>
				  	</div>
					
										

					<div class="container-login100-form-btn">
						
						<center><br><button class="login100-form-btn">Sign In	</button></center>
					</div>
				</form>
				<div ><?php echo "<br><a href=logoff.php target=_self><P align=center >Sign Out</h1></a>"; ?></div>
			</div>
		</div>
	</div>
	


</body>
</html>