<?php //include'header.php'; ?>

<html>
<head>
	<style>
		html{
			background-color: #63a6b8;
		}
		*{
			margin:0;
			padding: 0;
			font-family: century Gothic;

		}
		.logo img
		{
			float: left;
			width: 150px;
		}
		.btn
		{
			margin-top: 50px;
			text-decoration: none;
			color: #da7800;
			padding: 5px 20px;
			font-style: italic;
			font-weight: bold;
			width: 200px;
			
		border:1px solid #fff;
		transition: 0.6s ease;
		position: relative;

		}
		.btn-primary1,.btn-primary2,.btn-primary3,.btn-primary4
		{
			border-color: orange;
			margin-top:20px; 
		}
		.btn-primary1:hover
		{
			background color: #fff;
			color:#144d87;
		
		}
		.btn-primary2:hover
		{
			background color: #fff;
			color:#144d87;
		
		}
		.btn-primary3:hover
		{
			background color: #fff;
			color:#144d87;
		
		}
		.btn-primary4:hover
		{
			background color: #fff;
			color:#144d87;
		
		}
		.btn::before
		{
			content:"";
			position: relative;
			left: 0;
			width:100%;
			height: 0%;
			background:#144d87;
			z-index: -1;
			transition: 0.8s; 
		}
		.btn-primary1::before
		{
			top:0;
			border-radius: 0 0 50% 50%;
		}
		.btn-primary2::before
		{
			bottom: :0;
			border-radius: 50% 50% 0 0;
		}

.btn-primary3::before
		{
			top:0;
			border-radius: 0 0 50% 50%;
		}

.btn-primary4::before
		{
			bottom:0;
			border-radius: 50% 50% 0 0;
		}
.btn-primary1:hover::before
{
	height: 180%;
}
.btn-primary2:hover::before
{
	height: 0%;
}
.btn-primary3:hover::before
{
	height: 180%;
}
.btn-primary4:hover::before
{
	height: 0%;
}



	</style>
</head>
<body>

	<center>		<h1 style="background-color:#144d87; color:white; padding-top:40px; padding-bottom:30px; margin-top:-20px">WELCOME ADMIN </h1></center>

	<div style="">
	<form action="" method="post">
	<center>		
		
		<br><a href="teachers.php">      <input type="button" value="TEACHERS " class="btn btn-primary1"></a><br>
		<br><a href="all_courses.php">   <input type="button" value="ALL COURSE" class="btn btn-primary2"></a><br>
		<!-- <br><a href="all_lessons.php"><input type="button" value="all lessons" class="btn btn-primary"></a><br> -->
		<br><a href="new_teacher.php">   <input type="button" value="NEW TEACHER" class="btn btn-primary3"></a><br>		
		<br><a href="insert_courses.php"><input type="button" value="INSERT COURSE" class="btn btn-primary4"></a><br><br>

	</center>
	</form>
	</div>
	
</body>
	</html>

<?php //include'footer.php'; ?>

