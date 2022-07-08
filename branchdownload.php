<?php 			
include "dbconnection.php";
				session_start();
				$nic=$_SESSION["nic"];
				$date=$_REQUEST['today'];
				$branch=$_REQUEST['branch'];
				
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
					//include "dbconnection.php";
					$sql1 = mysqli_query($conn, "SELECT * FROM reason where RID='".$reason_id."'");
								while ($row = $sql1->fetch_assoc()){
								$REASON=$row['REASON'];
								}
								return $REASON;

					}
					
					
					function banker($conn,$nic){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM user where NIC='".$nic."'");
								while ($row = $sql1->fetch_assoc()){
								$fname=$row['fname'];
								$lname=$row['lname'];
								$name=$fname.' '.$lname;
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
					
					
					function observer($conn,$uid){ // get reason name by reason id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM obuser where NIC='".$uid."'");
								while ($row = $sql1->fetch_assoc()){
								$nic=$row['nic'];
								$name=$row['name'];
								
								}
								return $name;

					}
					
					$sql="SELECT * from ob_track where date='".$date."' and banker_nic in ( select NIC from user where BID='".$branch."')";
					$result = $conn->query($sql);
					header("Content-Disposition: attachment; filename=ido.csv"); 
					
					if ($result->num_rows > 0) 
						$i=1;
						
						echo "#,Doc No,Family,Activity,Remark,Job Start Date,Job Start Time,Job End Time,Duration,Drop Reason,Banker,Branch,observer";
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["task_id"];
								$f_id=$row["f_id"];
								$family=family($conn,$f_id);
								
								$docno=$row["docno"];
								$remark=$row["remark"];
								$jobid=job($conn,$id);// get reason name
								
								$jsdate=$row["date"];
								$jstime=$row["start_time"];
								$jetime=$row["end_time"];
								
								$nic=$row["banker_nic"];
								$banker=banker($conn,$nic); 
								
								$bid=bankid($conn,$nic); 
								$branch=branch($conn,$bid); 
								
								
								
								$reason_id=$row["reason_id"];
								if($reason_id==0){
									$rid="Running...."; }
								else{
								$rid=reason($conn,$reason_id); // get reason name
									}
								
								$obnic=$row["ob_nic"];
								$obname=observer($conn,$obnic);
								
								if($jetime=='00:00:00')
									{$d=''; $e='';} 
								else{$duration=abs(strtotime($jstime)-strtotime($jetime));
									$h=(int) ($duration/3600);
									$m=(int) (fmod($duration,3600)/60);
									$s=(int) (fmod($duration,60));
									$d="$h : $m : $s";
									$e=$jetime;
								}
								//echo <p>$name</P>";
								echo "\n$i,$docno,$family,$jobid,$remark,$jsdate,$jstime,$e,$d,$rid,$banker,$branch,$obname";
									
								$i=$i+1;
									
						}
						
						}
						
				?>
				
			
