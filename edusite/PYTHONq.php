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

        1.What is maximum possible length of an identifier? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[1]" value="1">
            31 characters               
            <br>
            <input type="radio" name="quizcheck[1]" value="2">
            63 characters               
            <br>
            <input type="radio" name="quizcheck[1]" value="3">
            79 characters                
            <br>
            <input type="radio" name="quizcheck[1]" value="4">
            none of above                
            <br><br>
            </div>
        2. Is python case sensitive when dealing with identifiers? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[2]" value="5">
            yes                  
            <br>
            <input type="radio" name="quizcheck[2]" value="6">
            no              
            <br>
            <input type="radio" name="quizcheck[2]" value="7">
            machine dependent                
            <br>
            <input type="radio" name="quizcheck[2]" value="8">
            none of the above                
            <br><br>
            </div>
        3. Which of the following is not a keyword? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[3]" value="9">
            eval                 
            <br>
            <input type="radio" name="quizcheck[3]" value="10">
            assert               
            <br>
            <input type="radio" name="quizcheck[3]" value="11">
            nonlocal                 
            <br>
            <input type="radio" name="quizcheck[3]" value="12">
            pass                 
            <br><br>
            </div>
        4. All keywords in Python are in _____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[4]" value="13">
            lower case               
            <br>
            <input type="radio" name="quizcheck[4]" value="14">
            upper case               
            <br>
            <input type="radio" name="quizcheck[4]" value="15">
            capitalized                  
            <br>
            <input type="radio" name="quizcheck[4]" value="16">
            none of above                
            <br><br>
            </div>
        5. Which of the following is an invalid statement? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[5]" value="17">
            abc=1,000,000                
            <br>
            <input type="radio" name="quizcheck[5]" value="18">
            a b c=1000 2000 3000                 
            <br>
            <input type="radio" name="quizcheck[5]" value="19">
            a,b,c=1000,2000,3000                 
            <br>
            <input type="radio" name="quizcheck[5]" value="20">
            a_b_c=1,000,000                  
            <br><br>
            </div>
        6. Which of the following cannot be a variable? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[6]" value="21">
            _init_               
            <br>
            <input type="radio" name="quizcheck[6]" value="22">
            in               
            <br>
            <input type="radio" name="quizcheck[6]" value="23">
            it               
            <br>
            <input type="radio" name="quizcheck[6]" value="24">
            on               
            <br><br>
            </div>
        7. Which one of these is floor divison? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[7]" value="25">
            /                
            <br>
            <input type="radio" name="quizcheck[7]" value="26">
            //               
            <br>
            <input type="radio" name="quizcheck[7]" value="27">
            %                
            <br>
            <input type="radio" name="quizcheck[7]" value="28">
            none of above               
            <br><br>
            </div>
        8. Operators with the same precedence are evaluated in which manner? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[8]" value="29">
            Left to Right                
            <br>
            <input type="radio" name="quizcheck[8]" value="30">
            Right to Left                
            <br>
            <input type="radio" name="quizcheck[8]" value="31">
            can't say               
            <br>
            <input type="radio" name="quizcheck[8]" value="32">
            none of above                
            <br><br>
            </div>
        9. What is the output of this expression, 3*1**3? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[9]" value="33">
            27               
            <br>
            <input type="radio" name="quizcheck[9]" value="34">
            9                
            <br>
            <input type="radio" name="quizcheck[9]" value="35">
            3               
            <br>
            <input type="radio" name="quizcheck[9]" value="36">
            1                
            <br><br>
            </div>
        10. Which one of the following has the highest precedence in the expression? </h4></center>
            <div class="edit2">
            <input type="radio" name="quizcheck[10]" value="37">
            Exponential                  
            <br>
            <input type="radio" name="quizcheck[10]" value="38">
            Addition                 
            <br>
            <input type="radio" name="quizcheck[10]" value="39">
            Multiplication               
            <br>
            <input type="radio" name="quizcheck[10]" value="40">
            Parentheses                  
            <br><br>
</div>
        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>