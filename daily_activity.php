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
						<div class="input100" align="right"><h1><a href=userdownload.php><img src="images/bt.jpg" width="15%"></a></h1></div>
					</div>
					<div align="center">
					  <h2>Daily Activity Report </h2>
					  </div>
				
					  
					
				
				<?php 
					
					
				include "dbconnection.php";
					
					function family($conn,$id){// get task name by task id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM pro_family where f_id='".$id."'");
								while ($row = $sql1->fetch_assoc()){
								$family=$row['f_name'];
								}
								return $family;

					}
					
					function job($conn,$id){// get task name by task id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM activity where id='".$id."'");
								while ($row = $sql1->fetch_assoc()){
								$job=$row['a_name'];
								}
								return $job;

					}
					
					function reason($conn,$reason_id){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM reason where RID='".$reason_id."'");
								while ($row = $sql1->fetch_assoc()){
								$REASON=$row['REASON'];
								}
								return $REASON;

					}
					
					function banker($conn,$uid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM user where NIC='".$uid."'");
								while ($row = $sql1->fetch_assoc()){
								$fname=$row['fname'];
								$lname=$row['lname'];
								$name=$fname.' ' .$lname;
								}
								return $name;

					}
					/*function observer($conn,$uid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM obuser where NIC='".$uid."'");
								while ($row = $sql1->fetch_assoc()){
								$nic=$row['nic'];
								$name=$row['name'];
								
								}
								return $name;

					}*/
					
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
					
					
					
					$sql="SELECT * from task";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						$i=1;
						echo "<table border=1 width=100%>";
						echo "<tr><TH>#</TH><TH>Doc No</TH><TH>Family</TH><TH> Activity</TH><TH>Job Start Date</TH><TH>Job Start Time</TH><TH>Job End Time</TH><th> Duration</TH><TH>Drop Reason</TH><th>Banker</TH><th>Branch</th></tr>";
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["JOBID"];
								$jobid=job($conn,$id);// get reason name
								
								$f_id=$row["f_id"];
								$family=family($conn,$f_id);
								
								$docno=$row["docno"];
								$remark=$row["remark"];
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
								}
								
								echo "<tr><td>$i</td><td>$docno</td><td>$family</td><td>$jobid<br>$remark</td><td>$jsdate</td><td>$jstime</td><td>$e</td><td>$d </td><td>$rid</td><td>$banker</td><td>$branch</td></tr>";
									
								$i=$i+1;
									
						}
						
						echo "</table>";
						}
						
				?>
				
			
	</div>
</div>
</body>
</html>
