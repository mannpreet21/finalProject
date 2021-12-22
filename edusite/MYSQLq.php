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

        1. Character data can be stored as______.<br>

<br>
                <div class="edit2">             
                <input type="radio" name="quizcheck[1]" value="1">
                Fixed length string                  
                <br>                                             
                <input type="radio" name="quizcheck[1]" value="2">
                Variable length string               
                <br>
                <input type="radio" name="quizcheck[1]" value="3">
                Either Fixed or Variable length string               
                <br>
                <input type="radio" name="quizcheck[1]" value="4">
                None of the above                
                <br><br>
                </div>
             

            
        2. The maximum length of varchar columns is_______. <br>
        <br>
                <div class="edit2">
                <input type="radio" name="quizcheck[2]" value="5">
                Upto 65,535 bytes                
                <br>
                <input type="radio" name="quizcheck[2]" value="6">
                Upto 256 bytes 
                <br>
                <input type="radio" name="quizcheck[2]" value="7">
                Upto 65,567 bytes                
                <br>
                <input type="radio" name="quizcheck[2]" value="8">
                None of the mentioned                
                <br><br>
                </div>
        3.  In oracle database variable length column is declared by___________. <br>
        <br>       
                <div class="edit2">                    
                <input type="radio" name="quizcheck[3]" value="9">
                Varchar                  
                <br>
                <input type="radio" name="quizcheck[3]" value="10">
                Varchar 3                
                <br>
                <input type="radio" name="quizcheck[3]" value="11">
                Varchar 2                
                <br>
                <input type="radio" name="quizcheck[3]" value="12">
                none of mentioned                
                <br><br>
                </div>
        4. Which text types has the maximum numberof bytes? <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[4]" value="13">
                Tiny text                
                <br>
                <input type="radio" name="quizcheck[4]" value="14">
                Text                 
                <br>
                <input type="radio" name="quizcheck[4]" value="15">
                Medium text                  
                <br>
                <input type="radio" name="quizcheck[4]" value="16">
                Long text               
                <br><br>
                </div>
        5. Which among the following have the maximum bytes? <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[5]" value="17">
                Varchar                  
                <br>
                <input type="radio" name="quizcheck[5]" value="18">
                Char                 
                <br>
                <input type="radio" name="quizcheck[5]" value="19">
                Text type                
                <br>
                <input type="radio" name="quizcheck[5]" value="20">
                Both Varchar and Char                
                <br><br>
                </div>
        6. Which type of database management system is MYSQL? <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[6]" value="21">
                Object-oriented                  
                <br>
                <input type="radio" name="quizcheck[6]" value="22">
                Hierarchical                 
                <br>
                <input type="radio" name="quizcheck[6]" value="23">
                Relational               
                <br>
                <input type="radio" name="quizcheck[6]" value="24">
                Network                  
                <br><br>
                </div>
        7. What is data in a MYSQL database organised into?<br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[7]" value="25">
                Objects                 
                <br>
                <input type="radio" name="quizcheck[7]" value="26">
                Tables               
                <br>
                <input type="radio" name="quizcheck[7]" value="27">
                Networks               
                <br>
                <input type="radio" name="quizcheck[7]" value="28">
                File systems                 
                <br><br>
                </div>
        8. MYSQL is freely available and is open source. <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[8]" value="29">
                True                 
                <br>
                <input type="radio" name="quizcheck[8]" value="30">
                False
                <br><br>
                </div>                
        9. What represents an attribute in a relational database? <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[9]" value="31">
                Table               
                <br>
                <input type="radio" name="quizcheck[9]" value="32">
                Row                  
                <br>
                <input type="radio" name="quizcheck[9]" value="33">
                Column             
                <br>
                <input type="radio" name="quizcheck[9]" value="34">
                Object              
                <br><br>
                </div>
        10. What represent a tuple in a relational database? <br><br>
                <div class="edit2">
                <input type="radio" name="quizcheck[10]" value="35">
                Table                
                <br>
                <input type="radio" name="quizcheck[10]" value="36">
                Row                
                <br>
                <input type="radio" name="quizcheck[10]" value="37">
                Column               
                <br>
                <input type="radio" name="quizcheck[10]" value="38">
                Object              
                <br><br>
                </div>
                         
             <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>