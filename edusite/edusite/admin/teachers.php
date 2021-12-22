<html>
<head></head>
<body>
	<style>
		html
		{
			background-color: #f2eeee;
		}
		
     table{
     	margin-top: 70px;
     	display: table;
     	border-collapse: separate;
     	border-spacing: 2px;
     	border-color: gray;

     }

	</style>
<center><table border="7" cellpadding="10" cellspacing="10">
<tr>
<th>course_id</th>
<th>course_name</th>
<th>password</th>
<th>catagory</th>
<th>discription</th>
<th>delete teacher</th>

</tr>
</center>

<?php 
include 'config.php';
	$selectcourse = "select * from admin";
	$all_course = mysqli_query($con , $selectcourse);
	while ($all = mysqli_fetch_array($all_course))
	 {
		echo "<tr>
		<th> $all[0] </th>
		<th> $all[1] </th>
		<th> $all[2] </th>
		<th> $all[3] </th>
		<th> $all[4] </th>
		
		
		<th> <a href=delete_teacher.php?id=$all[0]>Delete teacher</th>		
				</tr>";

	}
 ?>
 
</table>
</body>
</html>

