<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
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
</head>
<body>
	
	<div>
		<div >
					<div class="wrap-input100 validate-input m-b-26">
						<div class="input100" align="right"><h1><a href=countdownload.php><img src="images/bt.jpg" width="15%"></a></h1></div>
					</div>
					<div align="center">
					  <h2>Queue Summary Report</h2>
					  </div>
				
					  
					
				
				<?php 
					
					
				include "dbconnection.php";
				date_default_timezone_set("Asia/Colombo");	
				$jsdate=date("yy/m/d");	
				$jstime=date("H:i:s");
					
					
					
					function banker($conn,$uid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM user where NIC='".$uid."'");
								while ($row = $sql1->fetch_assoc()){
								$fname=$row['fname'];
								$lname=$row['lname'];
								$name=$fname.' ' .$lname;
								}
								return $name;

					}
					function observer($conn,$uid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM obuser where NIC='".$uid."'");
								while ($row = $sql1->fetch_assoc()){
								$nic=$row['nic'];
								$name=$row['name'];
								
								}
								return $name;

					}
					
					function bankid($conn,$nic){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM user where NIC='".$nic."'");
								while ($row = $sql1->fetch_assoc()){
								$bid=$row['BID'];
								
								}
								return $bid;

					}
					
					function branch($conn,$bid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM branch where BID='".$bid."'");
								while ($row = $sql1->fetch_assoc()){
								$branch=$row['BNAME'];
								
								}
								return $branch;

					}
					
					
					
					$sql="SELECT * from counter order by ob_nic";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						$i=1;
						echo "<table border=1 width=60%>";
						echo "<tr><TH>#</TH><TH>Branch</TH><TH>Observer</TH><TH> Banker</TH><TH>Date</TH><TH>Time</TH><TH>Count</TH></tr>";
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["id"];
								$ob_nic=$row["ob_nic"];
								$ob_name=observer($conn,$ob_nic);
								
								$nic=$row["user_ID"];
								$banker=banker($conn,$nic);//get Banker name
								
								$date=$row["date_time"];
								$time=$row["time"];
								$count=$row["count"];
								$bid=$row["bid"];
								//$bid=bankid($conn,$uid);
								$branch=branch($conn,$bid); 
								
								
								/*$jobid=job($conn,$id);// get reason name
								$docno=$row["docno"];
								
								$uid=$row["NIC"];
								$banker=banker($conn,$uid);//get Banker name
								
								$bid=bankid($conn,$uid);
								$branch=branch($conn,$bid); 
								
								$jsdate=$row["JSDATE"];
								$jstime=$row["JSTIME"];
								//$nic=$row["banker_nic"];
								$jetime=$row["JETIME"];
								
								$reason_id=$row["RID"];
								if($reason_id==0){
									$rid="Running..."; }
								else{
								$rid=reason($conn,$reason_id); // get reason name
									}
								
								//$duration=abs(strtotime($jstime)-strtotime($jetime));
							if($jetime=='00:00:00')
								{$d=''; $e='';} 
							else{$duration=abs(strtotime($jstime)-strtotime($jetime));
								$h=(int) ($duration/3600);
								$m=(int) (fmod($duration,3600)/60);
								$s=(int) (fmod($duration,60));
								$d="$h : $m : $s";
								$e=$jetime;
								}*/
								
								echo "<tr><td>$i</td><td>$branch</td><td>$ob_name</td><td>$banker</td><td>$date</td><td>$time</td><td>$count</td></tr>";
									
								$i=$i+1;
									
						}
						
						echo "</table>";
						}
						
				?>
				
			
	</div>
</div>
</body>
</html>
