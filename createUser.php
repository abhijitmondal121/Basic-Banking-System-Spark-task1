<?php
include "partials/dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $balance = $_POST['balance'];


    if ($email==''||$name==''||$balance==''){
        echo"<script>alert('Please fill up all details')</script>";
    }
    else{  
      $sql = "INSERT INTO `spark_bank_1st` (`name`, `email`, `balance`) VALUES ('$name', '$email', '$balance')";
      $result = mysqli_query($conn, $sql);

      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
         
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

    }}




?>










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
    
<!-- navbar -->
<?php  include "partials/header.php";?>

<div class=" jumbo-bg jumbotron jumbotron-fluid" id="home"style=" padding:220px 0px;    background-image: url('img/d2.jpg');background-size: 100%; !important" >


<div class="container" >
    <center>    <h2 class="x my-3" style=" color:white;">Create a New User Account</h2></center>

<div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8">
        
<form method="POST"   style=" color:white;">

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Balance</label>
    <input type="Number" class="form-control"name="balance" id="exampleInputPassword1" placeholder="Enter balance..">
  </div>
    <br>
  <button type="submit" class="btn btn-block btn-primary ">Create</button>
</form>

    </div>
</div>
<div class="col-md-2"></div>



</div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>