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

<?php
$rollno=$_REQUEST['roll'];
$sem=$_REQUEST['semno'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>midsem marks</title>
    <style >
	
	.list-unstyled a {
      color: #fff;
    }

    .bh a {
      color: red;
    }

    .bh a:hover {
      color: green;
    }

    .bh h5 {
      color: #fff;
    }

    .bh p {
      color: #fff;
    }

    .fa {
      padding: 20px;
      font-size: 30px;
      width: 60px;
      height: 60px;

      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }

    .list-inline-item .fa:hover {
      opacity: 0.9;
    }

    .list-inline-item .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .list-inline-item .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .list-inline-item .fa-youtube {
      background: red;
      color: white;
    }

    .list-inline-item .fa-linkedin {
      background: #007bb5;
      color: white;
    }

    .form-inline .fa-search {
      color: white;
      margin-left: -10px;
      margin-bottom: 12px;
    }

    .input-group .btn {
      background-color: red;
      color: white;
      font-weight: bold;
    }

    .input-group {
      padding-top: 22px;
    }

    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: white;
    }

    .top1 {
      height: auto;
      background-color: purple!important;
      color: #c40808;
      letter-spacing: 1px;
      color: #fff;
    }
    .niv.scrolled 
    {
             
       opacity: 0.7;
       height: 70px;
   }
   
   
        
         @media(min-width: 576px) and (max-width:765px)
    {
      .tpimage{
        height: 100px;
        width: 100px;
      }
      .size{
        font-size: 24px;
      }
    }
    @media(min-width: 320px) and (max-width:575px)
    {
      .tpimage{
        height: 100px;
        width: 100px;
      }
      .size{
       font-size: 18.72px;
       margin-top: -60px;
       margin-left: 80px;
      }
    }
     @media(min-width: 180px) and (max-width:319px)
    {
      .tpimage{
        height: 150px;
        width: 150px;
        text-align: center;
      }
      .size{
       display: none;
      }
    }
    
    .navbar{
      background: linear-gradient(to right, purple,magenta,purple,magenta,purple);
     

    }
   .navbar-dark .nav-link{
      color: white;
      font-weight: bold;
     
    }
    body{
  background: linear-gradient( rgba(252, 0, 255,0.1), rgba(252, 0, 255,0.6) ) ;
 }

 
</style>
  </head>
  <body>
      <?php
    //   include("header.php");
      ?>
       <div class="container-fluid top sticky-top mt-0"style="background-color: purple;">
   
    <marquee>
      <h6 style="color: #fff;">Announcements : Upcoming midsem Exams Conducted Online</h6>
    </marquee>
  </div>
  <div class="container-fluid top1   ">
    <hr  style="border: 1px solid magenta; margin:0;">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 ">
         <img class="tpimage" src="ipslogo.png" height="150px" width="150px;">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9  text-center  my-auto">
        <h1  class="text-center size">I.P.S Group Of Colleges</h1>
      </div>
      
      
    </div>
      <hr style="border: .1px solid magenta; margin:0;">
    
    
  </div>
  <!-- Header closed -->
  <!-- navbar opened -->
  <nav class="navbar navbar-expand-md  navbar-dark mt-0 sticky-top container-fluid niv ">
    <a class="navbar-brand m-auto float-left" href="#"><h1>IPS</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav text-white mr-auto " style="margin-left: 4px;">
        <li class="nav-item active ml-1">
          <a class="nav-link btn " href="try.html">Home <span class="sr-only">(current)</span></a>
        </li>
       <li class="nav-item active ml-1">
          <a class="nav-link  btn " href="#">Academics</a>
        </li>
        <li class="nav-item active ml-1">
          <a class="nav-link  btn " href="#">Admission</a>
        </li>
        <li class="nav-item active ml-1">
          <a class="nav-link  btn  " href="#">About us </a>
        </li>
        <li class="nav-item active ml-1">
          <a class="nav-link  btn  " href="#">Contact us </a>
        </li>
        
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        
       
        <a class="btn btn-primary ml-3" href="logout.php" role="button">Logout</a>
      </form>
    </div>
  </nav>
<!-- navbar closed -->

