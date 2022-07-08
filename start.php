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
					//$counter=$_SESSION["counter"];
					//$nic=$_SESSION["nic"];
					$nic=$_REQUEST["nic"];
					
					if($t<1){				
					//$nic=$_SESSION["nic"];
					$rid=$_REQUEST["RID"];
					$jsdate=date("Y/m/d");
					$jstime=date("H:i:s");
					$sql1="select * from task where nic='".$nic."'";
					$result = $conn->query($sql1);
					
					while ($row = $result->fetch_assoc())
								{
									$tid=$row['TID'];
								}
					$sql="update task set jedate='".$jsdate."' ,jetime='".$jstime."',rid='".$rid."' where tid='".$tid."' ";
					$rs = $conn->query($sql);
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
					    <p class="login100-form-title-1 style3">Start task </p>
					</div>
				</div>

				
				<form class="login100-form validate-form" action=comp.php method="post">
					
					<div class="wrap-input100 validate-input m-b-26" >
					<span class="label-input100">Product Family </span><br>
					
					<select class="input100" name="family" id="country-list"  onChange="getActivity();" >
            		<option value="">Select Product Family</option>
							<?php 
								$sql = mysqli_query($conn, "SELECT * FROM pro_family order by f_id");
								while ($row = $sql->fetch_assoc()){
								$id=$row['f_id'];
								$name=$row['f_name'];
								echo "<option value=".$id.">".$id.' - '.$name."</option>";
								}
							?>
							</select>
					
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
					<span class="label-input100"> Doc No </span>
					
					<input type=text name=n2 placeholder="Document Number" class="input100">
					<span class="focus-input100"></span>
					</div>
				
					
					<div class="wrap-input100 validate-input m-b-26" >
					<span class="label-input100">Job Activity </span><br>
					
						<select  class="input100" name="activity"  id="state-list"  >
            				<option value="">Select Job Activity</option>
        				</select>
					<span class="focus-input100"></span><br>
				  	</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<input type="text" name="remark" placeholder="Remark" class="input100">
					<span class="focus-input100"></span>
					</div>
					
					<input type="hidden" name="nic" value=<?php echo $nic ?> >
					
					<div class="container-login100-form-btn">
						<center><br><button class="login100-form-btn">START	</button></center>
					</div>
				</form>
				<div ><a href=logoff.php target=_self><P align=center >Sign Out</h1></a></div>
			</div>
			
		</div>
	</div>
	


</body>
</html>