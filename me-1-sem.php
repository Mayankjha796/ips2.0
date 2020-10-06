<?php
$login=false;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: homepage.php");
    exit;
}
else{
    $login="true";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Teacher.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
  <title>ME-1st-sem</title>
  <script type="text/javascript">
    function showdata1(){
       var x = document.getElementById("showdata1");
       var y = document.getElementById("showdata2");
       
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
   
  } else {
    x.style.display = "none";
  }
    }
    function showdata2(){
       var x = document.getElementById("showdata1");
       var y = document.getElementById("showdata2");
      
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
    
  } else {
    y.style.display = "none";
  }
    }
   
  </script>
  <style >
    .inline .col-4{
      margin-top: 50px;
      text-align: center;navy
    }
    #showdata1{
      display: block;
    }
    #showdata2{
      display: none;
    }
    
    .mids{
        font-weight: bolder; text-align:  center; color: black;text-decoration: none;
        margin-top:20px;padding-top:20px;
    }
    .att{
        font-weight: bolder; text-align: center; color: black; text-decoration: none; margin-top:20px;padding-top:20px;
    }
  </style>
</head>
<body>
    <?php
    //   include("theader.php");
  ?>
    <section>
  <div class="container inline row">
    <div class="col-lg-6 tc" onclick="showdata1()">
      <a href="#" class="att"><h1 >Attendance</h1></a> 
    </div>
    <div class="col-lg-6  tc" onclick="showdata2()">
      <a href="#"  class="mids" ><h1 >MidSem</h1></a> 
    </div>
  </div><br><br>
  
  <div id="showdata1 " >
    <table class="container-fluid table table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th class="text-center" ><h5>S.No</h5></th>
      <th class="text-center" ><h5>Subject Code</h5></th>
      <th class="text-center" ><h5>Subject Name</h5></th>
      <th class="text-center" ><h5>Enter the Date</h5></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th >1</th>
      <td class="text-center">Bt-201</td>
      <td class="text-center">Engineering Physics</td>x
     
      <td colspan="2"> 
      <div class="row">
          <div class="col-12 subject mt-3">
           
            <form  method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date1" >
     
   <button type="submit"  name="submit1" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
        <?php
        if(isset($_POST['submit1'])){
            echo $date=$_POST['date1'];
            include("mechcon.php");
            $sgl="SELECT  `date` FROM `sem1sub1att` WHERE 1";
            $resultsgl=mysqli_query($con,$sgl);
            $b=false;
            $numdate=mysqli_num_rows($resultsgl);
            if($numdate>0){
             while($check=mysqli_fetch_assoc($resultsgl)){
                 if($date==$check['date']){
                     $b=true;
                     echo "attendece already taken";
                    
                      header("location:demo.php?tareek=$date");
                   break;
                 }
                
             
             }
            
                  if($date!==$check['date']){
              header("location:ftattendence101me.php?tarik=$date");
          }
         
            }
             else{
                  echo "something";
                 }
            
        }
         
       
        ?>
      </td> 
    </tr>

    <tr>
      <th >2</th>
      <td class="text-center">Bt-102</td>
      <td class="text-center">Engineering Mathematics-I</td>
      <td colspan="2"> 
      <div class="row">
          <div class="col-12 subject mt-3">
           
            <form action="me-1-sem.php" method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date2" >
     
   <button type="submit"  name="submit2" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
     
        
        <?php 
      include("mechcon.php");
 if(isset($_POST['submit2'])){
     $d=$_POST['date2'];
     $sqldate="SELECT `date` FROM `sem1sub2att` WHERE 1";
    $resultdate=mysqli_query($con,$sqldate);
    $b=false;
    $numdate=mysqli_num_rows($resultdate);
    if($numdate>0){
        while($check=mysqli_fetch_assoc($resultdate)){
            if($check['date']==$d){
              $b=true;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence already taken.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

           }
            else if($check['date']!==$d){
               header("location:ftattendence102me.php?tarik=$d");
           }
           else{
               echo "eroor";
           }
           break;
        }
        
    }
            else{
                
            
     echo "error";
 }
 }
