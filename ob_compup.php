<!DOCTYPE html>
<html lang="en">
<head>
	<title>Complete</title>
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

	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Complete </p>
					  </div>
				</div>
					<div>
	<?php
			include "dbconnection.php";
			session_start();
			$nic=$_SESSION["nic"];
			date_default_timezone_set("Asia/Colombo");	
					$id=$_POST["id"];
					$rid=$_POST["RID"];
					$jetime=date("H:i:s");
					
					if($rid===""){
							header('Location: obindex.php');
						}
					
					
					else{
					
					$sql="update ob_track set end_time='".$jetime."' ,reason_id='".$rid."' where id='".$id."' ";
					$rs = $conn->query($sql);
					echo "<p align=center>Job complete</p>";
					}
					
	?>
					
					</div>
				<div><?php header('Location: obindex.php'); ?></div>
			</div>
		</div>
	</div>
	


</body>
</html>