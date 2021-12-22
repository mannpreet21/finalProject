<html>
<head></head>
<body>
<table border="5">
<tr>
<th>lesson_id</th>
<th>lesson_name</th>
<th>description</th>
<th>embed_source</th>
<th>upload_lesson</th>
<th>course_id</th>
</tr>

<?php 
include 'config.php';
	$selectlessons = "select * from lessons";
	$all_lessons = mysqli_query($con , $selectlessons);
	while ($all = mysqli_fetch_array($all_lessons))
	 {
		echo "<tr>
		<th> $all[0] </th>
		<th> $all[1] </th>
		<th> $all[2] </th>
		<th> $all[3] </th>
		<th> $all[4] </th>
		<th> $all[5] </th>
				</tr>";

	}
 ?>
</table>
</body>
</html>
