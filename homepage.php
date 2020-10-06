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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <!-- javascript portion  -->
  <script type="text/javascript">
    
     function F1() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (a.style.display === "none") {
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
      } else {
        a.style.display = "none";
      }
    }
    function F2() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (b.style.display === "none") {
        a.style.display = "none";
        b.style.display = "block";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
      } else {
        b.style.display = "none";
      }
    }
    function F3() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (c.style.display === "none") {
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "block";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
      } else {
        c.style.display = "none";
      }
    }
    function F4() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (d.style.display === "none") {
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "block";
        e.style.display = "none";
        f.style.display = "none";
      } else {
        d.style.display = "none";
      }
    }
    function F5() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (e.style.display === "none") {
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "block";
        f.style.display = "none";
      } else {
        e.style.display = "none";
      }
    }
    function F6() {
      var a = document.getElementById("F1");
      var b = document.getElementById("F2");
      var c = document.getElementById("F3");
      var d = document.getElementById("F4");
      var e = document.getElementById("F5");
      var f = document.getElementById("F6");
      if (f.style.display === "none") {
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "block";
      } else {
        f.style.display = "none";
      }
    }
  </script>
  <!-- javascript ended -->
  <title>Homepage</title>
  <style>
    body{}
     .top1 {
      height: auto;
      background-color: white!important;
      color: #c40808;
      letter-spacing: 1px;
    }
        .top1.scrolled {
             
            opacity: 0.7;
            height: 70px;
        }
        .top1 .scrolled img{
          height: 100px;
          width: 100px;
        }
        .size.scrolled{
          font-size: 20px;
        }
    .nivu
    {
      background-color: white;
    }
    

    .nav-link {
      color: black;
      font-weight: bolder;
    }

    .nav-link:hover {
      background: #f1f1f1;
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


    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bbb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 25px;
    }

    .container.parallax {
      background-image: url('para.png');
      height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #F9F9F9;
    }

    .middle {
      width: 100%;
    }

    .counting-sec {
      width: 100%;
      background: linear-gradient(90deg, #3c6382, #82ccdd);
    }

    .inner-width {
      max-width: 1200px;
     
    }

    .call {
      flex: 1;
      text-align: center;
      padding: 20px;

      color: #fff;
      text-transform: uppercase;
    }

    .call i {
      font-size: 40px;
      color: #333;
      margin-right: 20px;
    }

    .num {
      font-size: 40px;
      margin: 20px 0;
    }

    .image img {
      height: 250px;
      width: 250px;
      border-radius: 15px;
    }

    #F2 {
      display: none;
    }

    #F3 {
      display: none;
    }

    #F4 {
      display: none;
    }

    #F5 {
      display: none;
    }

    #F6 {
      display: none;
    }

    .f1 .col-lg-2 h3:hover {
      background-color: #f1f1f1;
    }

    .roww {
      background: #f1f1f1;
    }

    iframe {
      border-radius: 12px;
    }

    .call7 {
      border-radius: 12px;
      width: 100%;
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

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }

    .image1 img {
      
      margin-top: 20px;
      margin-right: 70px;
      height: 75px;
    }

    .image2 img {
      height: 200px;
      width: 100%;
    }

    .activee,
    .text:hover {

      color: #c40808;
     
    }

    .boder h3 {
      
      
      border: 1px solid #BFBDBD;
      padding: 10px;
     
      border-radius: 7px;
    }
    .aagepiche
    {
      background-color: white;
    }
    .Overview
    {
      background-color: white;
    }
   

  </style>
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- Header opened -->
  <div class="container top  mt-0"style="background-color: white;">
   
    <marquee>
      <h6 style="color: maroon">Announcements : Upcoming midsem Exams Conducted Online</h6>
    </marquee>
  </div>
  <div class="container top1  sticky-top ">
    <hr  style="border: 1px solid #F9F9F9; margin:0;">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 ">
         <img class="tpimage" src="ipslogo1.png" height="150px" width="150px;">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9  text-center  my-auto">
        <h1  class="text-center size">I.P.S Group Of Colleges</h1>
      </div>
      
      
    </div>
      
    
    
  </div>
  <!-- Header closed -->

  <!-- navbar opened -->
  <nav class="container navbar navbar-expand-md navbar-light nivu ">

    <a class="navbar-brand m-auto float-left" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav text-white mr-auto " >
        <li class="nav-item active ml-1 ">
          <a class="nav-link btn " href="#">Home <span class="sr-only">(current)</span></a>
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
      <form class="form-inline  ">
       
        
        
        <a href="login.php" class="btn btn-info mr-2 ml-3" role="button">Login</a>
      </form>
    </div>
    <br><br>
  </nav>
  <!-- navbar closed -->
  <!-- Slider opened -->
  <div id="carouselExampleCaptions" class="container carousel slide aagepiche shadow-lg" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="ips1.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item ">
        <img src="ips2.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item ">
        <img src="ips3.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
          <h3>IPS College of Pharmacy</h3>
          <a href="#"> <button class="btn btn-primary button" type="submit"> <span>Know more</span></button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ips5.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="ips10.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="ips19.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="ips17.jpg" class="d-block w-100" alt="..."style="border-radius: 8px;">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Slider closed -->
 <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <!-- Overview opened -->
  <div class="container Overview">
    <div class="row">
      <div class="col-lg-5">
        <hr style="border: 1px solid green">
      </div>
      <div class="col-lg-2 text-center">
        <h2>Overview</h2>
      </div>
      <div class="col-lg-5">
        <hr style="border: 1px solid green">
      </div>
    </div>
  </div>
  <div class="container" style="background-color: white;" >
    <br style="background-color: white;margin: 0;">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 text-center"  style="border-radius: 8px;">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <!-- The slideshow -->
          <div class="carousel-inner" style="border-radius: 8px;">
            <div class="carousel-item active ">
              <img style="height: 210px; border-radius: 8px;" src="ips3.jpg" alt="Los Angeles"  >
            </div>
            <div class="carousel-item">
              <img  style="height: 210px; border-radius: 8px;" src="ips5.jpg" alt="Chicago" >
            </div>
            <div class="carousel-item">
              <img  style="height: 210px;border-radius: 8px;" src="ips13.jpg" alt="New York" >
            </div>
            <div class="carousel-item">
              <img  style="height: 210px;border-radius: 8px;" src="ips21.jpg" alt="Chicago" >
            </div>
            <div class="carousel-item">
              <img  style="height: 210px;border-radius: 8px;" src="ips18.jpg" alt="New York" >
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12 text-center">
       <br> <p>
          The IPS Group of Colleges is not just a group of institutions which imparts value-based education, but an experience where everyone associated is part of a dream, a mission to see a qualitative change in the educational scenario of the state. We believe that our youth have the intelligence, the talent, and the potential to be the most successful people.
