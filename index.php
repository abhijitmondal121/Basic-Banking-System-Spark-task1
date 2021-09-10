
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
<?php  include "partials/header.php";?>

<!-- body -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="img/b4.jpg" alt="First slide"style="height:600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="img/b3.jpg" alt="Second slide"style="height:600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/b1.jpg" alt="Third slide" style="height:600px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>























<div class="container py-3">
    <center><h1>Welcome to User Bank</h1></center>
    <div class="row mt-5 py-3">

    <div class="card" style="width: 18rem;margin:30px;">
  <img class="card-img-top" src="img/user.jpg" alt="Card image cap" style="height:250px">
  <div class="card-body">
    <h5 class="card-title">Create User</h5>
  
    <a href="createUser.php" class="btn btn-primary">Click Here</a>
  </div>
</div>


<div class="card" style="width: 18rem;margin:30px;">
  <img class="card-img-top" src="img/money.jpg" alt="Card image cap" style="height:250px">
  <div class="card-body">
    <h5 class="card-title">Transfer Money</h5>
  
    <a href="transmoney.php" class="btn btn-primary">Click Here</a>
  </div>
</div>

<div class="card" style="width: 18rem;margin:30px;">
  <img class="card-img-top" src="img/tran.jpg" alt="Card image cap" style="height:250px">
  <div class="card-body">
    <h5 class="card-title">Transaction History</h5>
  
    <a href="transhistory.php" class="btn btn-primary">Click Here</a>
  </div>
</div>



    </div>







</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
