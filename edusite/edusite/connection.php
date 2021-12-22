<?php
$host="localhost";
$user="root";
$password="";
$dbname="leeve_mgmt";

$conn = mysqli_connect($host, $user, $password, $dbname);
if($conn)
{
	echo"connected";
}
else
{
	die(mysqli_connect_error());
}
?>