<
      <div class="container mt-5">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                
                <th>Name</th>
                <th>Rollno</th>
                <th>101</th>
                <th>102</th>
                <th>103</th>
                <th>104</th></th>
                <th>105</th>
                </tr>
            </thead>
             <tbody>
                <tr>
    <?php
    include("mechcon.php");
    
    
    if($sem=="sem1"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem1mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem1mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else  if($sem=="sem2"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem2mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem2mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else  if($sem=="sem3"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem3mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem3mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else  if($sem=="sem4"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem4mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem4mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
   else  if($sem=="sem5"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem5mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem5mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else if($sem=="sem6"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem6mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem6mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else  if($sem=="sem7"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem7mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem7mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    else if($sem=="sem8"){
        $rollno=$_REQUEST['roll'];
        $sql="SELECT * FROM `sem8mm1` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data=mysqli_fetch_assoc($result)){
                $name=$data['name'];
                $rollno=$data['rollno'];
                $subject1=$data['subject101'];
                $subject2=$data['subject102'];
                $subject3=$data['subject103'];
                $subject4=$data['subject104'];
                $subject5=$data['subject105'];
                
            }?>
            
            <td><?php echo"$name"; ?></td>
                <td><?php echo"$rollno"; ?></td>
                <td><?php echo"$subject1"; ?></td>
                <td><?php echo"$subject2"; ?></td>
                <td><?php echo"$subject3"; ?></td>
                <td><?php echo"$subject4"; ?></td>
                <td><?php echo"$subject5"; ?></td>
                </tr>
                <tr>
                <?php
        }
         $sql="SELECT * FROM `sem8mm2` WHERE `rollno`='$rollno'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            while($data2=mysqli_fetch_assoc($result)){
                $name1=$data2['name'];
                $rollno1=$data2['rollno'];
                $subject11=$data2['subject101'];
                $subject22=$data2['subject102'];
                $subject33=$data2['subject103'];
                $subject44=$data2['subject104'];
                $subject55=$data2['subject105'];
            } ?>
            
             
                
                <td><?php echo"$name1"; ?></td>
                <td><?php echo"$rollno1"; ?></td>
                <td><?php echo"$subject11"; ?></td>
                <td><?php echo"$subject22"; ?></td>
                <td><?php echo"$subject33"; ?></td>
                <td><?php echo"$subject44"; ?></td>
                <td><?php echo"$subject55"; ?></td>
                </tr>
                <?php
        }
    }
    ?>
                
               
                
            </tbody>
        </table>
    </div>
    
  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark bg-dark pt-4 container mb-0 rounded-bottom">
    <!-- Footer Elements -->
    <div class="container mb-0" >
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!-- Form -->
          <form class="form-inline">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
            <a href=""> <i class="fa fa-search" aria-hidden="true"></i></a>
          </form>
          <!-- Form -->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <form class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-sm btn-outline-white my-0 ml-3" type="button">Sign up</button>
            </div>
          </form>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Footer Elements -->
    <!-- Footer Links -->
    <div class="container text-center text-md-left mb-0">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto bh">
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Details</h5>
          <p>Call now:<a href="tel:123-456-7891"> 123-456-7891</a></p>
          <p>mail to:<a href="mail to:ipsgoc@gmail.com"> ipsgoc@gmail.com</a></p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: white">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">About Us</a>
            </li>
            <li>
              <a href="#!">Contact Us</a>
            </li>
            <li>
              <a href="#!">Admission</a>
            </li>
            <li>
              <a href="#!">E-Brochure</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: white">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">R & D Cell</a>
            </li>
            <li>
              <a href="#!">T & P Cell</a>
            </li>
            <li>
              <a href="#!">Academics</a>
            </li>
            <li>
              <a href="#!">Student Zone</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: white">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Campus Discipline</a>
            </li>
            <li>
              <a href="#!">Events</a>
            </li>
            <li>
              <a href="#!">Our Recruiters</a>
            </li>
            <li>
              <a href="#!">Others</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="#">
          <i class="fa fa-facebook"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href="#">
          <i class="fa fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href="#">
          <i class="fa fa-linkedin"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="#">
          <i class="fa fa-youtube"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>