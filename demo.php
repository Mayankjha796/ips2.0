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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update attendence</title>
  </head>
  <body>
      <?php
    $date=$_REQUEST['tareek'];
      
      
      ?>
    <h1>Update Attendence of <?php echo $date; ?></h1>
    
    <table class="table">
        <thead>
            <th>s.no</th>
            <th>Name</th>
            <th>RollNo</th>
            <th>Date</th>
            <th>Attendence</th>
            <th>Update</th>
        </thead>
      <form  method="post">
  <tbody>
      <?php 
 include("mechcon.php");
 $count=1;
 
 $sql="SELECT * FROM `sem1sub1att` WHERE 1";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         if($date==$row['date']){
    
 
 ?>
    <tr>
      <th scope="row"><?php echo $count++ ;?></th>
      <td><?php echo $row['name'] ; ?></td>
      <td><?php echo $row['rollno']; ?> </td>
     
      <td><?php echo $date ; ?></td>
      <td><?php echo $row['attendence']; ?></td>
      <td><input type="radio" name="attend[<?php echo $row['rollno'] ;?>]"
value="present">P
<input type="radio" name="attend[<?php echo $row['rollno'] ;?>]"
value="absent">A</td>
    </tr>
   <?php
         }
     }
 }
  ?>
   
   </tbody>
  
 </table>
<button name="insert" class="btn btn-outline-dark" style="float: left;">Update</button>
 </form>
<?php
if(isset($_POST['insert'])){
    $att=$_POST['attend'];
   
    $d=$date;
    include("mechcon.php");
    $sqldate="SELECT `date` FROM `sem1sub1att` WHERE 1";
    $resultdate=mysqli_query($con,$sqldate);
    $b=false;
    $numdate=mysqli_num_rows($resultdate);
    if($numdate>0){
        while($check=mysqli_fetch_assoc($resultdate)){
            if($d==$check['date']){
               $b=true;
  foreach ($att as $key=>$value){
      $roll=$key;
                   if ($value=="present"){
                        $roll=$key;
                    $present="UPDATE `sem1sub1att` SET attendence='present' WHERE `rollno`='$roll'  ";
                    $sqlpresent=mysqli_query($con,$present);
                   }
                   
                   else if($value=="absent"){
                        $roll=$key;
                       $present="UPDATE `sem1sub1att` SET attendence ='absent' WHERE `rollno`='$roll'  ";
                       $sqlpresent=mysqli_query($con,$present);
               }
              
            }
            if($sqlpresent){
                echo "attendence updated";
                break;
            }
             
            }}}}
?>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="me-1-sem.php">Mechanical sem1 page</a></li>
    <li class="page-item"><a class="page-link" href="teacherdashboard.php">teacher dashboard</a></li>
    
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