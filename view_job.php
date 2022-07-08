<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registerd Institutes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="st.css">
<!--===============================================================================================-->
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
</head>
<body>
	<div class="login">
  		<div class="login-triangle"></div>
  
			  <h2 class="login-header">Registerd Institutes</h2>
				<div class="login-container">
					 
					
				
				<?php 
					include "dbconnection.php";
					
					
					$sql="SELECT * FROM branch order by BNAME";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						echo "<p><h3>Click on name to change data</h3></p>"; 
						echo "<table border=1 width=100%>";
						echo "<tr><TH></TH><TH>ID</TH><TH>Office Name</TH></tr>";
						$i=1;
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["BID"];
								$name=$row["BNAME"];
								
								
								echo "<tr><td>$i</td><td>$id</td><td><a href=del_branch.php?bid=$id>$name</a></tr>";
									
								$i=$i+1;
									
						}
						echo "</table>";
						}
					
						
				?>
				
		</div>		
	</div>
</div>
</body>
</html>
