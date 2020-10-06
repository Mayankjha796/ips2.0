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
  <title>Teacher's Dashboard</title>
    <style>
    .topbar{
      background: linear-gradient(#ec6f66,#f3a183);
      height: 80px;
    }
    .navbar{
      background: linear-gradient(#f3a183,#ec6f66);
      height: 100px;

    }
    .nav-link{
      color: white;
      font-weight: bold;
      font-size: 2em;
    }
    
  </style>
</head>
<body>

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
    
  </div><br>
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
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      
    </form>
  </div>
</nav>
<!-- navbar closed -->
</body>
</html>