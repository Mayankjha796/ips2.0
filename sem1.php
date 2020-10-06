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
	<title>first year sempage</title>
</head>
<body>
	<style >
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
    .hover:hover{
      font-size: 3em;
      font-weight: bolder;
    }
    .bg1{
      background: linear-gradient(#a770ef,#cf8bf3,#fdb99b);
    }
    .bg2{
      background: linear-gradient(#ffafbd,#ffc3a0);
    }
    .modal-content{
      background: linear-gradient(#33ccff,#ff99cc);
    }
    .subject a
    {   
      color: navy;

     }
    .subject a:hover
    {
      
      color: white;
    }
    .subject:hover
    {
      background-color: #F90808;
    }
		
	</style>
	<!-- top bar opened -->
	<div class="container-fluid topbar">
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
<div class="container-fluid  mt-2">
  <div class="row">
    <div class="col-6 bg1 text-white text-center"data-target="#first" data-toggle="modal">

      <br><br><br><br><br><br><h1 style="border-radius: 35px; border: 3px solid white; font-size: 4em">S-1</h1><h1 class="hover" style="padding-top: 30px;">First Semester>>>>></h1><br><br><br><br><br><br>
      
    </div>
    <div class="col-6 bg2 text-white text-center"data-target="#second" data-toggle="modal">
      <br><br><br><br><br><br><h1 style="border-radius: 35px; border: 3px solid white;font-size: 4em">S-2</h1><h1 class="hover" style="padding-top: 30px;">Second Semester>>>>></h1><br><br><br><br><br>
    </div>
  </div>
  
</div>
<!-- modal started here -->
<div class="modal" tabindex="-1"id="first" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href=sem1month.php style="text-decoration: none;"><h1>Engineering Chemistry</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
             <a href=sem1month.php style="text-decoration: none;"><h1>Engineering Physics</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href=sem1month.php style="text-decoration: none; "><h1>Engineering Mathematics</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a hrefsem1month.php style="text-decoration: none; "><h1>Engineering Graphics</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href="sem1month.php" style="text-decoration: none; "><h1>English</h1></a>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1"id="second" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href="month2.html" style="text-decoration: none;"><h1>Data Structure</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
             <a href="month2.html" style="text-decoration: none;"><h1>Discrete Structure</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href="month2.html" style="text-decoration: none; "><h1>Digital Systems</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href="month2.html" style="text-decoration: none; "><h1>Oops</h1></a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 subject mt-3">
            <a href="month2.html" style="text-decoration: none; "><h1>Environmental engineering</h1></a>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

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