<?php
header('Content-type: application/json');
include_once("./accessdb.php");

$json = file_get_contents('php://input');
var_dump($json);
$obj = json_decode($json);

$playerName = mysqli_real_escape_string($link, $obj->playerName);
$totalTime = mysqli_real_escape_string($link, $obj->totalTime);
$date = mysqli_real_escape_string($link, $obj->date);

$query = "INSERT INTO Result (PlayerName, TotalTime, AttemptDate) VALUES ('{$playerName}', '{$totalTime}', '{$date}')";

if (!mysqli_query($link, $query)) {
	die("Error: " . mysqli_error($link));
}
else {
	echo "{'send' : 'success'}";
}