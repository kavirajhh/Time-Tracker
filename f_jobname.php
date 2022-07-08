<?php 
								
function job($conn,$id){
					
					$sql1 = mysqli_query($conn, "SELECT * FROM job where jobID='".$id."'");
								while ($row = $sql1->fetch_assoc()){
								$job=$row['job'];
								}
								return $job;

					}
				

?>