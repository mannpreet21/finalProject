<html>
<head></head>
<body>
<table border="5">
<tr>
<th>course_id</th>
<th>course_name</th>
<th>description</th>
<th>catagory</th>
<th>embeded_source</th>
<th>author_name</th>

</tr>

<?php 
include 'config.php';
	$selectcourse = "select * from courses";
	$all_course = mysqli_query($con , $selectcourse);
	while ($all = mysqli_fetch_array($all_course))
	 {
		echo "<tr>
		<th> $all[0] </th>
		<th> $all[1] </th>
		<th> $all[2] </th>
		<th> $all[3] </th>
		<th> $all[4] </th>
		<th> $all[5] </th>
		<th> <a href=add_new_lesson.php?courseid=$all[0]>Add new Course</th>
		<th> <a href=delete_course.php?courseid=$all[0]>Delete Course</th>
				</tr>";

	}
 ?>
 
</table>
</body>
</html>
