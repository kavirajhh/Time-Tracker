<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Activity</title>
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
	 <?php include "dbconnection.php"; ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					
					<div align="center">
					  <p class="login100-form-title-1 style3">Remove Activity From Product Family</p>
					  </div>
				</div>
					 
					
				
				<?php 
					
					session_start();
					
					$family=$_REQUEST['family'];	
					$_SESSION["family"]=$family;
					
					
					function family($conn,$family){// get task name by task id
					
					$sql1 = mysqli_query($conn, "SELECT * FROM pro_family where f_id='".$family."'");
								while ($row = $sql1->fetch_assoc()){
								$family=$row['f_name'];
								}
								return $family;

					}
					
					$f_name=family($conn,$family);
					
					$sql="SELECT * FROM activity where id  in (select act_id from act_family where fam_id='".$family."')";
					$result = $conn->query($sql);
					
					
					if ($result->num_rows > 0) 
						
						echo "<table border=1 width=100%>";
						echo "<tr><TH colspan=3>Add activity to $f_name</TH></tr>";
						echo "<tr><TH>#</TH><TH>Activity Name</TH><th></TH></tr>";
						$i=1;
						{	while($row = mysqli_fetch_assoc($result)) {
								$id=$row["id"];
								$activity=$row["a_name"];
								
								
							
								echo "<tr><td>$i</td><td>$activity</td><td bgcolor=#039BE6 align='center'><a href=act_fam_remove.php?a_id=$id>Remove</td></a></tr>";
									
								$i=$i+1;
									
						}
						echo "</table>";
						}
						
						
						
				?>
				<div class="wrap-input100 validate-input m-b-26">
			<div ><?php echo "<br><a href=obindex.php target=_self><P align=center >Home</h1></a>"; ?></div>
			<div ><?php echo "<br><a href=act_fam_view.php?family=$family target=_self><P align=center >Add Activity</h1></a>"; ?></div>
			
						<div class="input100"><center><h1><a href=obindex.php>Observer Dashboard</a></h1></center></div>
				</div>			
		</div>	
		
	</div>
</div>
</body>
</html>
