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
    .top1 {
      height: auto;
      background-color:maroon!important;
      color: #fff;
      letter-spacing: 1px;
    }
    .nivu.scrolled 
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
    

    .nivu
    {
       background: linear-gradient(to right,#f3a183,#ec6f66);
    }
    

    .nav-link {
      color: #fff;
      font-weight: bolder;
    }

    .nav-link:hover {
      background: #f1f1f1;
    }
</style>
</head>
<body>

 <!-- Header opened -->
  <div class="container top sticky-top mt-0"style="background-color: #c40808;">
   
    <marquee>
      <h6 style="color: #fff;">Announcements : Upcoming midsem Exams Conducted Online</h6>
    </marquee>
  </div>
  <div class="container top1   ">
    <hr  style="border: 1px solid #a60000; margin:0;">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 ">
         <img class="tpimage" src="ipslogo.png" height="150px" width="150px;">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9  text-center  my-auto">
        <h1  class="text-center size">I.P.S Group Of Colleges</h1>
      </div>
      
      
    </div>
      <hr style="border: .1px solid #a60000; margin:0;">
    
    
  </div>
  <!-- Header closed -->

  <!-- navbar opened -->
  <nav class="container navbar navbar-expand-md navbar-light nivu sticky-top">

    <a class="navbar-brand m-auto float-left" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav text-white mr-auto " >
        <li class="nav-item text-white active ml-1 ">
          <a class="nav-link btn " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item text-white active ml-1">
          <a class="nav-link  btn " href="#">Academics</a>
        </li>
        <li class="nav-item text-white active ml-1">
          <a class="nav-link  btn " href="#">Admission</a>
        </li>
        <li class="nav-item text-white active ml-1">
          <a class="nav-link  btn  " href="#">About us </a>
        </li>
        <li class="nav-item text-white active ml-1">
          <a class="nav-link  btn  " href="#">Contact us </a>
        </li>
      </ul>
      <form class="form-inline  ">
        <li class="nav-item btn btn-light pb-2 abc mr-2 pr-2 " data-target="#logout" data-toggle="modal"> logout</li>
      </form>
    </div>
    <br><br>
  </nav>
 
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
 
<script>
 $(window).scroll(function(){
 $('nav').toggleClass('scrolled', $(this).scrollTop() > 10);
 });
</script>


</body>
</html>