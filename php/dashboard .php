<?php
session_start();
$username = $_SESSION['user'];
include 'conection.php';

$sql = "SELECT company,owner,phone,address,yards,yardchange FROM registation where username='$username'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $company=$row["company"];
    $owner=$row["owner"];
    $contact=$row["phone"];
    $city=$row["address"];
    $yard=$row["yards"];
    $yardchange=$row["yardchange"];
  }
} 
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
    <script src="../js/password.js" type="text/javascript"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js”></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>


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
</nav>
</div>
<!--end header bar-->
<!--start dashboard -->
<section id="dashboard">
<div class ="row contents"style="padding-top: 150px; padding-bottom:70px;">
  
 

<div class="col-md-6 cols-sm-12">
<!--table start-->
<table class="table table-hover" style="margin-left: 50px; color: aliceblue;">
  <tr>
    <td>Company Name</td>
    <td><?php echo $company; ?></td>
  </tr>
  <tr>
    <td>owner</td>
    <td><?php echo $owner; ?></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><?php echo $contact; ?></td>
  </tr>
  <tr>
    <td>City</td>
    <td><?php echo $city; ?></td>
  </tr>
  <tr>
    <td>no.of Yard</td>
    <td><?php echo $yardchange; ?></td>
  </tr>
</table>
<!--table end-->
<!--prograss bar start-->
</div>

<div class="col-md-6 cols-sm-12">
  <div class=" press">
<div class="box">
  <div class="chart" data-percent="<?php echo $yard; ?>" ><?php echo $yard; ?></div>
  <h2> Yards</h2>
</div>
</div>

</div>
<!--prograss bar end-->

<!--buttons start-->
<div class="row" style="margin-left: 50px;">
<div class="col-3">
<button type="button" class="btn btn-outline-success" onclick="window.location.href='V_in.php'";>Vehicle In</button>
</div><div class="col-3">
<button type="button" class="btn btn-outline-danger" onclick="window.location.href='V_out.php'">Vehicle Out</button>
</div><div class="col-3">
<button type="button" class="btn btn-outline-warning" onclick="window.location.href='history.php'">Billing History</button>
</div><div class="col-3">
<button type="button" class="btn btn-outline-info" onclick="window.location.href='http://localhost/park-e2/php/Setting.php'">Settings Option</button>
</div>
</div>
<!--buttons end-->

</div>
</section>


<!--end dashboard -->
<!--start footer -->
<footer class="container-fluid text-center">
  <div class=" p-4 bg-dark text-white text-center">
  <p>@ all rights reserved.</p>
</div>
    
  </footer>
<!--end footer -->
<script type="text/javascript">
  $(function() {
  $('.chart').easyPieChart({
    size: 160,
    barColor: "#36e617",
    scaleLength: 0,
    lineWidth: 15,
    trackColor: "#525151",
    lineCap: "circle",
    animate: 2000,
  });
});
</script>

    </body>
</html>