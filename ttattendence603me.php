<?php
$date=$_REQUEST['tarik'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>attendece page</title>
  </head>
  <body>
   


<h1 class="my-5 text-center ">Attendence Record For <?php echo $date ; ?> for Chemistry</h1>

<div class="container my-5">
<table class="table table-dark table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT ROLL NO</th>
      <th scope="col">Branch</th>
      <th scope="col">DATE</th>
      <th scope="col">attendence</th>
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
      <td><?php echo $date ; ?></td>
      <td><input type="radio" name="attend[<?php echo $row['rollno'] ;?>]"
value="present">P
<input type="radio" name="attend[<?php echo $row['rollno'] ;?>]"
value="absent">A</td>
    </tr>
   <?php
     }
 }
  ?>
   
   </tbody>
  
  
 

<?php
$date=$_REQUEST['tarik'];
echo $date;
if(isset($_POST['insert'])){
    $att=$_POST['attend'];
  
    $d=$date;
    include("mechcon.php");
    $sqldate="SELECT `date` FROM `sem6sub3att` WHERE 1";
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
break;
            }}}
            if(!$b){
               foreach ($att as $key=>$value){
                   if ($value=="present"){
                       $roll=$key;
                       $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                               $name=$checkselect['name'];
                               $branch=$checkselect['branch'];
                           }
                       }
                       $present="INSERT INTO `sem6sub3att`( `rollno`, `name`, `branch`, `date`, `attendence`) VALUES ('$key' , '$name' , '$branch' , '$d' , 'present')";
                       $resultpresent=mysqli_query($con,$present);
                       
                   }
                   else{
                        $roll=$key;
                      $select="SELECT *  FROM `tysemstu_login` WHERE `rollno`='$roll'";
                       $selectresult=mysqli_query($con,$select);
                       $selectrows=mysqli_num_rows($selectresult);
                       if($selectrows>0){
                           while($checkselect=mysqli_fetch_assoc($selectresult)){
                               $name=$checkselect['name'];
                               $branch=$checkselect['branch'];
                           }
                       }
                       $present="INSERT INTO `sem6sub3att`( `rollno`, `name`, `branch`, `date`, `attendence`) VALUES ('$key' , '$name' , '$branch' , '$d' , 'absent')";
                       $resultpresent=mysqli_query($con,$present);
                       
               }
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

