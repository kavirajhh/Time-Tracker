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
						
						header("Content-Disposition: attachment; filename=ido.csv"); 
						echo "#,Branch,Observer, Banker,Date,Time,Count\n";
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
								
								
								echo "$i,$branch,$ob_name,$banker,$date,$time,$count\n";
									
								$i=$i+1;
									
						}
						
						
						}
						
				?>
				
	