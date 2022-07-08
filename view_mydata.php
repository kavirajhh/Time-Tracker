<!DOCTYPE html>
<html lang="en">
<head>
	<title>MyData</title>
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
					  <p class="login100-form-title-1 style3">IDO - My Data</p>
					  </div>
				</div>
					 
					
				
				<?php 
					include "dbconnection.php";
					date_default_timezone_set("Asia/Colombo");	
					session_start();
					$nic=$_SESSION["nic"];
					
					$today=date("yy/m/d");
					
					function banker($conn,$nic){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM user where NIC='".$nic."'");
								while ($row = $sql1->fetch_assoc()){
								$fname=$row['fname'];
								$lname=$row['lname'];
								$name=$fname.' '.$lname;
								}
								return $name;

					}
					
					function job($conn,$id){// get task name by task id
					//include "dbconnection.php";
					$sql1 = mysqli_query($conn, "SELECT * FROM activity where id='".$id."'");
								while ($row = $sql1->fetch_assoc()){
								$job=$row['a_name'];
								}
								return $job;

					}
					$sql="SELECT * FROM ob_track where date='".$today."' and ob_nic='".$nic."' order by reason_id DESC";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						
						echo "<table border=1 width=100%>";
						echo "<tr><TH>#</TH><TH>Doc No</TH><TH>Start Time</TH><TH>Officer Name</TH><TH>Activity</TH><TH></TH></tr>";
						$i=1;
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["id"];
								$docno=$row["docno"];
								$stime=$row["start_time"];
								$bnic=$row["banker_nic"];
								$bname=banker($conn,$bnic);
								
								$task_id=$row["task_id"];
								$task=job($conn,$task_id);
								
								$rid=$row["reason_id"];
								if($rid==0){$s='Running..';}
								else{$s='Complete';}
								echo "<tr><td>$i</td><td>$docno</td><td>$stime</td><td>$bname</td><td>$task</td><td>$s</td></tr>";
									
								$i=$i+1;
									
						}
						echo "</table>";
						}
					
						
				?>
			<div ><?php echo "<br><a href=obindex.php target=_self><P align=center >Home</h1></a>"; ?></div>		
		</div>	
		
	</div>
</div>
</body>
</html>
