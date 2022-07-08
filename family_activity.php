<!DOCTYPE html>
<html lang="en">
<head>
	<title>Map Activity</title>
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
					<div align="center"><p class="login100-form-title-1 style3">Add Activity to Family</p> </div></div>

				<form class="login100-form validate-form" action=act_fam_view.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26">
						<p> Select Job Title</p>
						<br><select class="input100" name="family" required>
						<option value="" selected="selected">Select Family</option> 
							<?php 
								
								$sql = mysqli_query($conn, "SELECT * FROM pro_family order by f_id");
								while ($row = $sql->fetch_assoc()){
								$id=$row['f_id'];
								$name=$row['f_name'];
								echo "<option value=".$id.">".$id.'-'.$name."</option>";
								}
							?>
						
						
						</select>
						</div>
					
					
					
					
							<div><span class="focus-input100"></span><br></div>
				 			<br><div class="container-login100-form-btn"><button class="login100-form-btn">Map Activity</button></div>
								
				</form>
				
			
			
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=admin.php>Admin's Dashboard</a></h1></center></div>
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