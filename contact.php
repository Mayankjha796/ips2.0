<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
     
     
.top {
      height: auto;
      background-color: maroon;
    }

    .top ul {
      float: right;
    }

    .top .ul {
      float: left;
    }

    .top li {
      display: inline-block;
      text-decoration: none;
      color: white;
      margin-right: 14px;
    }

    .top .li {
      display: inline-block;
      text-decoration: none;
      color: white;
    }

    .top1 {
      background-color: #c40808;
      letter-spacing: 2px;
    }

    .nav-link {
      color: black;
      font-weight: bolder;
    }

    .nav-link:hover {
      background: #f1f1f1;
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
.address-icon i{
  font-size: 36px;
  line-height: 32px;
}
.icons i{
  color: #fff;
  padding: 8px 0px;
  text-align: center;
  height: 30px;
  width: 30px;
  margin-right: 5px;
}
.fa-facebook{
  background-color: #3A5A99; 
}
.fa-twitter{
  background-color: #39CBFA;
}
.fa-linkedin{
  background-color: #3D99C0;
}
.fa-github{
  background-color: #000;
}
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
    <h1>I.P.S. Group Of Colleges</h1>
  </div>
  <!-- Header closed -->
  <!-- navbar opened -->
  <nav class="navbar navbar-expand-md  navbar-light nivu">
    <a class="navbar-brand m-auto float-left" href="#"><img src="final logo.png" alt="logo"
        style="height: 80px; width: 80px; border-radius: 50%;"></a>
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
      <div class="dropdown" style="z-index: 2;">
    <button class="btn btn-outline-success dropdown-toggle my-2  mr-2 " type="button" data-toggle="dropdown">Login
    </button>
    <ul class="dropdown-menu" style="z-index: 2;" >
      <li><a style="color: black;" href="student_dashboard.html">Student login</a></li>
      <li><a style="color: black;" href="teacher.html">Faculty Login</a></li>
      
    </ul>
  </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0 " type="submit">Search</button>
        
       
      </form>
    </div>
  </nav>
  <!-- navbar closed -->
    <br><br>
    <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              <div class="row">
                  <div class="col-lg-12 col-12 p-0 contact-us">
                    <h4 class="">CONTACT US</h4><hr>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-12">
                   <h2>Campus Address:</h2><br>
                  <h2>Institute of Professional Studies</h2>
                  <h6>P.O. IPS College, Shivpuri Link Road</h6>
                  <h6>Gwalior (M.P.), India - 474001</h6>
                  <h6>Mobile: 9285022400,9285032400,9285052400,9285062400,9285072400,9285082400</h6>
                  <h6>Fax: 2427806</h6>
                  <h6>Email: ipsgwalior@gmail.com</h6>
                  <h6>info@ipsgwalior.org</h6> 
                  </div>
                  <div class="col-lg-4 col-4">
                      <h4>CITY OFFICES</h4>
                      <h6>B-2, Near Silver Estate</h6>
                      <h6>University Road,</h6>
                      <h6>Gwalior (M.P.), India - 474011</h6>
                      <h6>Tel: 0751-4008097    </h6>                   
                  </div>
                  <div class="col-lg-4 col-4">
                  <p class="m-0 text-danger"><i class="fa fa-phone-square" aria-hidden="true"></i>
                      +91 1234567890
                  </p>
                  <p class="m-0 text-info"><i class="fa fa-envelope" aria-hidden="true"></i>
                      example@gmail.com
                  </p>
                  </div>
                  <div class="col-lg-4 col-4 address-icon text-center text-danger">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-6 col-12">
                    <form>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First Name :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last Name :">
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Email :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Mobile :">
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message :"></textarea>
                      </div>
                      <button type="submit" class="btn btn-danger mb-4">Send</button>
                    </form>
                  </div>
                  <div class="col-lg-6 col-12">
                    <h4>Google Map</h4>
                      <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.798049105024!2d78.10400921419696!3d26.13812689929825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976cff4b67beca5%3A0x942c5fb9066f536f!2sIPS%20Group%20of%20Colleges%20Gwalior!5e0!3m2!1sen!2sin!4v1600281405407!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                     
                  </div>
              </div>
          </div>
      </div>
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
  <!-- Footer -->
</body>
</html>