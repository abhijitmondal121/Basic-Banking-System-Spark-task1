<?php  
include "partials/dbconnect.php";
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `spark_bank_1sta` WHERE `slno` = $sno";
  $result = mysqli_query($conn, $sql);
}

?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Ask My Result!</title>

</head>
<style>
  h1{
    margin: 30px;
    font-size:58px;
    font-family: Georgia, serif;
  }
  td{
  color:white;
  background: black;
}
th{
  color:white;
  background: black;
}


  @media screen and (min-device-width: 294px) and (max-device-width: 500px){

h1{
  font-size:26px;
}}
</style>
<body>


 <?php  include "partials/header.php";?>

<div class=" jumbo-bg jumbotron jumbotron-fluid" id="home"style=" padding:180px 0px;    background-image: url('img/d2.jpg');background-size: 100%; !important" >




      <center><h1 class="x" style="color:white;">Transfer History</h1></center><br>


  <div class="container my-4 pl-2 pr-3" style="color:white;">
  <div class="row" style="color:white;">
    <div class="col-md-12" style="color:white;">

    <table class="table" id="myTable" style=" color:white; ">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">From</th>
          <th scope="col">To</th>
          <th scope="col">Balance</th>

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `spark_bank_1sta`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name-from'] . "</td>
            <td>". $row['name-to'] . "</td>
            <td>". $row['amount'] . "</td>

            <td> <button class='delete btn btn-sm btn-warning' id=d".$row['slno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
       
  </div>
  </div>
  </div>

  <!-- <?php include "partials/footer.php";  ?> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this details!")) {
          console.log("yes");
          window.location = ` /bank/transhistory.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
 

</body>

</html>