?>
      </td> 
    </tr>
    <tr>
      <th >3</th>
      <td class="text-center">Bt-203</td>
      <td class="text-center">Basic Mechanical Engineering</td>
     <td colspan="2"> 
      <div class="row">
          <div class="col-12 subject mt-3">
           
            <form action="me-1-sem.php" method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date3" >
     
   <button type="submit"  name="submit3" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
     
        
        <?php 
      include("mechcon.php");
 if(isset($_POST['submit3'])){
     $d=$_POST['date3'];
     $sqldate="SELECT `date` FROM `sem1sub3att` WHERE 1";
    $resultdate=mysqli_query($con,$sqldate);
    $b=false;
    $numdate=mysqli_num_rows($resultdate);
    if($numdate>=0){
        while($check=mysqli_fetch_assoc($resultdate)){
            if($d==$check['date']){
              $b=true;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence already taken.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

           }
            else if($check['date']!==$d){
               header("location:ftattendence103me.php?tarik=$d");
           }
           else{
               echo "eroor";
           }
           break;
        }
        
    }
            else{
                
            
     echo "error";
 }
 }
?>
      </td>
    </tr>
    <tr>
      <th >4</th>
      <td class="text-center">Bt-204</td>
      <td class="text-center">Basic Civil Engineering & Mechanics</td>
      <td colspan="2"> 
      <div class="row">
          <div class="col-12 subject mt-3">
           
            <form action="me-1-sem.php" method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date4" >
     
   <button type="submit"  name="submit4" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
     
        
        <?php 
      include("mechcon.php");
 if(isset($_POST['submit4'])){
     $d=$_POST['date4'];
     $sqldate="SELECT `date` FROM `sem1sub4att` WHERE 1";
    $resultdate=mysqli_query($con,$sqldate);
    $b=false;
    $numdate=mysqli_num_rows($resultdate);
    if($numdate>0){
        while($check=mysqli_fetch_assoc($resultdate)){
            if($d==$check['date']){
              $b=true;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence already taken.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

           }
            else if($check['date']!==$d){
               header("location:ftattendence104me.php?tarik=$d");
           }
           else{
               echo "eroor";
           }
           break;
        }
        
    }
            else{
                
            
     echo "error";
 }
 }
?>
      </td>
    </tr>
    <tr>
      <th >5</th>
      <td class="text-center">Bt-205</td>
      <td class="text-center">Basic Computer Engineering </td>
     <td colspan="2"> 
      <div class="row">
          <div class="col-12 subject mt-3">
           
            <form action="me-1-sem.php" method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date5" >
     
   <button type="submit"  name="submit5" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
     
        
        <?php 
      include("mechcon.php");
 if(isset($_POST['submit5'])){
     $d=$_POST['date5'];
     $sqldate="SELECT `date` FROM `sem1sub5att` WHERE 1";
    $resultdate=mysqli_query($con,$sqldate);
    $b=false;
    $numdate=mysqli_num_rows($resultdate);
    if($numdate>0){
        while($check=mysqli_fetch_assoc($resultdate)){
            if($d==$check['date']){
              $b=true;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence already taken.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

           }
            else if($check['date']!==$d){
               header("location:ftattendence105me.php?tarik=$d");
           }
           else{
               echo "eroor";
           }
           break;
        }
        
    }
            else{
                
            
     echo "error";
 }
 }
?>
      </td>
    </tr>
  </tbody>
</table>
  </div>
  </section>
  <div id="showdata2" class="mt-5">
  <div class="my-5 container-fluid">
    <div class="row">
      <div class="col-6">
        <h1 class="text-center">MidSem-1</h1>
        <p class="pl-3">click below to enter the marks for First year MidTerm-1 Marks </p>
        
            
       <a href="midsem1me.php?sem1mm1=midsem1&sub1=101&sub2=102&sub3=103&sub4=104&sub5=105"> <button name="proceed" type="submit" class="btn btn-success mb-3">Proceed</button></a>
        
       
      </div>
     
      <div class="col-6">
        <h1 class="text-center">MidSem-2</h1>
        <p class="ml-3">click below to enter the marks for First year MidTerm-2 Marks </p>
        <a href="midsem1me.php?sem1mm2=midsem2&sub1=101&sub2=102&sub3=103&sub4=104&sub5=105"><button class="btn btn-success mb-3">Proceed</button></a>
      </div>
    </div>
  </div>
  </div>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="teacherdashboard.php">Previous</a></li>
  
    <li class="page-item"><a class="page-link disabled" href="#">Next</a></li>
  </ul>
</nav>
<li class="nav-item btn  pb-2 abc mr-2 pr-2  "style="background-color:magenta;color:white;font-weight:bold;"  data-target="#logout" data-toggle="modal"> logout</li>
<div class="modal" tabindex="-1" id="logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
      <div class="modal-body">
        <p>Are you sure you want to logout</p>
      </div>
      <div class="modal-footer">
      <form method="post">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="logout.php">
        <button type="button" class="btn btn-primary"  name="logtrue">logout</button>
        </a>
     </form>
      </div>    
    </div>
  </div>
</div>
</div>
 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>