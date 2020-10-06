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
  
  <title>CSE-6th-sem</title>
  <script type="text/javascript">
    function showdata1(){
       var x = document.getElementById("showdata1");
       var y = document.getElementById("showdata2");
       var z = document.getElementById("showdata3");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    x.style.display = "none";
  }
    }
    function showdata2(){
       var x = document.getElementById("showdata1");
       var y = document.getElementById("showdata2");
       var z = document.getElementById("showdata3");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
  } else {
    y.style.display = "none";
  }
    }
    function showdata3(){
       var x = document.getElementById("showdata1");
       var y = document.getElementById("showdata2");
       var z = document.getElementById("showdata3");
  if (z.style.display === "none") {
    z.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
  } else {
    z.style.display = "none";
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
    #showdata3{
      display: none;
    }
     .top {
      height: auto;
      background-color: darkblue;

    }

    .top ul {
      float: right;
    }

    .top .ul {
      float: left;
    }

    .top li,li p,h3 {
      display: inline-block;
      text-decoration: none;
       color: #ffcc00;
      margin-right: 14px;
    }

    .top .li {
      display: inline-block;
      text-decoration: none;
      color: white;
    }

    .top1 {
      background-color: #0000b2;
      letter-spacing: 2px;
    }
 @media only screen and (max-width: 576px) {
      .ul {
        display: none;
      }
    }

    @media only screen and (max-width: 992px) {
      .ul {
        display: none;
      }
    }
    .nav-link {
      color: black;
      font-weight: bolder;
    }

    .nav-link:hover {
      background: #f1f1f1;
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
.navbar-toggler
{
  color: black;
}
.tc a h1:hover
{

  border: 4px solid #333333;
  border-radius: 45px;
  color: white;
  background: linear-gradient(yellow,red);
}
.inline .col-lg-4{
  margin-top:150px;
}

section
{
   background: linear-gradient(to right, #0052d4,#65c7f7,#0052d4);
}
table td
{
  color: white;
  letter-spacing: 1px;
  font-weight: bold;
}
table th
{
  color: white;
  
  font-weight: bold;
  text-align: center;
}
.table-hover{
  background-color: #333;
}
 table
{
  background: linear-gradient(darkblue,lightblue);
}
.nivu
{
  margin-top: -8px;
}


  </style>
</head>
<body>
 <!-- Header opened -->
  <div class="container-fluid top sticky-top">
    <ul class="ul">
      <li class="li">
        <p style="font-size: 20px;font-weight: bold;">Call now:<a href="tel:123-456-7891"> 123-456-7891</a></p>
      </li>
      <li class="li">
        <p style="font-size: 20px;font-weight: bold;">mail to:<a href="mail to:ipsgoc@gmail.com"> ipsgoc@gmail.com</a>
        </p>
      </li>
    </ul>
    <ul>
      <a href="#">
        <li style="font-size: 20px;font-weight: bold;">Home</li>
      </a>
      <a href="#">
        <li style="font-size: 20px;font-weight: bold;">Contact Us </li>
      </a>
      <a href="#">
        <li style="font-size: 20px;font-weight: bold;">About Us</li>
      </a>
    </ul>
    <marquee>
      <h3 style="color: white">Latest News : B.tech Exams Conducted Online</h3>
    </marquee>
  </div>
  <div class="container-fluid top1 text-white text-center sticky-top">
    <h1 style="color: #ffcc00">I.P.S. Group Of Colleges</h1>
  </div>
  <!-- Header closed -->
  <!-- navbar opened -->
  <nav class="navbar navbar-expand-md  navbar-dark bg-dark nivu">
    <a class="navbar-brand m-auto float-left" href="#"><h1 style="letter-spacing: 1px;">IPS</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav text-white mr-auto " style="margin-left: 4px;">
        <li class="nav-item active ml-2 ">
          <a class="nav-link btn " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link  btn  ml-4" href="#">Academics</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link  btn  ml-4" href="#">Admission</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link  btn  ml-4" href="#">Student-Life</a>
        </li>
      </ul>
      
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0 " type="submit">Search</button>
        
       
      </form>
    </div>
  </nav>
  <!-- navbar closed -->

    <section>
  <div class="container-fluid inline row">
    <div class="col-lg-4 tc">
      <a href="#" style="font-weight: bolder; text-align: center; color: black;text-decoration: none; "><h1 onclick="showdata1()">Attendance</h1></a> 
    </div>
    <div class="col-lg-4  tc">
      <a href="#" style="font-weight: bolder; text-align: center; color: black;text-decoration: none;"><h1 onclick="showdata2()">MidSem1</h1></a> 
    </div>
    <div class="col-lg-4  tc">
      <a href="#" style="font-weight: bolder; text-align: center; color: black;text-decoration: none;"><h1 onclick="showdata3()">MidSem2</h1></a> 
    </div>
  </div><br><br>
  
  <div id="showdata1" >
    <table class="container-fluid table table-hover table-bordered">
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
      <td class="text-center">CS-601</td>
      <td class="text-center">Machine Learning</td>
      <form>
      <td colspan="2"><input type="date" name="date">
      <button class="btn btn-primary float-right" type="submit">submit</button>
       </td></form>
      
    </tr>
    <tr>
      <th >2</th>
      <td class="text-center">CS-602</td>
      <td class="text-center">Computer Networks</td>
      <form>
      <td colspan="2"><input type="date" name="date">
      <button class="btn btn-success float-right" type="submit">submit</button>
       </td></form>
    </tr>
    <tr>
      <th >3</th>
      <td class="text-center">CS-603</td>
      <td class="text-center">Compiler Design ( D.E )</td>
      <form>
      <td colspan="2"><input type="date" name="date">
      <button class="btn btn-danger float-right" type="submit">submit</button>
       </td></form>
    </tr>
    <tr>
      <th >4</th>
      <td class="text-center">CS-604</td>
      <td class="text-center">Project Management (O.E)</td>
      <form>
      <td colspan="2"><input type="date" name="date">
      <button class="btn btn-warning float-right" type="submit">submit</button>
       </td></form>
    </tr>
    
  </tbody>
</table>
  </div>
  <div id="showdata2">
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col"><h5>S.No</h5></th>
      <th scope="col"><h5>Subject Code</h5></th>
      <th scope="col"><h5>Subject Name</h5></th>
      <th scope="col"><h5>Enter the marks</h5> </th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <th >1</th>
      <td class="text-center">CS-601</td>
      <td class="text-center">Machine Learning</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-primary float-center" type="submit">Proceed...</button></a>
       </td>
      
    </tr>
    <tr>
      <th >2</th>
      <td class="text-center">CS-602</td>
      <td class="text-center">Computer Networks</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-success float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    <tr>
      <th >3</th>
      <td class="text-center">CS-603</td>
      <td class="text-center">Compiler Design ( D.E )</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-warning float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    <tr>
      <th >4</th>
      <td class="text-center">CS-604</td>
     <td class="text-center">Project Management (O.E)</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-danger float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    
  </tbody>
</table>
  </div>
  <div id="showdata3">
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col"><h5>S.No</h5></th>
      <th scope="col"><h5>Subject Code</h5></th>
      <th scope="col"><h5>Subject Name</h5></th>
      <th scope="col"><h5>Enter the marks</h5> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th >1</th>
      <td class="text-center">CS-601</td>
      <td class="text-center">Machine Learning</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-primary float-center" type="submit">Proceed...</button></a>
       </td>
      
    </tr>
    <tr>
      <th >2</th>
      <td class="text-center">CS-602</td>
      <td class="text-center">Computer Networks</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-success float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    <tr>
      <th >3</th>
      <td class="text-center">CS-603</td>
      <td class="text-center">Compiler Design ( D.E )</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-warning float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    <tr>
      <th >4</th>
      <td class="text-center">CS-604</td>
     <td class="text-center">Project Management (O.E)</td>
      <td colspan="2">
     <a href="#"> <button class="btn btn-danger float-center" type="submit">Proceed...</button></a>
       </td>
    </tr>
    
  </tbody>
</table>
  </div><br><br><br><br><br><br></section>
  <!-- Footer -->
<footer class="container-fluid page-footer font-small stylish-color-dark bg-dark pt-4 mt-2">
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