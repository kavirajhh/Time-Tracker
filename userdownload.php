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
					header("Content-Disposition: attachment; filename=ido.csv"); 
					echo "#,Doc No,Family,Activity,Remark,Job Start Date,Job Start Time,Job End Time, Duration,Drop Reason,Banker,Branch\n";
					if ($result->num_rows > 0) 
						$i=1;
						
						
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
									$rid="Not Complete"; }
								else{
								$rid=reason($conn,$reason_id); // get reason name
									}
								
								$duration=abs(strtotime($jstime)-strtotime($jetime));
								$h=(int) ($duration/3600);
								$m=(int) (fmod($duration,3600)/60);
								$s=(int) (fmod($duration,60));
								
								echo "$i,$docno,$family,$jobid,$remark,$jsdate,$jstime,$jetime,$h : $m : $s,$rid,$banker,$branch\n";
									
								$i=$i+1;
								
						}
						
						}
						
				?>
				
			
	