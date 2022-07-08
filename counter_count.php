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
				$nic=$_SESSION["nic"];
				$sql="select * from ob_log where nic='".$nic."'";
				$result = $conn->query($sql);
				while ($row = $result->fetch_assoc())
								{
									$bid=$row['bid'];
									
									
								}
				
				
			
					
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

				<form class="login100-form validate-form" action=count_up.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26" >
						<p>User </p>
						<div class="input100">
						<select class="input100" name="nic" required>
							<?php 
								$sql1 = mysqli_query($conn, "SELECT * FROM user where BID='".$bid."' ");
								while ($row = $sql1->fetch_assoc()){
								$nic=$row['NIC'];
								$fname=$row['fname'];
								$lname=$row['lname'];
								echo "<option value=".$nic.">".$fname.' '.$lname."</option>";
								
								}
								echo $nic;
							?>
							</select>
							</div>
							<div class="wrap-input100 validate-input m-b-26" >
								<br><p>Count </p>
								<input class="input100" type="number" name="count" placeholder="Enter no of customers in queue">
						<span class="focus-input100"></span>
				  	</div>
						<span class="focus-input100"></span>
				  	</div>
					
					
						<input type='hidden' name=bid value=<?php echo $bid; ?> >
					
					<div class="container-login100-form-btn">
						<center><br>
						<button class="login100-form-btn">
							OK
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
	
<?php echo "dddd"; ?>

</body>
</html>