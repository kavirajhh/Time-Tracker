<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Category</title>
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
					<div align="center">
					  <p class="login100-form-title-1 style3">New Job Category </p>
					  </div>
				</div>
				<?php 
					include "dbconnection.php";
					session_start();
					$nic=$_SESSION["nic"];
					
					date_default_timezone_set("Asia/Colombo");	
					$date=date("yy/m/d H:i:s");
					
					$id="";
					$cat_name=$_POST["cat_nam"];
					
					
					$sql="insert into jobcat values('','".$cat_name."','".$nic."','".$date."')";
					$result = $conn->query($sql);
				
						echo " Category $cat_name Created";
					

				?>
	
	
				<div align="center"><a href="obindex.php" target="_self">Home</a>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
