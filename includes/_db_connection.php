<?php 

$serverName = "localhost";
$dBName = "jobPortal";
$dBUsername = "root";
$dBPassword = "test123";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
	die("Conection Failed: ".mysql_connect_error());
}