At IPS, we groom young future leaders to be complete, value-driven human beings and competent professionals. We try to inculcate in each student, by example, the spirit of commitment, loyalty, sincerity, and values. Here, research and teaching go hand-in-hand providing students with the opportunity to work with professionals in their respective fields.
<br><br>
        </p>
      </div>
    </div>
  </div>
  <!-- Overview Closed -->
  <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <!-- Facilities opened -->
  <div class="container "style="background-color: white;">
    <div class="row">
      <div class="col-lg-5">
        <hr style="border: 1px solid purple;">
      </div>
      <div class="col-lg-2 text-center">
        <h2>Facilities</h2>
      </div>
      <div class="col-lg-5">
        <hr style="border: 1px solid purple;">
      </div>
    </div>
  </div>
 <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <div class="container f1 "style="background-color: white;">
    <div class="row text-center " id="mytext">

      <div class="col-lg-2  boder text activee" >
        <h3 onclick="F1()">Infra</h3></a>
      </div>
      <div class="col-lg-2 text  boder"onclick="F2()">
        <h3 >Why IPS</h3></a>
      </div>
      <div class="col-lg-2 text  boder"onclick="F3()">
        <h3 >Sports</h3></a>
      </div>
      <div class="col-lg-2 text  boder"onclick="F4()">
        <h3 >Labs</h3></a>
      </div>
      <div class="col-lg-2 text  boder"onclick="F5()">
        <h3 >Library</h3></a>
      </div>
      <div class="col-lg-2 text  boder"onclick="F6()">
        <h3 >Events</h3></a>
      </div>

    </div>
  </div>
  <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <!-- First Facility opened -->
  <div id="F1">
    <div class="container image"style="background-color: white;">
      <div class="row image2">
        <div class=" col-lg-3 col-sm-12 col-md-6">
          <img src="ips8.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
          <img src="ips7.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
          <img src="ips6.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
          <img src="ips5.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 d-none d-md-block">
          <img src="ips4.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 d-none d-md-block">
          <img src="ips3.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 d-none d-md-block">
          <img src="ips2.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 d-none d-md-block">
          <img src="ips1.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      <p class="text-justify" style="color: #c40808;"><b>Virtual Tour of IPS Group of colleges</b>
        <p class="text-justify">Welcome to IPS Group of colleges, Gwalior. You can go through all the information regarding College
          Academics, Admissions, Research and Events here. Located near Bela ki bawdi,Shivpuri link road,Gwalior , IPS
          promises a host of courses and activities to continuously develop, evolve and innovate the learning
          environment of the future Einsteins and Teslas.</p>
      </p>
      <div class="container"style="background-color: white;">
   <br>
 </div>
    </div>
  </div>
  <!-- First Facility closed -->
  
  <!-- third Facility opened -->
  <div id="F3">
    <div class="container image "style="background-color: white;">
      <div class="row image2">
        <div class="col-sm-3">
          <img src="sp8.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp7.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp6.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp5.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp4.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp3.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp2.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="sp1.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      
        <p class="text-justify">The Institute of Professional Studies (IPS), founded in the year 2005 with a vision to convert the potential of today's youth into productive human resource of the society, has always promoted the belief that emotional, intellectual, and physical lives are interconnected, just as people's lives are intertwined throughout the society. The Group believes in the philosophy-"education of the whole person in spirit, mind and body"-which is its guiding principle. It is based on the understanding that all people regardless of caste, religion, background, or upbringing have tremendous potential. This potential is explored and exploited by providing several value-addition programs to enrich the lives of its students. They are prepared to think critically, and to recognize how their endeavors contribute to the well-being of the society, and the country at large. The IPS Group of Colleges is one of the younger educational institutions of the state of Madhya Pradesh. During the initial phase of the college, it came up of with College Of Education and within a span of five years, the IPS-Group of Colleges has grown to contain four colleges with over 2,000 students.</p>
      <br>
    </div>
  </div>
  <!-- third Facility closed -->
  <!-- second Facility opened -->
  <div id="F2">
    <div class="container image "style="background-color: white;">
      <div class="row image2">
        <div class="col-sm-3">
          <img src="ips23.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ips24.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ips25.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ips11.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      <h2 style="color: #c40808;border-bottom: 2px solid black;">Reasons to choose IPS</h2><br><br>
      <ul class="text-justify" style="line-height: 1;" >
        <li>
          <p>An institution where the best faculty, students and recruiters come.</p>
        </li>
        <li>
          <p>World class academic infrastructure with 80 acre vast campus.</p>
        </li>
        <li>
          <p>A serene, enchanting location surrounded by hills.</p>
        </li>
        <li>
          <p>Qualified, experienced and competent faculty, fulfilling AICTE, PCI, and University norms.</p>
        </li>
        <li>
          <p>Ideal teacher-student ratio enabling personalized attention.</p>
        </li>
        <li>
          <p>Innovative pedagogical approaches.</p>
        </li>
        <li>
          <p>Rich and computerized libraries.</p>
        </li>
        <li>
          <p>Hi-tech smart classes.</p>
        </li>
        <li>
          <p>Full-fledged Training & Placement Cell.</p>
        </li>
        <li>
          <p>Industry-Institute Interface program.</p>
        </li>
        <li>
          <p>Air-conditioned seminar halls and conference rooms.</p>
        </li>
        <li>
          <p>Well-equipped laboratories.</p>
        </li>
        <li>
          <p>Highly interactive language laboratories.</p>
        </li>        
      </ul>
    </div>
  </div>
  <!-- second Facility closed -->
  <!-- Fourth Facility opened -->
  <div id="F4">
    <div class="container image "style="background-color: white;">
      <div class="row image2">
        <div class="col-sm-3">
          <img src="lab8.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab7.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab6.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab5.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab4.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab3.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab2.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="lab1.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      <p>
        <p class="text-justify">With the addition of Language labs, Computer Graphics and multimedia lab and other department specific labs,
          the College offers a diverse 360-degree learning environment to the students. A high-speed network runs
          through different departments to facilitate effective communication and internet access. Licensed Software’s
          like Microsoft Campus Agreement which includes Windows XP, MS Office, MS Visual Studio, MS SQL Server, MSDN
          are present to ensure a smooth and clear understanding of the concepts being taught. To know more about other
          department-specific laboratories browse to the ‘Student Zone’ section of the website.</p>
      </p><br>
    </div>
  </div>
  <!-- fourth Facility closed -->
  <!-- fifth Facility opened -->
  <div id="F5">
    <div class="container image "style="background-color: white;">
      <div class="row image2">
        <div class="col-sm-3">
          <img src="li8.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li7.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li6.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li5.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li4.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li3.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li2.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="li1.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      <p>
        <p class="text-justify">The Central Library is one of the largest library spaces in the entire state. IPS College has been
          continuously updating the library in both ways (print as well as online) with huge collections of books and
          online resources. Digital library has also been developed by University with 45 Personal Computers. In-fact
          the Multimedia room is especially dedicated to the online storage of web lectures, journals and e-content.
          Well-maintained spacious reading rooms are available with reference sections consisting of various journals,
          books, magazines and newspapers. </p>
      </p><br>
    </div>
  </div>
  <!-- fifth Facility closed -->
  <!-- sixth Facility opened -->
  <div id="F6">
    <div class="container image "style="background-color: white;">
      <div class="row image2">
        <div class="col-sm-3">
          <img src="ips8.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ips7.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev6.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev5.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev4.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev3.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev2.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
        <div class="col-sm-3">
          <img src="ev1.jpg" class="img-thumbnail ml-2 mt-3">
        </div>
      </div>
      <br>
      <p>
        <p class="text-justify">Full of vibrant colors and creativity, Vilay is a two-day annual fest. All colleges of IPS Group confluence
          on this occasion to celebrate the grand "Festive Odyssey". This annual fest is held in the month of Feb-March
          when nature calls for spring season. Amidst an aroma of spring, the college corridors come alive with
          students' activities. It provides a platform for various innovative competitions like singing, dancing, music,
          mimicry, acting, poetry, rangoli , poster making and the like. Based on socially relevant themes and carrying
          value-based messages the students imbibe values while enjoying the fest. Students are bestowed with prizes and
          certificates to recognize their efforts and celebrate their talents.
          2020 </p>
      </p><br>
    </div>
  </div>

  <!-- sixth Facility closed -->
