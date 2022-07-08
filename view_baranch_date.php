<!DOCTYPE html>
<html lang="en">
<head>
	<title>Branch Report</title>
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
					  <p class="login100-form-title-1 style3">Branch Summary </p><p id="demo"></p>
					  </div>
				</div>
					<div>
				
			
			
			<form class="login100-form validate-form" action=branch_report.php method="post">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Select Branch </span>
						<select class="input100" name="branch" required>
						<option value=""  selected="selected">Select Branch</option>
							<?php 
							
								include "dbconnection.php";
								$sql = mysqli_query($conn, "SELECT * FROM branch");
								while ($row = $sql->fetch_assoc()){
								$bid=$row['BID'];
								$branch=$row['BNAME'];
								echo "<option value=".$bid.">".$branch."</option>";
								}
							?>
							</select>
						
						<span class="focus-input100"></span><br>
				  	</div>
					
					
					<div class="wrap-input100 validate-input m-b-26" >
					<span class="label-input100">Select Date</span>
						<input type=date name=today >
					<span class="focus-input100"></span><br>
				  	</div>
					<div class="container-login100-form-btn">
						
						<center><br><button class="login100-form-btn">View	</button></center>
					</div>
					
				</form>
					
				
					

					
					</div>
				
			</div>
		</div>
	</div>
	


</body>
</html>