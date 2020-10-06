<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Teacher.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>month</title>
  <style >
    .bg
    {
       background-image: url(bg3.jpg);
       background-size: cover;
    }
    .topbar{
      background: linear-gradient(teal,black);
      height: 80px;
    }
    .navbar{
      background: linear-gradient(to right, teal,black);
      height: 100px;

    }
    .nav-link{
      color: white;
      font-weight: bold;
      font-size: 2em;
    }
    .ab1
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#ff00cc,#333399);
      color: white;
    }
    .ab2
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#ec6f66,#f3a183);
       color: white;
    }
    .ab3
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#43cea2,#185a9d);
       color: white;
    }
    .ab4
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#eecda3,#ef629f);
       color: white;
    }
    .ab5
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#59c173,#a17fe0,#5d26c1);
       color: white;
    }
    .ab6
    {
      
      height: 180px;
      border: 3px solid black;
      border-radius: 50%;
      background: linear-gradient(#f4c4f3,#fc67fa);
       color: white;
    }
    
    
   
    

    
    
  </style>
</head>
<body>
  
  <!-- top bar opened -->
  <div class="container-fluid topbar ">
    <div class="row">
      <div class="col-2">


      </div>
      <div class="col-8">
          <h1 style="font-weight: bold; font-size: 3em; text-align: center; color: white">I.P.S. Group Of Colleges</h1>
      </div>
      <div class="col-2">
          
      </div>
      
    </div>
    
  </div>
  <!-- topbar closed -->
  <!-- navbar opened -->
  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#"><img src="bg.jpg" style="height: 80px; width: 80px; border-radius: 50%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      
    </form>
  </div>
</nav>
<!-- navbar closed -->
  
  
<!-- main content-->
<div class="container-fluid bg text-center">
  <h1 style="font-size: 3em;">Semester Duration July-Dec</h1>
  <div class="row">
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br> <h1 class="ab1"><br>July</h1><br>
    </div><br><br><br><br>
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br> <h1 class="ab2"><br>August</h1><br>
    </div>
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br> <h1 class="ab3"><br>September</h1><br>
    </div>
     
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br><br> <h1 class="ab4"><br> October</h1><br><br><br><br>
    </div>
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br><br> <h1 class="ab5"><br>November</h1><br><br><br><br>
    </div>
    <div class="col-sm-4 "data-target="#first" data-toggle="modal">
     <br><br><br><br> <h1 class="ab6"><br>December</h1><br><br><br><br>
    </div>
     </div>
   </div>
    
<!-- modal started here -->
<div class="modal" tabindex="-1"id="first" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enter The Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 subject mt-3">
            <form  method="POST">
            <label for="date">Date:</label>
    <input type="date" id="date"  name="date" >
     
   <button type="submit"  name="submit" class="btn btn-primary"  style="font-weight: bold;">Submit</button>
    </form>
          </div>
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background: red">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php 
 if(isset($_POST['submit'])){
     $d=$_POST['date'];
     $sqldate="SELECT `date` FROM `attendence_student` WHERE 1";
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
            else{
                
            
     header("location:ftattendence101me.php?tarik=$d");
 }}
?>
 
  




<!-- footer started here -->
<div class="container-fluid bg-dark text-white  p-3 mt-2">
        <!-- title and search -->
        <div class="row">
          <div class="col-6">
            <h1>For More Offers and Special Deals</h1>
          </div>
          <div class="col-6 ">
            <p >Enter your Email here....</p>
            <hr style="height: 2px;color: white;background-color: white; ">
            <a href="#" class="btn btn-success" style="font-weight: bold;">Subcribe</a>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col-3">
            <div>
              <p><a href="#"><h3>How we can help you?</h3></a></p>
            </div>
          </div>
          <div class="col-9">
            <div>
              <hr style="height: 2px;color: white;background-color: white;margin-top: 7vh;">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div>
              <br>
              <p>customer service</p>
              <p>123-567-789</p>
              <p>example@gmail.com</p>
              <p>0751-2444152</p>
              <p>Gwalior,mp,India</p>
            </div>
          </div>
          <div class="col-9"><br>
            <div class="row">

              <div class="col-4">
                <p><a href="#">Shop All</a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#">FAQ </a></p>
              </div>

              <div class="col-4">
                <p><a href="#" class="fa fa-facebook"></a></p>
              </div>
            </div>
         

            <div class="row">
              <div class="col-4">
               <p> <a href="#">Mobiles Phones </a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#">Shipping Returns</a></p>
              </div>
              
              <div class="col-4">
               <p><a href="#" class="fa fa-google"></a></p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <p><a href="#">Tablets </a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#">Store Policy </a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#" class="fa fa-twitter"> </a></p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <p><a href="#">Acessiories</a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#">Payment Methods</a></p>
              </div>
              
              <div class="col-4">
                <p><a href="#" class="fa fa-pinterest"></a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <p><a href="#">About Us</a></p>
              </div>
              
              <div class="col-4">
                
              </div>
              
              <div class="col-4">
                <p><a href="#" class="fa fa-linkedin"></a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <p><a href="#">Contact us</a></p>
              </div>
              
              <div class="col-4">
                
              </div>
              
              <div class="col-4">
               
              </div>
            </div>

          </div>
        </div>
      </div>
<!-- footer closed here -->



</body>
</html>