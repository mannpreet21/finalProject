
<html>
<head></head>
<body>
<table border="5">
<tr>
<th>Id</th>
<th>Lesson_Name</th>
<!-- <th>Description</th>
<th>Embed-Source</th>
<th>Upload</th> -->
<th>Course_id</th>
</tr>

<?php 
include 'config.php';
if (isset($_GET['lessonid']))
 {	
 	$id= $_GET['lessonid'];
 	$select = "select * from lessons where course_id ='$id'";
	$all_lesson = mysqli_query($con , $select);
	while ($all = mysqli_fetch_array($all_lesson))
	 {
		echo "<tr>
		
		<th> $all[1] </th>
		<th> $all[4] </th>
		
		</tr>";

	}
}
 ?>
 
</table>
</body>
</html>
