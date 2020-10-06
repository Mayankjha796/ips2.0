
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
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <title>Student's Dashboard</title>
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
   @media only screen and (max-width: 576px) {
  .icon{
display: none;
  }
}

 @media only screen and (max-width: 992px) {
  .icon{
display: none;
  }
}

a{
	text-decoration: none;
	color: white;
}
a:hover{
	color: white;
}


 
</style>
<body>

<?php
include("header2.php");
?>
<!-- Main Student Dashboard started here -->
<div class="container ones "><br><br><br><br><br>
	<div class="container second ">
	<div class="row text-white">
		<div class="col-lg-3 col-md-4 one mt-5" onclick="show1()">
			<br><br><br><h1  >Attendance</h1>
			<div  id="sem1"  style="display:none;">
			       <form  method="post">
                        <input type="text" name="sem" placeholder="sem1">
                        <button class="btn btn-outline-primary" name="submit">submit</button>
                        
                    </form>
			</div>
			<script>
			    function show1(){
			        document.getElementById("sem1").style.display="block";
			    }
			</script>
		</div>
		<div class="col-lg-1 col-md-2">
			
		</div>
		<div class="col-lg-3 col-md-4 two mt-5" onclick="show2()">
			<br><br><br><br><h1>Mid Sem Marks</h1>
			<div  id="sem2"  style="display:none;">
			     <form  method="post">
                        <input type="text" name="midsem" placeholder="sem1">
                        <button class="btn btn-outline-primary" name="submit1">submit</button>
                        
                    </form>
			</div>
		</div>
			<script>
			     function show2(){
			        document.getElementById("sem2").style.display="block";
			    }
			</script>
		<div class="col-lg-1 col-md-2">
			
		</div>
		<div class="col-lg-3 col-md-4 three mt-5">
			<br><br><br><br><br><h1>Time Table</h1>
		</div>
		<div class="col-lg-1  col-md-2">
			
		</div>
		<div class="col-lg-3 col-md-4 four mt-5 mb-3">
			<br><br><br><br><h1>R.G.P.V. Notes</h1>
		</div>
		<div class="col-lg-1  col-md-2">
			
		</div>
		<div class="col-lg-3 col-md-5 five mt-5 mb-3">
			<br><br><br><h1>Referrence & Suggestions</h1>
		</div>
		<div class="col-lg-1 col-md-1">
			
		</div>
		<div class="col-lg-3 col-md-4 six mt-5 mb-3">
			<br><br><br><br><h1>Notices & Events</h1>
		</div>
		<div class="col-lg-1 col-md-2">
      
    </div>
	</div>
</div>
<br><br><br><br><br>
</div>
<!-- Main Student Dashboard closed here -->
<!-- Footer -->
<footer class="page-footer font-small container stylish-color-dark bg-dark pt-4">
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


</body>

</html>



<?php



if(isset($_POST['submit'])){
    $sem=$_POST['sem'];
    
    $id=$_REQUEST['user'];
    if($sem=="sem1"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=101&sub2=102&sub3=103&sub4=104&sub5=105");
    }
    else if($sem=="sem2"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=201&sub2=202&sub3=203&sub4=204&sub5=205");
    }
      else if($sem=="sem3"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=301&sub2=302&sub3=303&sub4=304&sub5=305");
    }
 else if($sem=="sem4"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=401&sub2=402&sub3=403&sub4=404&sub5=405");
    }
 else if($sem=="sem5"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=501&sub2=502&sub3=503&sub4=504&sub5=505");
    }
 else if($sem=="sem6"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=601&sub2=602&sub3=603&sub4=604&sub5=605");
    }
 else if($sem=="sem7"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=701&sub2=702&sub3=703&sub4=704&sub5=705");
    }
 else if($sem=="sem8"){
        header("location:studentattendence.php?roll=$id&semno=$sem&sub1=801&sub2=802&sub3=803&sub4=804&sub5=805");
    }

}

?>
<?php
if(isset($_POST['submit1'])){
    $midsem=$_POST['midsem'];
    
    $id=$_REQUEST['user'];
    if($midsem=="sem1"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
    else if($midsem=="sem2"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
      else if($midsem=="sem3"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
 else if($midsem=="sem4"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
 else if($midsem=="sem5"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
 else if($midsem=="sem6"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
 else if($midsem=="sem7"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }
 else if($midsem=="sem8"){
        header("location:studentmarks.php?roll=$id&semno=$midsem");
    }

}


?>

<?php
// }else echo '<a href="login.php"><h1>Please login first .

// </h1></a>';
?>