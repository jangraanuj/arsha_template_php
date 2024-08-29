<?php

	$conn = mysqli_connect("localhost","root","","database") or die("Connection failed");

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM countries";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
		}
	}else if($_POST['type'] == "stateData"){

		$sql = "SELECT * FROM states WHERE country_id = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['id']}'>{$row['state']}</option>";
		}
	}

	echo $str;






if($_POST['type'] == ""){
	$sql = "SELECT * FROM states";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	$str = "";
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['id']}'>{$row['state']}</option>";
	}
}else if($_POST['type'] == "cityData"){

	$sql = "SELECT * FROM cities WHERE state_id = {$_POST['id']}";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	$str = "";
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['city']}'>{$row['city']}</option>";
	}
}

echo $str;
?>