<div class="container"style="background-color: white;">
   <br><br>
 </div>
  <!--Countdown With Parallax opened -->
  <div class="container parallax "style="background-color: white;"><br><br><br><br><br>
    <div class="container middle">
      <div class="counting-sec "style="border-radius: 8px;">
        <div class="inner-width " >
          <div class="row">
            <div class="col-sm-3 call text-center">
              <i  class="fa fa-calendar"></i>
              <div class="num mb-0">50000</div>
              Admission
            </div>
            <div class="col-sm-3 call text-center">
              <i class="fa fa-briefcase"></i>
              <div class="num mb-0">38000</div>
              Placement
            </div>
            <div class="col-sm-3 call text-center">
              <i class="fa fa-graduation-cap text-center"></i>
              <div class="num mb-0 ">500</div>
              This year
            </div>
            <div class="col-sm-3 call text-center">
              <i class="fa fa-object-group"></i>
              <div class="num mb-0">15000</div>
              Above 5 lac(per annum)
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container"style="background-color: white;">
   <br>
 </div>
  <!--Countdown With Parallax closed -->
  <!-- Know more Start -->
  <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <div class="container"style="background-color: white;">
    <div class="row">
      <div class="col-lg-5">
        <hr style="border: 1px solid green">
      </div>
      <div class="col-lg-2 text-center">
        <h2>Know.more</h2>
      </div>
      <div class="col-lg-5">
        <hr style="border: 1px solid green">
      </div>
    </div>
  </div><div class="container"style="background-color: white;">
   <br><br>
 </div>
  <div class="container video"style="background-color: white;">
    <div class="container ">
      <div class="row  ">
        <div class="col-lg-5 text-center" >
          <iframe class="text-center responsive-iframe mt-5 img-thumbnail" src="https://www.youtube.com/embed/h5MUOGXE70w"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        <div class="col-lg-7  call7">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-block w-100 text-center text-grey img-thumbnail">
                  <h2 style="line-height: 1;">IPS Group of Colleges</h2><br>
                  <h3 class="text-left" style="line-height: 1; margin-top: -8px;" >Courses Offer:</h3><br>
                  
                 <ul class="text-left">
                  <li>
                    <h5>Btech,Mtech,BCA</h5>
                  </li>
                  <li> <h5>B.Com,M.Com.BBA,B.ed,Bp.ed</h5></li>
                   <li>
                  <h5> B.Pharma,D.Pharma,Diploma Courses Etc.</h5><br>
                 </li>
                 </ul>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block w-100 text-center text-grey img-thumbnail ">
                  <h2>IPS College of Technology <br>& <br>Management</h2><br>
                  <h3 class="text-left" style="line-height: 1; margin-top: -8px;margin-left: 10px;" >Branches Offer:</h3>
                  <ul class="text-left">
                    <li>
                      <h5>Computer Science , Mechanical Engineering , Civil Engineering,Electrical Engineering, Electronics Engineering,Information Technology</h5>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="d-block w-100 text-center text-grey img-thumbnail">
                  <h2>IPS College of Education</h2><br>
                  <h3 class="text-left" style="line-height: 1; margin-top: -8px;" >Courses Offer:</h3>
                  <ul class="text-left">
                    <li>
                      <h5>BCA</h5>
                    </li>
                    <li>
                      <h5>B.Com </h5>
                    </li>
                    <li>
                      <h5>M.Com</h5>
                    </li>
                    <li>
                      <h5>BBA</h5>
                    </li>
                    <li>
                      <h5>Diploma Courses Etc.</h5>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block w-100 text-center text-grey img-thumbnail">
                  <h2>IPS College of Pharmacy</h2><br>
                  <h3 class="text-left" style="line-height: 1; margin-top: -8px;" >Courses Offer:</h3><br>
                  <ul class="text-left">
                    <li>
                      <h5>B.Pharma,D.Pharma </h5>
                    </li>
                    
                    <li>
                      <h5>Diploma Courses Etc.</h5><br><br>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="d-block w-100 text-center text-grey img-thumbnail">
                  <h2>Admission Helpline</h2><br>
                  <h3 class="text-left" style="line-height: 1; margin-top: -8px;" >Counselling-Cell :</h3><br>
                  <div class="row">
                    <div class="col-sm-6">
                      <p><b>Engg.</b>8718805024,</p>
                    </div>
                    <div class="col-sm-6">
                      <p><b> D.Pharm. /B.Pharm. / MBA</b> 9329467739 / 7000754195</p>
                    </div>
                    <div class="col-12">
                      <p><b>BBA / BCA / B.Ed./ M.Ed./ B.P.Ed./ M.P.Ed./ B.Com. / B.Com.(Computer Application) /
                          B.Sc.(PCM) / B.Sc.(Computer Science) </b>: 9425336344, 8718805029</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="d-block w-100 text-center text-grey img-thumbnail">
                  <h2>Campus</h2>
                  <h2>Institute of Professional Studies</h2>
                  <h6>P.O. IPS College, Shivpuri Link Road</h6>
                  <h6>Gwalior (M.P.), India - 474001</h6>
                  <h6>Mobile: 9285022400,9285032400,9285052400</h6>
                  <h6>Fax: 2427806</h6>
                  <h6>Email: ipsgwalior@gmail.com</h6>
                  <h6>info@ipsgwalior.org</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Know more closed -->
  <div class="container"style="background-color: white;">
   <br>
 </div>
  <!-- Placement Start -->
  <div class="container"style="background-color: white;">
    <div class="row">
      <div class="col-lg-5">
        <hr style="border: 1px solid red;">
      </div>
      <div class="col-lg-2 text-center">
        <h2>Placements</h2>
      </div>
      <div class="col-lg-5">
        <hr style="border: 1px solid red;">
      </div>
    </div>
  </div><div class="container"style="background-color: white;">
   <br>
 </div>
  <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel"style="background-color: white;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-12  mt-4 float-center">
              <div class="card  border-success" style="">
                <img class="card-img-top mx-auto " src="p1.jpg" alt="Card image" style="width:50%; border-radius: 8px;margin-top: 30px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Sharvani </h4>
                  <h5 class="card-text"> Jaro Education</h5>
                  <p class="card-text">At IPS College, I have been given unique platform and exposure to enhance my skills and showcase them...</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4  float-center">
              <div class="card border-primary" style="">
                <img class="card-img-top mx-auto" src="p2.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Alpas Shrivastava</h4>
                  <h5 class="card-text"> Byju's</h5>
                  <p class="card-text"> I collected countless of  memories and experienced a lot of wonderful opportunities during college life .</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4  float-center">
              <div class="card border-danger" style="">
                <img class="card-img-top mx-auto" src="p3.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Rohan Chawan</h4>
                  <h5 class="card-text">TCS</h5>
                  <p class="card-text">I am grateful Training & Placement Cell of College. Ips College provides a platform for skills enhancement.</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mt-4  float-center">
              <div class="card border-danger" style="">
                <img class="card-img-top mx-auto" src="pn1.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Nikita Saxena</h4>
                 
                  <h5 class="card-text">TCS</h5>
                  <p class="card-text"> I heartedly thank Training & Placement Cell for support. IPSCTM proved to be a pool of opportunities for me.</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-secondary " style="">
                <img class="card-img-top mx-auto" src="p4.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Shobhit Dwivedi</h4>
                 
                  <h5 class="card-text">TCS/WIPRO</h5>
                  <p class="card-text"> I am grateful Training & Placement Cell of College. Ips College provides a platform for skills enhancement</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-warning" style="">
                <img class="card-img-top mx-auto" src="p5.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Bhavana Parihar</h4>
                  
                  <h5 class="card-text"> Radixweb Ltd.</h5>
                  <p class="card-text"> I heartedly thank Training & Placement Cell for support. IPSCTM proved to be a pool of opportunities for me.</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-dark" style="">
                <img class="card-img-top mx-auto" src="p6.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Shivanshu Dubey</h4>
                  
                  <h5 class="card-text"> Radixweb Ltd.</h5>
                  <p class="card-text">  I collected countless of  memories and experienced a lot of wonderful opportunities during college life .</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mt-4  float-center">
              <div class="card border-danger" style="">
                <img class="card-img-top mx-auto" src="p3.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Mohit Chawan</h4>
                 
                  <h5 class="card-text">TCS</h5>
                  <p class="card-text"> At IPS College, I have been given unique platform and exposure to enhance my skills and showcase them...</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-info" style="">
                <img class="card-img-top mx-auto" src="p7.jpg" alt="Card image"  style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Suraj Bhargava</h4>
                  
                  <h5 class="card-text"> Radixweb Ltd.</h5>
                  <p class="card-text">  I am grateful Training & Placement Cell of College. Ips College provides a platform for skills enhancement</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-danger" style="">
                <img class="card-img-top mx-auto" src="p8.png" alt="Card image"  style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Saurabh Suman</h4>
                 
                  <h5 class="card-text"> Wipro</h5>
                  <p class="card-text"> I heartedly thank Training & Placement Cell for support. IPSCTM proved to be a pool of opportunities for me</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 float-center">
              <div class="card border-primary" style="">
                <img class="card-img-top mx-auto" src="pn2.jpg" alt="Card image"  style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Tanya Agrawal</h4>
                 
                  <h5 class="card-text"> Wipro</h5>
                  <p class="card-text">  I will always  be grateful to them for  of practical learning and preparing me for the corporate life.</p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div> 
             <div class="col-lg-3 col-md-6 col-sm-12 mt-4  float-center">
              <div class="card border-danger" style="">
                <img class="card-img-top mx-auto" src="pn3.jpg" alt="Card image" style="width:50%;margin-top: 30px;border-radius: 8px;">
                <div class="card-body text-center">
                  <h4 class="card-title">Chetan Vyas</h4>
                  
                  <h5 class="card-text">TCS</h5>
                  <p class="card-text"> Being successful in student's life depends on how seriously it taken. The college  helps grow up fast . </p>
                  <a href="#" class="btn btn-primary button"><span>See Profile</span></a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Placement closed -->
 <div class="container"style="background-color: white;">
   <br><br>
 </div>
  <!-- recruiters Start -->
  <div class="container"style="background-color: white;">
    <div class="row">
      <div class="col-lg-5">
        <hr style="border: 1px solid orange;">
      </div>
      <div class="col-lg-2 text-center">
        <h2>Recruiters</h2>
      </div>
      <div class="col-lg-5">
        <hr style="border: 1px solid orange;">
      </div>
    </div>
  </div><div class="container"style="background-color: white;">
   <br><br>
 </div>
             <div class="container image1"style="background-color: white;">
              <marquee behaviour="scroll"direction="left"scrollamount="8">
              <img src="c1.jpg">
              <img src="c7.jpg">
              <img src="c3.jpg">
              <img src="c4.jpg">
              <img src="c5.jpg">
              <img src="c6.jpg">
              <img src="c7.jpg">
              <img src="c8.jpg">
              <img src="c9.jpg">
              <img src="c4.jpg">
              <img src="c11.jpg">
              <img src="c1.jpg">
              <img src="c6.jpg">
              <img src="c9.jpg">
              <img src="c15.jpg">
            </marquee>
               
             </div>






  <div class="container"style="background-color: white;">
   <br><br>
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
  <!-- Footer -->
  <script type="text/javascript">
    $(".num").counterUp({ delay: 10, time: 1000 });
  </script>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("mytext");
    var btns = header.getElementsByClassName("text");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("activee");
        current[0].className = current[0].className.replace(" activee", "");
        this.className += " activee";
      });
    }
  </script>
  <script>
 $(window).scroll(function(){
 $('div').toggleClass('scrolled', $(this).scrollTop() > 10);
 });
</script>
</body>

</html>