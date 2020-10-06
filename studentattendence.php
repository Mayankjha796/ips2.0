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
$id=$_REQUEST['roll'];
$sem=$_REQUEST['semno'];

$sub1=$_REQUEST['sub1'];
$sub2=$_REQUEST['sub2'];
$sub3=$_REQUEST['sub3'];
$sub4=$_REQUEST['sub4'];
$sub5=$_REQUEST['sub5'];
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>student attendence</title>
  </head>
  <style >
       .list-unstyled a
    {
      color: #fff;
    }
    .bh a
    {
      color: red;
    }
    .bh a:hover
    {
      color: green;
    }
   .bh h5{
      color: #fff;
    }
  .bh p{
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
.input-group .btn{
  background-color: red;
  color: white;
  font-weight: bold;
}
.input-group{
  padding-top: 22px;
}
.navbar-toggler
{
  color: black;
}
.ones{
	background-image: url(student.jpg);
	height: auto;
	width: 100%;
	background-size: cover;
	background-position: center;
}
.second{
	
	border-radius: 25px;
}
.second .row{
	margin-left: 60px;
}
.second .row .col-lg-3:hover{
	box-shadow: 5px 5px 5px 5px purple , -5px -5px 5px 5px purple ,-5px 5px 5px 5px purple ,5px -5px 5px 5px purple  ;

}

.one{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;	
}
.two{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;
}
.three{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;
	
}
.four{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;
}
.five{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;
}
.six{
	border: 5px solid white;
	border-radius: 15px;
	height: 300px;
	text-align: center;
}
.modal-body .col-1
{
	display: none;
}
.modal-body .col-2
{
	display: none;
}
 .modal-body .row1:hover{
        background-color: #f1f1f1;
        border-radius: 15px;
        color: black;
        
    }
    .modal-body .row1:hover .col-1{
         
        background:linear-gradient(to right, skyblue,darkblue);
        border-radius: 15px;
        display: block;
        color: #fff;
       
    }
    .modal-body .row1:hover .col-2{
        
       background:linear-gradient(to right, black,red);
        border-radius: 15px;
        display: block;
        color: #fff;
       
    }
    .modal-content{
    	background: linear-gradient(#ddd6f3,#faaca8);
    }
  
a{
	text-decoration: none;
	color: white;
}
a:hover{
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

  <body>
<?php

// include("header2.php");
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
          
        
        <a class="btn btn-primary ml-3" href="logout.php" role="button">logout</a>
      </form>
    </div>
  </nav>
<!-- navbar closed -->


  <table class="table table-hover table-dark mt-5">
      <form>
          <tbody>
              <tr>
                  <th   scope="col">s.no</th>
                  <th  scope="col">name</th>
                  <th  scope="col">rollno</th>
                  <th  scope="col"><?php echo $sub1; ?></th>
                  <th  scope="col"><?php echo $sub2; ?></th>
                  <th  scope="col"><?php echo $sub3; ?></th>
                  <th  scope="col"><?php echo $sub4; ?></th>
                  <th  scope="col"><?php echo $sub5; ?></th>
              </tr>
              <?php
            
              if($sem=="sem1"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `fysem1stu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem1sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem1sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem1sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem1sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem1sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                               $atten= $p/$total;
                               
                               
                               $atten2=$atten*100;
                        
                   // overall  attendence percentage 
                //   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                //   $naya=round($present);
                //   $nayamal=$naya*100;
              }
              
              else if($sem=="sem2"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `fysem1stu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem2sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem2sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem2sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem2sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem2sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              else  if($sem=="sem3"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `sysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem3sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem3sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem3sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem3sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem3sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              else if($sem=="sem4"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `sysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem4sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem4sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem4sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem4sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem4sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              else  if($sem=="sem5"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `tysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem5sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem5sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem5sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem5sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem5sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              
              else  if($sem=="sem6"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `tysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem6sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem6sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem6sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem6sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem6sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
            else  if($sem=="sem7"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `4ysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem7sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem7sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem7sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem7sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem7sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              
              else  if($sem=="sem8"){
              $id=$_REQUEST['roll'];
            $sem=$_REQUEST['semno'];
            include("mechcon.php");
            $present1=0;
            $present2=0;
            $present3=0;
            $present4=0;
            $present5=0;
            $absent1=0;
            $absent2=0;
            $absent3=0;
            $absent4=0;
            $absent5=0;
            
            $count=1;
            $n="SELECT * FROM `4ysemstu_login` WHERE rollno='$id'";
            $resultn=mysqli_query($con,$n);
            $numn=mysqli_num_rows($resultn);
            if($numn>0){
                while($checkn=mysqli_fetch_assoc($resultn)){
                    $name=$checkn['name'];
                }
            }
            
            $sql="SELECT * FROM `sem8sub1att` WHERE rollno='$id'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
    
            if($num>0){
                while($data=mysqli_fetch_assoc($result)){
                    if($data['attendence']=="present"){
                        $present1=$present1+1;
                 
                    }
                    else if($data['attendence']=="absent"){
                        $absent1=$absent1+1;
                    }
                }}
                    
                    
            $sql2="SELECT * FROM `sem8sub2att` WHERE rollno='$id'";
            $result2=mysqli_query($con,$sql2);
            $num2=mysqli_num_rows($result2);
                 
            if($num2>0){
                while($data2=mysqli_fetch_assoc($result2)){
                    if($data2['attendence']=="present"){
                        $present2=$present2+1;
                    }
                    else if($data2['attendence']=="absent"){
                        $absent2=$absent2+1;
                    }
                }}
                    
                      $sql3="SELECT * FROM `sem8sub3att` WHERE rollno='$id'";
            $result3=mysqli_query($con,$sql3);
            $num3=mysqli_num_rows($result3);
                 
            if($num3>0){
                while($data3=mysqli_fetch_assoc($result3)){
                    if($data3['attendence']=="present"){
                        $present3=$present3+1;
                    }
                    else if($data3['attendence']=="absent"){
                        $absent345=$absent3+1;
                    }
                }}
                    
                    
                    $sql4="SELECT * FROM `sem8sub4att` WHERE rollno='$id'";
            $result4=mysqli_query($con,$sql4);
            $num4=mysqli_num_rows($result4);
                 
            if($num4>0){
                while($data4=mysqli_fetch_assoc($result4)){
                    if($data4['attendence']=="present"){
                        $present4=$present4+1;
                    }
                    else if($data4['attendence']=="absent"){
                        $absent4=$absent4+1;
                    }
                }}
                    
                    
                    
                    $sql5="SELECT * FROM `sem8sub5att` WHERE rollno='$id'";
            $result5=mysqli_query($con,$sql5);
            $num5=mysqli_num_rows($result5);
                 
            if($num5>0){
                while($data5=mysqli_fetch_assoc($result5)){
                    if($data5['attendence']=="present"){
                        $present5=$present5+1;
                    }
                    else if($data5['attendence']=="absent"){
                        $absent5=$absent5+1;
                    }
                }}
                  // total classes held of single subject 
                  $total1=$present1+$absent1;
                    $total2=$present2+$absent2;
                      $total3=$present3+$absent3;
                        $total4=$present4+$absent4;
                          $total5=$present5+$absent5;
                          
                          // overall total classes
                          $total=$total1+$total2+$total3+$total4+$total5;
                    
                        // single subject attendence percentage
                        $p1=$present1/$total1;  // 
                          $p2=$present2/$total2;
                            $p3=$present3/$total3;
                              $p4=$present4/$total4;
                                $p5=$present5/$total5;
                                
                                // intializing total present
                                $p=$present1+$present2+$present3+$present4+$present5;
                        
                   // overall  attendence percentage 
                   $present=($present1*$p1+$present2*$p2+$present3*$p3+$present4*$p4+$present5*$p5)/5;
                   $naya=round($present);
                   $nayamal=$naya*100;
              }
              
              else{
                  
                  echo "please enter the appropiate semester";
              }
              ?>
              
              <tr>
                  <th scope="row"><?php echo $count++ ; ?></th>
                  <td><?php echo $name ; ?></td>
                  <td><?php echo $id ; ?></td>
                  <td><a href="showsubjectattendence.php?rn=<?php echo $id; ?>&subject=<?php echo $sub1 ;?>"><?php echo $present1 ;?></a></td>
                  <td><a href="showsubjectattendence.php?rn=<?php echo $id; ?>&subject=<?php echo $sub2 ;?>"><?php echo $present2 ;?></a></td>
                  <td><a href="showsubjectattendence.php?rn=<?php echo $id; ?>&subject=<?php echo $sub3 ;?>"><?php echo $present3 ;?></a></td>
                  <td><a href="showsubjectattendence.php?rn=<?php echo $id; ?>&subject=<?php echo $sub4 ;?>"><?php echo $present4 ;?></a></td>
                  <td><a href="showsubjectattendence.php?rn=<?php echo $id; ?>&subject=<?php echo $sub5 ;?>"><?php echo $present5 ;?></a></td>
                 
                  
              </tr>
              <tr>
                  <th scope="row">total classes=<?php echo $total; ?></th>
                  <td>total present<?php echo $p; ?></td>
                  <td>Attendence percent <?php echo $atten2 ; ?>%</td>
              </tr>
             
              <?php
             
                
              
              ?>
          </tbody>
      </form>
  </table>
   </div>
   <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark bg-dark pt-4">
  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
         <a href=""> <i class="fa fa-search" aria-hidden="true"></i></a>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
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
  <div class="container text-center text-md-left">

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
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color: white">Links</h5>

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
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color: white">Links</h5>

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
<!-- Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>