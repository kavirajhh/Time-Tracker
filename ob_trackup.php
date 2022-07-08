<!DOCTYPE html>
<html lang="en">
<head>
	<title>Job Start</title>
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
			$nic=$_SESSION["nic"];
			$cat=$_SESSION["t"];
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
					$uid=$_POST["uid"];
					$jobid=$_POST["jobid"];
					$family=$_POST["family"];
					$remark=$_POST["remark"];
					$sdate=date("yy/m/d");
					$time=date("H:i:s");
					
					//$n1=$_POST["n1"];
					
					$n2=strtoupper($_POST["n2"]);
					
					$n=$family.'/'.$n2;
					
					if($jobid=="" ||$family=="" ){
							header('Location: obindex.php');
						}
					
					
					else{
									$sql2="update ob_track set end_time='".$time."', reason_id=1 where banker_nic='".$uid."' and  reason_id=0";
									$rs = $conn->query($sql2);
			
									$sql1="insert into ob_track values('','".$n."','".$sdate."','".$time."','".$uid."','".$family."','".$jobid."','".$remark."','','','".$nic."')";
									$rs = $conn->query($sql1);
									echo "<p align=center> New job $jobid started</p>";
						
					
					$conn->close(); }
				?>
	
			
				<div><?php header('Location: obindex.php'); ?></div>

			
		</div>
	</div>

</body>
</html>
