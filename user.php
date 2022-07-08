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
	<?php include "dbconnection.php"; ?>
</head>
<body bgcolor=black>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center"><p class="login100-form-title-1 style3">Sign UP  </p> </div></div>

				<form class="login100-form validate-form" action=userup.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="NIC is required">
						<span class="label-input100">NIC </span>
						<input class="input100" type="text" name="nic" placeholder="Enter NIC" required maxlength="12">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">First Name </span>
						<input class="input100" type="text" name="fname" placeholder="Enter Your First Name" required maxlength="15">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Last Name </span>
						<input class="input100" type="text" name="lname" placeholder="Enter Your Last Name" maxlength="15">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Password </span>
						<input class="input100" type="password" name="pw" placeholder="Enter Your password" required maxlength="20">
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Confirm Password </span>
						<input class="input100" type="password" name="cpw" placeholder="Enter Your password again" required>
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Select Branch </span>
						<select class="input100" name="branch" required>
						<option value="" selected="selected">Select Branch</option> 
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
						
						<div class="wrap-input100 validate-input m-b-26">
						
						<p> Select Job Title
						<br><select class="input100" name="counter" required>
						<option value="" selected="selected">Select Category</option> 
							<?php 
								$sql = mysqli_query($conn, "SELECT * FROM jobcat order by jobcat");
								while ($row = $sql->fetch_assoc()){
								$id=$row['id'];
								$cat=$row['jobcat'];
								echo "<option value=".$id.">".$cat."</option>";
								}
							?>
						
						
						</select>
						</div>
					
					
						

					<br><div class="container-login100-form-btn"><p><button class="login100-form-btn">Create Account</button></p></div>
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
	


</body>
</html>