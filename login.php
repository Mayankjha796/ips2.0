<?php
include("mechcon.php");


if(isset($_POST['submit'])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    
 $sql= "SELECT * FROM `fysem1stu_login` WHERE  rollno='$username' AND password='$password'";
 $result=mysqli_query($con,$sql);
 $num= mysqli_num_rows($result);
  $sql_2= "SELECT * FROM `sysemstu_login` WHERE  rollno='$username' AND password='$password'";  
  $result_2=mysqli_query($con,$sql_2);
    $num_2=mysqli_num_rows($result_2);
     $sql_3= "SELECT * FROM `tysemstu_login` WHERE  rollno='$username' AND password='$password'";
  $result_3=mysqli_query($con,$sql_3);
    $num_3=mysqli_num_rows($result_3);
     $sql_4= "SELECT * FROM `4ysemstu_login` WHERE  rollno='$username' AND password='$password'";
  $result_4=mysqli_query($con,$sql_4);
    $num_4=mysqli_num_rows($result_4);
     $sql_t= "SELECT * FROM `teacher record` WHERE  username='$username' AND password='$password'";
  $result_t=mysqli_query($con,$sql_t);
    $num_t=mysqli_num_rows($result_t);
 if($num==1){
     
        session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['username']="$username";
      
     header("Location: studentdashboard.php?user=$username");
    
     
 }


else if($num_2==1){
      session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['username']="$username";
      
           header("Location: studentdashboard.php?user=$username");
            
           
     }
     else if($num_3==1){
           session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['username']="$username";
      
           header("Location: studentdashboard.php?user=$username");
         
           
     }
    
    else if($num_4==1){
          session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['username']="$username";
      
           header("Location: studentdashboard.php?user=$username");
         
           
     }
      else if($num_t==1){
            session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['username']="$username";
      
           header("Location: teacherdashboard.php?user=$username");
           
           
     }
    
     else{
     echo"either password or username is incorrect";
 }
 
    
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
        .abc
{
	height: 800px;
	width: 700px;
	margin:auto;
	padding-top: 10px;
	border-radius: 10px;
}
		.col-7
		{
			border-radius: 12px;
			padding-top: 50px;
			padding-left: 90px;
			background: linear-gradient(skyblue,magenta);
		}
		.col-5
		{
			background: linear-gradient(skyblue,magenta);
            border-radius: 12px;
		}
		h1
		{
			padding-left: 60px;
		}
		form
		{
			padding-top: 25px;
			padding-right: 50px;
		}
		.bf
		{
			background: linear-gradient(to right,skyblue,magenta);
			color: white;
			font-weight: bolder;
			float: right;
			width: 270px;
			border-radius:20px;
		}
		.form-control
		{
			border-radius: 20px;
		}
		.invalid-feedback{
			font-weight: bolder;
			font-size: 15px;
		}
		.valid-feedback{
		font-weight: bolder;
			font-size: 15px;	
		}
	
	</style>
</head>
<body>
	<h1 style="font-weight: bold; color: #A333FF; margin-right: 43px; margin-top: 8px; text-align: center;">Welcome to I.P.S. Group Of Colleges</h1>
	<div class="abc">
		<div class="row">
			<div class="col-5 ">
				<img src="ipslogo.png" style=" margin-top: 120px;margin-left: 15px;" class="img-fluid">
			</div>
			<div class="col-7 ">
				<h1>Login</h1>
				<form action="login.php" class="was-validated" method="post">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
    <div class="valid-feedback">Valid.</div>
    <div class="result"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <button class="bf" type="submit" name="submit" onclick="check()">Submit</button>
</form><br><br><br><br><br>
			</div>
			
		</div>
	</div>
</body>
</html>