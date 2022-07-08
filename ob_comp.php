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
					$jetime=date("H:i:s");
					$date=date("yy/m/d");
					$nic=$_SESSION["nic"];
			
					
	?>
	
				<script>
							function myFunction() {
  								var x = document.getElementById("mySelect").value;
								
								if(x==1){ y="COMPLETE";}
								
								else { y="HALF DROP";}
								document.getElementById("demo").innerHTML = y;
									}
								
						</script>
	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">Complete Started Activity</p>
					  </div>
				</div>

				<form class="login100-form validate-form" action="ob_compup.php" method="post">
					
					<div class="wrap-input100 validate-input m-b-26" >
						
						<p> Select Officer</p>
						<div class="input100">
						<select class="input100" name="id" required>
						<option value=""  selected="selected">Select Officer</option>
							<?php 
								$sql1 = mysqli_query($conn, "SELECT * FROM ob_track where ob_nic='".$nic."' and reason_id=0 and date='".$date."'");
								while ($row = $sql1->fetch_assoc()){
								$id=$row['id'];
								$banker=$row['banker_nic'];
								/////////////////////
								$sql = mysqli_query($conn, "SELECT * FROM user where NIC='".$banker."'");
								while ($row = $sql->fetch_assoc()){
									$uname=$row['fname'];
									echo "<option value=".$id.">".$uname."</option>";
								}
								
								////////////////////
								
								}
							?>
							</select>
							</div>
						
						<br><p> Select Reason</p>
						<div class="input100">
						<select class="input100" name="RID" required id="mySelect" onChange="myFunction()">
						<!--option value=""  selected="selected">Select Reason</option-->
							<?php 
								$sql1 = mysqli_query($conn, "SELECT * FROM reason");
								while ($row = $sql1->fetch_assoc()){
								$rid=$row['RID'];
								$reason=$row['REASON'];
								echo "<option value=".$rid.">".$reason."</option>";
								}
							?>
							</select>
							</div>
						<span class="focus-input100"></span>
				  	</div>
					
					
						
					
					<div class="container-login100-form-btn">
						<center><br>
						<button class="login100-form-btn">
							<H3 id="demo">COMPLETE</H3>
						</button>
						</center>
					</div>
					
				</form>
				
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=obindex.php>Observer Dashboard</a></h1></center></div>
				</div>
				
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=oblogoff.php target=_self>Sign Out</a></h1></center></div>
				</div>
				
			</div>
		</div>
	</div>
	


</body>
</html>