<?php 
	

	
function view_id($sql,$name){
		$servername = "localhost";
		$username = "root";
		 //$username = "root";
		$password = "";
		//$password = "";
		$dbname = "ttrack";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
   				 die("Connection failed: " . $conn->connect_error);
								}
		else{
		
		$rs=$conn->query($sql);
		
		echo "<select name=".$name.">";
		while($row=mysql_fetch_assoc($rs)){
			
			
			foreach($row as $value){
			
			//$bid=$row['BID'];
			//$branch=$row['BNAME'];
			echo " <option value=".$value.">".$value."</option> ";
							
			}
		}
	}echo "</select>";
	
	}
	

?>