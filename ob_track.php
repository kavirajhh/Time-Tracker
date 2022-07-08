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
					$t=$_SESSION["t"];
					$nic=$_SESSION["nic"];
					$sdate=date("Y/m/d");
					
					
					$sql1="select bid from ob_log where time in ( SELECT max( time ) FROM ob_log WHERE nic='".$nic."' and date='".$sdate."')";
					$result = $conn->query($sql1);
					
					while ($row = $result->fetch_assoc())
								{
									$bid=$row['bid'];
								}
					
					
					
	?>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script>
function getActivity() {
        var str='';
        var val=document.getElementById('country-list');
        for (i=0;i< val.length;i++) { 
            if(val[i].selected){
                str += val[i].value + ','; 
            }
        }         
        var str=str.slice(0,str.length -1);
        
	$.ajax({          
        	type: "GET",
        	url: "get_act.php",
        	data:'country_id='+str,
        	success: function(data){
        		$("#state-list").html(data);
        	}
	});
}
</script>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					
					<div align="center">
					  <p class="login100-form-title-1 style3">IDO - Observer <br> Start Activity </p>
					  </div>
				</div>

				<form class="login100-form validate-form" action=ob_trackup.php method="post">
					
								
						<div class="wrap-input100 validate-input m-b-26" data-validate="Banker  is required">
						<span class="label-input100">Select Banker  </span><br>
						
						
						<select class="input100" name="uid" required>
						<option value=""  selected="selected">Select Banker</option>
							<?php 
								$sql = mysqli_query($conn, "SELECT * FROM user where BID='".$bid."' and NIC not in ( select banker_nic from ob_track where reason_id=0 and date='".$sdate."') order by fname");
								// test for remove start userts 
								while ($row = $sql->fetch_assoc()){
								$unic=$row['NIC']; 
								$uname=$row['fname'];
								echo "<option value=".$unic.">".$uname."</option>";
								}
							?>
							</select>
						
						<span class="focus-input100"></span>
						</div>
						
						
						<br>		
						<div class="wrap-input100 validate-input m-b-26" data-validate="Activity is required">
						<span class="label-input100"> Product Family  </span><br>
								
						
					<select class="input100" name="family" id="country-list"  onChange="getActivity();" required >
            		<option value="">Select Product Family</option>
							<?php 
								$sql = mysqli_query($conn, "SELECT * FROM pro_family order by f_id");
								while ($row = $sql->fetch_assoc()){
								$id=$row['f_id'];
								$name=$row['f_name'];
								echo "<option value=".$id.">".$id.' '.$name."</option>";
								}
							?>
							</select>
							<br>
				<span class="focus-input100"></span>
				</div>		
				
						<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100"> Doc No </span>
					
						<input type=text name=n2 placeholder="Document Number" class="input100">
						<span class="focus-input100"></span>
						</div>
				
					
					
					
						
						
				<br>		
				<div class="wrap-input100 validate-input m-b-26" data-validate="Activity is required">
				<span class="label-input100">Job Activity  </span><br>
						
					
						<select  class="input100" name="jobid"  id="state-list"  required>
            				<option value="">Select Activity</option>
        				</select>
					<span class="focus-input100"></span>
					</div>
					
					
				<br>	
				
						<div class="wrap-input100 validate-input m-b-26" >
						<input type="text" name="remark" placeholder="Remark" class="input100">
						<span class="focus-input100"></span>
						</div>
						
					
					<div class="container-login100-form-btn">
						<center><br><button class="login100-form-btn">START	</button></center>
					</div>
				</form>
								
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=obindex.php>Observer Dashboard</a></h1></center></div>
				</div>
				
				<div class="wrap-input100 validate-input m-b-26">
						<div class="input100"><center><h1><a href=oblogoff.php target=_self>Sign Out</a></h1></center></div>
				</div>
				
			</div>
		</div>
	</div>
	


</body>
</html>