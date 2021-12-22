<?php 
 
$host="localhost";
$uname="root";
$upassword="";
$dbname="sharey";
$con=mysqli_connect($host, $uname, $upassword, $dbname);
if ($con)
	{
		//echo "CONNECTION SUCCESSFUL";
	}
else
die(mysqli_connect_error());
 ?>
 