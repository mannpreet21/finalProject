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

        1. what does html stands for? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[1]" value="1">
            hyper text markup language               
            <br>
            <input type="radio" name="quizcheck[1]" value="2">
            Hyperlinks and text markup language
            <br>
            <input type="radio" name="quizcheck[1]" value="3">
            Home tool markup language                
            <br>
            <input type="radio" name="quizcheck[1]" value="4">
            none                 
            <br><br>
            </div>
        2. HTML is what type of language? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[2]" value="5">
            Markup Language                  
            <br>
            <input type="radio" name="quizcheck[2]" value="6">
            Scripting Language              
            <br>
            <input type="radio" name="quizcheck[2]" value="7">
            Programming Language                
            <br>
            <input type="radio" name="quizcheck[2]" value="8">
            Network Protocol               
            <br><br>
            </div>
        3. Fundamental HTML Block is known as _____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[3]" value="9">
            HTML Tag                
            <br>
            <input type="radio" name="quizcheck[3]" value="10">
            HTML Body                
            <br>
            <input type="radio" name="quizcheck[3]" value="11">
            HTML Attribute               
            <br>
            <input type="radio" name="quizcheck[3]" value="12">
            HTML Element                 
            <br><br>
            </div>
        4. HTML uses <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[4]" value="13">
            Fixed tags defined by the language               
            <br>
            <input type="radio" name="quizcheck[4]" value="14">
            User defined tags                
            <br>
            <input type="radio" name="quizcheck[4]" value="15">
            Pre-specified tags               
            <br>
            <input type="radio" name="quizcheck[4]" value="16">
            tags only for linking                
            <br><br>
            </div>
        5. The year in which HTML was first proposed_____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[5]" value="17">
            1990                
            <br>
            <input type="radio" name="quizcheck[5]" value="18">
            1980                 
            <br>
            <input type="radio" name="quizcheck[5]" value="19">
            2000                 
            <br>
            <input type="radio" name="quizcheck[5]" value="20">
            1995                
            <br><br>
            </div>
        6. How can you make a bulleted list with numbers? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[6]" value="21">
            OL              
            <br>
            <input type="radio" name="quizcheck[6]" value="22">
            dl              
            <br>
            <input type="radio" name="quizcheck[6]" value="23">
            list                
            <br>
            <input type="radio" name="quizcheck[6]" value="24">
            ul             
            <br><br>
            </div>
        7. What tag is used to display a picture in HTML? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[7]" value="25">
            img
            <br>
            <input type="radio" name="quizcheck[7]" value="26">
            picture                 
            <br>
            <input type="radio" name="quizcheck[7]" value="27">
            image                
            <br>
            <input type="radio" name="quizcheck[7]" value="28">
            src                 
            <br><br>
            </div>
        8. What should be first tag in HTML document? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[8]" value="29">
            html                
            <br>
            <input type="radio" name="quizcheck[8]" value="30">
            head                
            <br>
            <input type="radio" name="quizcheck[8]" value="31">
            title                
            <br>
            <input type="radio" name="quizcheck[8]" value="32">
            document                 
            <br><br>
            </div>
        9. HTML web pages can be read and rendered by____.  <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[9]" value="33">
            Web Browser                  
            <br>
            <input type="radio" name="quizcheck[9]" value="34">
            Compiler                
            <br>
            <input type="radio" name="quizcheck[9]" value="35">
            Server                  
            <br>
            <input type="radio" name="quizcheck[9]" value="36">
            Interpreter                  
            <br><br>
            </div>
        10. HTML tags are surrounded by which type of brackets? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[10]" value="37">
            Angle               
            <br>
            <input type="radio" name="quizcheck[10]" value="38">
            Curly               
            <br>
            <input type="radio" name="quizcheck[10]" value="39">
            Round               
            <br>
            <input type="radio" name="quizcheck[10]" value="40">
            Squart               
            </div>
        
        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>