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
					//$counter=$_POST["counter"];
					$sdate=date("yy/m/d");
					$time=date("H:i:s");
					
								
					
					$sql="select * from user where nic='".$nic."' and status=0";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) 
						{
							while ($row = $result->fetch_assoc())
								{
									$p=$row['pw'];
									$cat=$row['cat'];
								}
							if($p==$pw)
								{ 
									$sql1="insert into logging values('','".$nic."','".$sdate."','".$time."','','')";
									$rs = $conn->query($sql1);
									$_SESSION["t"]=2;
									
									
									$_SESSION["counter"]=$cat;
									//$_SESSION["nic"]=$nic;
									header("Location: start.php?nic='".$nic."'");;
				
								}
							else{	
									echo "invalied user name or password";	
									echo "<br><a href=signin.html target=_self>Back</a>";
									$_SESSION["t"] = 2;
									
								}
						}
					// observer logging	
					
						
										
									
						else{
											echo " Not a Registerd user";
											echo "<p align=center><a href=signin.html target=_self>Back</a></p>";
										}
							
						
						
					
					//$_SESSION["t"] = $t;
					
					$conn->close();
				?>
	
			
				<div  ><center<a href="logoff.php" target="_self">Log Off</a></center>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
