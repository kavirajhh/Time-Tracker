<!DOCTYPE html>
<html lang="en">
<head>
	<title>Activity List</title>
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
					  <p class="login100-form-title-1 style3">IDO - Activities</p>
					  </div>
				</div>
					 
					
				
				<?php 
					include "dbconnection.php";
					
					
					$sql="SELECT * FROM activity  order by a_name";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						
						echo "<table border=1 width=100%>";
						echo "<tr><TH>#</TH><TH>Activity Name</TH><th></TH></tr>";
						$i=1;
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["id"];
								$activity=$row["a_name"];
								//$des=$row["job_des"];
								
							
								echo "<tr><td>$i</td><td>$activity</td><td bgcolor=#039BE6 align='center'><a href=del_activity.php?jid=$id>Delete</td></a></tr>";
									
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
