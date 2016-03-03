<?php
	header('Content-type: application/json');
	include_once("./accessdb.php");
	$query = "SELECT * FROM Location";
	$result = mysqli_query($link, $query);

	$obj = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$loc = array('title'=>$row['Title'], 'description'=>$row['Description'], 'latitude'=>$row['Latitude'], 'longitude'=>$row['Longitude']);
		array_push($obj, $loc);
	}
	echo json_encode($obj);
?>