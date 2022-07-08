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

		.style3 {color: #FFFFFF}
      	.on  { background:red; height:100px; width:100px }
      	.off { background:#57B846; height:100px; width:100px }
     </style>

	<?php
			include "dbconnection.php";
			session_start();
			date_default_timezone_set("Asia/Colombo");	
					
					$nic=$_SESSION["nic"];
					$jedate=date("yy/m/d");
					$jetime=date("H:i:s");
					
					$sql="update logging set E_date='".$jedate."' ,E_time='".$jetime."' where NIC='".$nic."' and E_time='00:00:00' and S_date='".$jedate."' ";
					$rs = $conn->query($sql);
					
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Start task </p>
					  </div>
				</div>

			
					
				<div class="container-login100-form-btn"><?php header('Location: index.html'); ?></div>
			</div>
			
		</div>
	</div>
	


</body>
</html>