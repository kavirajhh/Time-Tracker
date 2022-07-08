<!DOCTYPE html>
<html lang="en">
<head>
	<title>Delete</title>
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
<body onLoad="myFunction()">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Delete </p><p id="demo"></p>
					  </div>
				</div>
					<div>
					<?php
			include "dbconnection.php";
			
					$id=$_REQUEST['jid'];
					
					
					$sql="delete from activity where id='".$id."' ";
					$rs = $conn->query($sql);
					echo "<p align=center>Delete</p>";
					
					
	?>
					
					</div>
				<div><?php header('Location: view_activity.php'); ?></div>
			</div>
		</div>
	</div>
	


</body>
</html>