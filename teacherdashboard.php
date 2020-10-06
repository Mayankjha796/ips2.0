
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <title>Teacher's Dashboard</title>

  <style>
    .teacher{
      color: white;
      margin-right: 280px;
      font-size: 3em;
      font-weight: bold;
    }
    
    .mc1 img{
      z-index: 1;
      margin: 62px 0;
      height:75% ;
      width: 100%;
      position: absolute;

      
    }
    .mb1{
      z-index: 2;
      position: relative;
      
      
    }
    .mh1
    {
      z-index: 2;
       position: relative;
    }
    .mf1
    {
      z-index: 2;
       position: relative;
    }
    .modal-footer .btn{
      background: linear-gradient(to right,skyblue,magenta);
    }
    
    .first{
      background-image: url("firstyear.jpg");
      height: 300px;
      background-size: 100% 100%;
      color: white;
      text-align: center;
      border-radius: 20px;

    }
    .second{
      background-image: url("secondyear.jpg");
      height: 300px;
      background-size: 100% 100%;
      color: white;
      text-align: center;
      border-radius: 20px;

    }
    .third{
      background-image: url("thirdyear.jpg");
      height: 300px;
      background-size: 100% 100%;
      color: white;
      text-align: center;
      margin-top: 50px;
      border-radius: 20px;
    }
    .fourth{
      background-image: url("fourthyear.jpg");
      height: 300px;
      background-size: 100% 100%;
      color: white;
      text-align: center;
      margin-top: 50px;
      border-radius: 20px;
    }
    .bg1{
      background: linear-gradient(#eecda3,#ef629f);
    }
    .modal-body .row1:hover{
       
    }
    .modal-body .row1:hover .col1{
         
        background-color: black;
        opacity: 0.7;
        border-radius: 20px;
        display: block;
       
    }
    .modal-body .row1:hover .col2{
        
        background-color: black;
        opacity: 0.7;
        border-radius: 20px;
        display: block;
       
    }
    .modal-body .col1{
      display: none;
    }
    .modal-body .col2{
      display: none;
    }
    .rowsub:hover{
        background-color: black;
        color: white;
    }
    .cc {
      margin: 0;
      padding: 0;
      background-color:#F7F9F9 ;
    }
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
 

  </style>
  </head>
   <body class="cc">
  <!-- Header opened -->
  <?php
 
  include("theader.php");
  ?>
  <!-- modal started here -->
<div class="modal modal1" tabindex="-1"id="first" >
  <div class="modal-dialog">
    <div class="modal-content mc1">
      <img src="modal.jpg">
      <div class="modal-header mh1">
        <h5 class="modal-title">Select Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb1">
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Computer Science Eng.</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-1-sem.php" target="_blank"><h1 >Sem-1</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-2-sem.php" target="_blank"><h1>Sem-2</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Mechanical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-1-sem.php" target="_blank"><h1>Sem-1</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-2-sem.php" target="_blank"><h1>Sem-2</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Civil Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-1-sem.php" target="_blank"><h1>Sem-1</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-2-sem.php" target="_blank"><h1>Sem-2</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Electrical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ee-1-sem.php" target="_blank"><h1>Sem-1</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ee-2-sem.php" target="_blank"><h1>Sem-2</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Information Technology</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-1-sem.php" target="_blank"><h1>Sem-1</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-2-sem.php" target="_blank"><h1>Sem-2</h1></a>
          </div>
        </div>
         
        
      </div>
      <div class="modal-footer mf1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- modal 2 started here -->
<div class="modal modal1" tabindex="-1"id="second" >
  <div class="modal-dialog">
    <div class="modal-content mc1"> 
      <img src="modal.jpg">
      <div class="modal-header mh1">
        <h5 class="modal-title">Select Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb1">
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Computer Science Eng.</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-3-sem.php" target="_blank"><h1>Sem-3</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-4-sem.php" target="_blank"><h1>Sem-4</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Mechanical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-3-sem.php" target="_blank"><h1>Sem-3</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-4-sem.php" target="_blank"><h1>Sem-4</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Civil Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-3-sem.php" target="_blank"><h1>Sem-3</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-4-sem.php" target="_blank"><h1>Sem-4</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Electrical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ee-3-sem.php" target="_blank"><h1>Sem-3</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ee-4-sem.php" target="_blank"><h1>Sem-4</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Information Technology</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-3-sem.php" target="_blank"><h1>Sem-3</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-4-sem.php" target="_blank"><h1>Sem-4</h1></a>
          </div>
        </div>
         
        
      </div>
      <div class="modal-footer mf1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal 3 started here -->
<div class="modal modal1" tabindex="-1"id="third" >
  <div class="modal-dialog">
    <div class="modal-content mc1">
      <img src="modal.jpg">
      <div class="modal-header mh1">
        <h5 class="modal-title">Select Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb1">
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Computer Science Eng.</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="cse-5-sem.php" target="_blank"><h1>Sem-5</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="cse-6-sem.php" target="_blank"><h1>Sem-6</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Mechanical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="me-5-sem.php" target="_blank"><h1>Sem-5</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="me-6-sem.php" target="_blank"><h1>Sem-6</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Civil Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="ci-5-sem.php" target="_blank"><h1>Sem-5</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a  style="color: #fff;text-decoration: none;" href="ci-6-sem.php" target="_blank"><h1>Sem-6</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Electrical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="ee-5-sem.php" target="_blank"><h1>Sem-5</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="ee-6-sem.php" target="_blank"><h1>Sem-6</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Information Technology</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="it-5-sem.php" target="_blank"><h1>Sem-5</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;"  href="it-6-sem.php" target="_blank"><h1>Sem-6</h1></a>
          </div>
        </div>
         
        
      </div>
      <div class="modal-footer mf1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal 4 started here -->
<div class="modal modal1" tabindex="-1"id="fourth" >
  <div class="modal-dialog">
    <div class="modal-content mc1">
      <img src="modal.jpg">
      <div class="modal-header mh1">
        <h5 class="modal-title">Select Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb1">
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Computer Science Eng.</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-7-sem.php" target="_blank"><h1>Sem-7</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="cse-8-sem.php" target="_blank"><h1>Sem-8</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Mechanical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-7-semphp" target="_blank"><h1>Sem-7</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="me-8-semphp" target="_blank"><h1>Sem-8</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Civil Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-7-semphp" target="_blank"><h1>Sem-7</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ci-8-sem.php" target="_blank"><h1>Sem-8</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Electrical Eng.</h1>
          </div>
           <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="ee-7-sem.php" target="_blank"><h1>Sem-7</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;"href="ee-8-sem.php" target="_blank"><h1>Sem-8</h1></a>
          </div>
        </div>
        <div class="row row1">
          <div class="col-12  text-white mt-3">
            <h1>Information Technology</h1>
          </div>
          <div class="col-6 col1  text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-7-sem.php" target="_blank"><h1>Sem-7</h1></a>
          </div>
          <div class="col-6 col2 text-white mt-3">
            <a style="color: #fff;text-decoration: none;" href="it-8-sem.php" target="_blank"><h1>Sem-8</h1></a>
          </div>
        </div>
         
        
      </div>
      <div class="modal-footer mf1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- modal closed here -->


<!-- main dashboard started -->
<div class="container bg1">
  <div class="container">
    <h1 style="font-family: times-new-roman; font-weight: bolder; text-align: center; color: white;">Select Year</h1><br><br>
    <div class="row ">
      <div class="col-sm-4 first" data-target="#first" data-toggle="modal">
        
        <br><br><br><br><br>
        <h1>First Year</h1>
      </div>
      <div class="col-4">
        <br><br>
      </div>
      <div class="col-sm-4 second" data-target="#second" data-toggle="modal">
        <br><br><br><br><br>
        <h1>Second Year</h1>
      </div>
      <div class="col-sm-4 third" data-target="#third" data-toggle="modal">
        <br><br><br><br><br>
        <h1>Third Year</h1>
      </div>
      <div class="col-4">
        
      </div>
      <div class="col-sm-4 fourth" data-target="#fourth" data-toggle="modal">
        <br><br><br><br><br>
        <h1>Fourth Year</h1>
      </div>
    </div>
  </div><br><br>
  
</div>

<!-- Footer -->
<footer class="page-footer container font-small stylish-color-dark bg-dark pt-4">
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