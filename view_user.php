<!DOCTYPE html>
<html lang="en">
<head>
	<title>Half Drop Reasons</title>
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
					  <p class="login100-form-title-1 ">IDO - Half Drop Reasons</p>
					  </div>
				</div>
					 
					
				
				<?php 
					include "dbconnection.php";
					date_default_timezone_set("Asia/Colombo");	
					session_start();
					$nic=$_SESSION["nic"];
					echo "<h2> Delete users may case to previous data</h2>";
					$today=date("yy/m/d");
					
				
					
				
					
					function bankid($conn,$nic){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM ob_log where nic='".$nic."'");
								while ($row = $sql1->fetch_assoc()){
								$bid=$row['bid'];
								
								}
								return $bid;

					}
					
					function jobcat($conn,$id){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM jobcat where id='".$id."'");
								while ($row = $sql1->fetch_assoc()){
								$cat=$row['jobcat'];
								
								}
								return $cat;

					}
					
					
					$bid=bankid($conn,$nic); // get observers bank
					
					$sql="SELECT * FROM user where BID='".$bid."'";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						
						echo "<table border=1 width=100%>";
						echo "<tr><TH>#</TH><TH>NIC</TH><TH>Officer Name</TH><TH>Job Family</TH><TH></TH></tr>";
						$i=1;
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["NIC"];
								$fname=$row["fname"];
								$lname=$row["lname"];
								$name=$fname.' '.$lname;
								$cat=$row["cat"];
								$ucat=jobcat($conn,$cat);
								
								
								
							
								echo "<tr><td>$i</td><td>$id</td><td>$name</td><td>$ucat</td><td bgcolor=#039BE6 align='center'><a href=del_user.php?uid=$id>Delete</td></a></tr>";
									
								$i=$i+1;
									
						}
						echo "</table>";
						}
					
						
				?>
			<div ><?php echo "<br><a href=del.php target=_self><P align=center >Home</h1></a>"; ?></div>		
		</div>	
		
	</div>
</div>
</body>
</html>
