<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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

	<?php
			include "dbconnection.php";
			session_start();
			date_default_timezone_set("Asia/Colombo");	
					$t=0;
					$_SESSION["t"] = $t;				
					$nic=$_REQUEST["nic"];
					
					$jsdate=date("Y/m/d");
					$jstime=date("H:i:s");
					
					$f_id=$_POST['family'];
					$jobid=$_POST["activity"];
					$remark=$_POST["remark"];
					//$n1=$_POST["n1"];
					$n2=strtoupper($_POST["n2"]);
					$n=$f_id.'/'.$n2;
					//////////
					$sql1="update task set JEDATE='".$jsdate."' ,JETIME='".$jstime."', RID=1 where NIC='".$nic."' and RID=0 ";
					$rs = $conn->query($sql1);
					///////////////
					$sql="insert into task values('','".$n."','".$nic."','".$f_id."','".$jobid."','".$remark."','".$jsdate."','".$jstime."','','','')";
					$rs = $conn->query($sql);
					
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<div align="center">
					  <p class="login100-form-title-1 style3">complete task </p>
					  </div>
				</div>
				<div>
				
				
			
				<form class="login100-form validate-form" action=start.php method="post">
					
					<div class="container-login100-form-btn">
						<center><br>
					<p class="login100-form-btn" color="white"><?php echo "<a href=start.php?RID=1&nic=".$nic.">Complete</a>"?></p>
					
								
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						
						<p> Select Reason</p>
						<div class="class=input100">
						
						<select class="input100" name="RID" required>
						
							<?php 
								$sql1 = mysqli_query($conn, "SELECT * FROM reason order by RID DESC");
								while ($row = $sql1->fetch_assoc()){
								$rid=$row['RID'];
								$reason=$row['REASON'];
								echo "<option value=".$rid.">".$reason."</option>";
								}
							?>
							</select>
							</div>
							<input type="hidden" name="nic" value=<?php echo $nic ?> >
							
						<span class="focus-input100"></span>
				  	</div>
					
					<div class="container-login100-form-btn">
						<center><br>
						<button class="login100-form-btn" >
							Half Drop
						</button>
						</center>
					</div>
					
				</form>
				<div >
				<?php echo "<br><a href=logoff.php target=_self><P align=center >Sign Out</h1></a>"; 
				
				
				
				?>
				</div>
			</div>
		</div>
	</div>
	


</body>
</html>