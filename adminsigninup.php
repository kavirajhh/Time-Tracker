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
			session_start();
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Sign UP</p>
					  </div>
				</div>
				<?php 
					date_default_timezone_set("Asia/Colombo");					
					$nic=$_POST["nic"];
					$pw=$_POST["pw"];
					
								
					
					$sql="select * from obuser where nic='".$nic."' and cat=2";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) 
						{
							while ($row = $result->fetch_assoc())
								{
									$p=$row['pw'];
								}
							if($p==$pw)
								{ 
									
									header('Location: admin.php');;
				
								}
							else{	
									echo "invalied user name or password";	
									echo "<br><a href=adminsignin.html target=_self>Back</a>";
									$_SESSION["t"] = 2;
								}
						}
					else{
							echo " Not a Registerd user";
							echo "<br><a href=adminsignin.html target=_self>Back</a>";
							$_SESSION["t"] = 2;
						}
						
					
					//$_SESSION["t"] = $t;
					$_SESSION["nic"]=$nic;
					
					$conn->close();
				?>
	
			
				<div ><a href="oblogoff.php" target="_self">Log Off</a>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
