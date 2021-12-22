<html>
	<head>	</head>
<body>
	<form action="" method="POST">
		<input type="text" name="name"><br>
		<input type="text" name="description"><br>
		<input type="text" name="embed_source"><br>
		<input type="text" name="upload"><br>

		<input type="submit" name="submit">
	</form>

<?php 
include'config.php';
if (isset($_POST['submit']))
 {
	echo $name=$_POST['name'];
	echo $description=$_POST['description'];
	echo $embed_source=$_POST['embed_source'];
	echo $upload=$_POST['upload'];

echo $courseid = $_GET['courseid'];
$insert = "insert into lessons values('','$name','$description','$embed_source','$upload','$courseid')";	
	mysqli_query($con, $insert);	
		echo "values inserted";
 }
 ?>


</body>
</html>