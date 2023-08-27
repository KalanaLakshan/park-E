<?php
include 'conection.php';
$query = "SELECT * FROM bill";
$result = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Park-E</title>
    <link href="https://fontawesome.com/docs/web/setup/host-yourself/webfonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="../css/style.css" type="text/css" rel="stylesheet">
    <script src="js/password.js" type="text/javascript"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js”></script>



<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />



<style>

/* body{
  background: #0d0c2d;
} */
</style>
</head>
    <body>
 <!-- start header bar-->
<div class="row contents" >
 <nav class="navbar navbar-dark bg-dark fixed-top" >
  <div class="container-fluid ">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

    
  
    <a class="navbar-brand" href="#" id="logo"> Park-E</a>
    
    <a href="http://localhost/park-e2/php/Setting.php" class="material-symbols-outlined float-end fs-1 ">settings</a>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        
        <a href="../index.php" class="material-symbols-rounded">
        home
        </a>
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Selection Bar</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/park-e2/php/dashboard%20.php">Dash Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="V_in.php">Vehicle In </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="V_out.php">Vehicle Out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="income.php">Daily Income</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">Billing History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Setting.php">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOG OUT</a>
          </li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</nav>
</div>
<!--end header bar-->
<!--start dashboard -->
<section id="dashboard">
  <div class="contents" style="padding-left: 250px; padding-right:250px; padding-top:150px; padding-bottom:150px;">
  <div class=" cols-md-6">
      <h1 class="topic text-center"> Billing History</h1>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <button type="button" class="btn btn-outline-secondary"  onclick="document.location='http://localhost/park-e2/php/dashboard%20.php'"> Dashboard</button>
      </div>
      <hr>
  </div>
  <div class="cols-md-6 " >
    <?php
  while ($row = mysqli_fetch_assoc($result)) {
        $reg = $row['reg'];
        $price = $row['price'];
        $times = $row['times'];
        echo'<table class="table table-hover" style=" color: aliceblue;" border=1>';
        echo '<tr>';
        echo '<td>' . $reg . '</td>';
        echo '<td>' . $price . '</td>';
        echo '<td>' . $times . '</td>';
        echo '</tr>';
        echo '</table>';
      }
  ?>
</div>

  </div>



</div>
</div>
</section>


<!--end dashboard -->
<!--start footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="index.php">park-e.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--end footer -->

    </body>
</html>