<?php
include "dbconnection.php";

if(!empty($_GET['country_id'])) {
     $coun_id = $_GET["country_id"];           
	//$query ="SELECT * FROM states WHERE countryID IN ($coun_id)";
	
	
	$sql = mysqli_query($conn, "SELECT * FROM activity where id  in (select act_id from act_family where fam_id='".$coun_id."')");
	while ($row = $sql->fetch_assoc()){						
		$id=$row['id'];
		$name=$row['a_name'];
		echo "<option value=$id>$name</option>";
	}
	}
?>

	