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
  <title></title>
  <style>
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
  <nav class="navbar navbar-expand-md  navbar-dark bg-dark nivu ">
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
      <button class="btn btn-primary">  <a href="logout.php">Logout</a></button>
        
       
      </form>
    </div>
  </nav>
  <!-- navbar closed -->
</body>
</html>