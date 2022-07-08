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
			$cat='';
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
					$sdate=date("yy/m/d");
					$time=date("H:i:s");
					$branch=$_POST["branch"];
					
					$sql="select * from obuser where nic='".$nic."'";
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
									$sql1="insert into ob_log values('".$nic."','".$sdate."','".$time."','".$branch."')";
									$rs = $conn->query($sql1);
									$t=1;
									header('Location: obindex.php');;
				
								}
							else{	
									echo "invalied user name or password";	
									echo "<br><p align=center><a href=ob_location.php target=_self>Back</a></p>";
								}
						}
					else{
							echo " Not a Registerd user";
							echo "<p align=center><a href=ob_location.php target=_self>Back</a></p>";
						}
						
					$_SESSION["nic"] = $nic;
					$_SESSION["t"] = $cat;
					$conn->close();
				?>
	
				<div></div>
				<br><a href="logoff.php" target="_self"><div class="login100-form-btn">Log Off</div></a>

			</div>
		</div>
	</div>

</body>
</html>
