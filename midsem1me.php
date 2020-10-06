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
error_reporting(0);
$s1m1=$_REQUEST['sem1mm1'];
$s1m2=$_REQUEST['sem1mm2'];
$s2m1=$_REQUEST['sem2mm1'];
$s2m2=$_REQUEST['sem2mm2'];
$s3m1=$_REQUEST['sem3mm1'];
$s3m2=$_REQUEST['sem3mm2'];
$s4m1=$_REQUEST['sem4mm1'];
$s4m2=$_REQUEST['sem4mm2'];
$s5m1=$_REQUEST['sem5mm1'];
$s5m2=$_REQUEST['sem5mm2'];
$s6m1=$_REQUEST['sem6mm1'];
$s6m2=$_REQUEST['sem6mm2'];
$s7m1=$_REQUEST['sem7mm1'];
$s7m2=$_REQUEST['sem7mm2'];
$s8m1=$_REQUEST['sem8mm1'];
$s8m2=$_REQUEST['sem8mm2'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>midsem 1</title>
    <style>
    
   
  </style>

  </head>
  <body>
 
<h1 class="my-5 text-center ">Midsem Marks Of Chemistry Subject</h1>

<div class="container text-center my-5">
<table class="table table-dark table-bordered table-hover table-responsive ">
  <thead>

<?php
if($s1m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysem1stu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysem1stu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem1mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s1m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysem1stu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysem1stu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem1mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s2m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysem1stu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysems1tu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem2mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s2m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysem1stu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysem1stu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem2mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s3m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `sysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `sysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem3mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s3m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `sysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `sysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem3mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s4m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `sysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `sysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem4mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s4m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `sysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `sysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem4mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s5m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `tysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem5mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s5m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `tysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem5mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s6m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `tysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem6mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s6m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `tysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem6mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s7m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem7mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s7m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem7mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s8m1=="midsem1"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem8mm1`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
else if($s8m2=="midsem2"){
    $sub1=$_REQUEST['sub1'];
    $sub2=$_REQUEST['sub2'];
    $sub3=$_REQUEST['sub3'];
    $sub4=$_REQUEST['sub4'];
    $sub5=$_REQUEST['sub5'];
    ?>
    
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      
      <th scope="col"><?php echo $sub1 ; ?></th>
      <th scope="col"><?php echo $sub2 ; ?></th>
      <th scope="col"><?php echo $sub3 ; ?></th>
      <th scope="col"><?php echo $sub4 ; ?></th>
      <th scope="col"><?php echo $sub5 ; ?></th>
    </tr>
  </thead>

<form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 $sql="SELECT * FROM `fysemstu_login` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         
    
 
 ?>
 
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
      <td><?php echo $row['branch'] ;?></td>
    
      <td> 
      <input type="number" name="cmm[<?php echo $row['rollno'] ?>]"  >
      
      </td>
      <td> 
      <input type="number" name="cmm2"  >
      
      </td>
      <td> 
      <input type="number" name="cmm3"  >
      
      </td>
      <td> 
      <input type="number" name="cmm4"  >
      
      </td>
      <td> 
      <input type="number" name="cmm5"  >
      
      </td>
    </tr>
   <?php
     }
 }  
  ?>
   
   </tbody>
  

<?php

if(isset($_POST['insert'])){
    include("mechcon.php");
    $att=$_POST['cmm'];
    $cmm2=$_POST['cmm2'];
    $cmm3=$_POST['cmm3'];
    $cmm4=$_POST['cmm4'];
    $cmm5=$_POST['cmm5'];
   
             foreach ($att as $key=>$value){
                       $roll=$key;
                    
                       $select="SELECT *  FROM `fysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                              $name=$checkselect['name'];
                              echo  $branch=$checkselect['branch'];
                               
                           
                           }
                       }
                      $insert="INSERT INTO `sem8mm2`( `name`, `rollno`, `branch`, `subject101` , `subject102` , `subject103` , `subject104` , `subject105`) VALUES ('$name','$roll','$branch' ,'$value', '$cmm2', '$cmm3' , '$cmm4' , '$cmm5')";
                       $resultpresent=mysqli_query($con,$insert);
                          
                   }
                  
            if($resultpresent){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Attendence submitted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                      
                   }
}
        
    

}
?>
 
  </table>
<button name="insert" class="btn btn-outline-dark" style="float: left;">Update</button>
 </form>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="teacherdashbaord.php">Teacher dashbaord</a></li>
    <li class="page-item"><a class="page-link" href="me-1-sem.php">mechanical sem1</a></li>

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
 
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

