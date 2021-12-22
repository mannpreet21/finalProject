<?php
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="quizdatabase";
$con=mysqli_connect($host,$user,$password,$dbname);

mysqli_select_db($con,'quizdatbase');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QUIZ!</title>
	<meta name="viewport" content="width-device-width,initial-scale=1,shrink-to-fit">
	<link rel="stylesheet" href="css/bootstrap.css">
	
</head>
			
<body style="background-color:#deeff5;">
	<style>
		#title
		{
			color: red;
			background: lightblue;
			padding: 4px;
		}
		.edit
	{
		margin-top: 30px;
		font-size: 18px;
		background-color: lightblue;
		padding: 2px;
	}
	.edit1
    {
        justify-content:center;
        padding-left:100px;
        font-size:20px;
        font-weight:bold;
        color:black;
        
            
    }
    .edit2{
        color:#000080;
    }
	</style>
	<div class="container">
		<div class="row">
			<div class="col-12" id="title">
           <center><h1>WELCOME TO QUIZ!</h1></center>
            	
        </div>
    </div>
</div>
<div class="container">

            <div class="row">
            	<div class="col-12">
            			<center>
            			<h2 class="edit">*welcome,you have to choose only 1 out of 4*</h2></center>
            </div>

            </div>
        </div><br>
        <div class="container-fluid" style="background-color:#f0f8ff; width:1050px; border:1 px solid #000080; margin:0 auto; justify-content:center">
        <div class="row">
        <form action="final.php" method="post">
        <div class="edit1">
              <div class="container-fluid" style="background-color:#f0f8ff; width:1050px; border:1 px solid #000080; margin:0 auto; justify-content:center">
        <div class="row">
        <form action="final.php" method="post">
        <div class="edit1">

        1. What does PHP stand for? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[1]" value="1">
            Personal web page                
            <br>
            <input type="radio" name="quizcheck[1]" value="2">
            Hypertext Preprocessor               
            <br>
            <input type="radio" name="quizcheck[1]" value="3">
            Pretext Hypertext processor                  
            <br>
            <input type="radio" name="quizcheck[1]" value="4">
            Preprocessor Home Page               
            <br><br>
            </div>
        2. PHP files have a default file extension of_______. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[2]" value="5">
            .html                
            <br>
            <input type="radio" name="quizcheck[2]" value="6">
            .xml                 
            <br>
            <input type="radio" name="quizcheck[2]" value="7">
            .php                
            <br>
            <input type="radio" name="quizcheck[2]" value="8">
            .ph                  
            <br><br>
            </div>
        3. Type hinting was introduced in which version of PHP? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[3]" value="9">
            PHP 4               
            <br>
            <input type="radio" name="quizcheck[3]" value="10">
            PHP 5                
            <br>
            <input type="radio" name="quizcheck[3]" value="11">
            PHP 5.3                  
            <br>
            <input type="radio" name="quizcheck[3]" value="12">
            PHP 6                
            <br><br>
            </div>
        4. A Function in PHP starts with __(double underscore) is known as____________. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[4]" value="13">
            Magic function               
            <br>
            <input type="radio" name="quizcheck[4]" value="14">
            Inbuilt function                 
            <br>
            <input type="radio" name="quizcheck[4]" value="15">
            Default function                 
            <br>
            <input type="radio" name="quizcheck[4]" value="16">
            User defined function                
            <br><br>
            </div>
        5. Which of the following functions can be used for generating uunique ids? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[5]" value="17">
            uniqueid()               
            <br>
            <input type="radio" name="quizcheck[5]" value="18">
            id()                 
            <br>
            <input type="radio" name="quizcheck[5]" value="19">
            md5()                
            <br>
            <input type="radio" name="quizcheck[5]" value="20">
            mdid()               
            <br><br>
            </div>
        6. Which one of the following functions can be used to compress a string? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[6]" value="21">
            zip_compress()               
            <br>
            <input type="radio" name="quizcheck[6]" value="22">
            zip()               
            <br>
            <input type="radio" name="quizcheck[6]" value="23">
            compresss()                  
            <br>
            <input type="radio" name="quizcheck[6]" value="24">
            gzcompress()                
            <br><br>
            </div>
        7. PHP's numerically indexed array begin with position _____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[7]" value="25">
            1                
            <br>
            <input type="radio" name="quizcheck[7]" value="26">
            2                
            <br>
            <input type="radio" name="quizcheck[7]" value="27">
            0                
            <br>
            <input type="radio" name="quizcheck[7]" value="28">
            3                
            <br><br>
            </div>
        8. Which in-built function will add a value to end of an array? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[8]" value="29">
            array_unshift()                 
            <br>
            <input type="radio" name="quizcheck[8]" value="30">
            into_array()                 
            <br>
            <input type="radio" name="quizcheck[8]" value="31">
            inend_array()                
            <br>
            <input type="radio" name="quizcheck[8]" value="32">
            array_push()                 
            <br><br>
            </div>
        9. Which of the following function is used to get the value of the previous element in an array? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[9]" value="33">
            last()               
            <br>
            <input type="radio" name="quizcheck[9]" value="34">
            before()                 
            <br>
            <input type="radio" name="quizcheck[9]" value="35">
            prev()               
            <br>
            <input type="radio" name="quizcheck[9]" value="36">
            previous()               
            <br><br>
            </div>
        10. Which function returns an array consisting of associative key/value pairs? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[10]" value="37">
            count()                  
            <br>
            <input type="radio" name="quizcheck[10]" value="38">
            array_count()                
            <br>
            <input type="radio" name="quizcheck[10]" value="39">
            array_count_values()                 
            <br>
            <input type="radio" name="quizcheck[10]" value="40">
            count_values()               
            <br><br>
            </div>
        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>