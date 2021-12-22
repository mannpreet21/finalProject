<?php 
 
$host="localhost";
$uname="root";
$upassword="";
$dbname="sharey";
$con=mysqli_connect($host,$uname,$upassword,$dbname);
if ($con)
	{
		// echo "Db connection successfull";
	}
else
die(mysqli_connect_error());
 ?>

 