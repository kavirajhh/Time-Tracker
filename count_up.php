<!DOCTYPE html>
<html lang="en">
<head>
	<title>Count</title>
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
												
					//$nic=$_SESSION["nic"];
					$obnic=$_SESSION["nic"];
					$nic=$_POST["nic"];
					$bid=$_POST["bid"];
					
					$count=$_POST["count"];
					$jsdate=date("yy/m/d");
					$time=date("H:i");
					$sql="insert into counter values('','".$nic."','".$jsdate."','".$time."','".$count."','".$obnic."','".$bid."')";
					$rs = $conn->query($sql);
					
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Counter Count </p>
					  </div>
				</div>

				<div><?php header('Location: obindex.php'); ?></div>
			</div>
		</div>
	</div>
	


</body>
</html>