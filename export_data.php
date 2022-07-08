
<?php

include "dbconnection.php";
//$fileName = "codexworld_export_data-" . date('Ymd') . ".xlsx"; 
header("Content-Disposition: attachment; filename=a.csv"); 
$sql="SELECT * FROM user ";
					$result = $conn->query($sql);
					
					while($row = mysqli_fetch_assoc($result)) {
								$id=$row["NIC"];
								$fname=$row["fname"];
								$lname=$row["lname"];
								echo "$id,$fname,$lname\n";
								}



 exit;
				

									


?>