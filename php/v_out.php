<?php
   session_start();
   $username = $_SESSION['user'];
   include 'conection.php';
   
   
   
   if(isset($_POST['submit'])){
   $inputbar=$_POST['inputbar'];
   
   $sql="SELECT * FROM details WHERE reg='$inputbar' limit 1";
   $dell="INSERT INTO time (reg) values('$inputbar')";
   $tim="INSERT INTO bill (reg) values('$inputbar')";
       $result = mysqli_query($connect, $sql);
       $value = mysqli_query($connect, $dell);
      // $val = mysqli_query($connect, $tim);
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
                     <a href="index.html" class="material-symbols-rounded">
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
               <h1 class="topic text-center"> Vehicle Exit Form</h1>
               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-outline-secondary" onclick="document.location='http://localhost/park-e2/php/dashboard%20.php'"> Dashboard</button>
               </div>
               <hr>
            </div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
               <div class="cols-md-6 p-2">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="inputbar">
               </div>
               <div class="cols-md-6 p-2">
                  <input class="btn btn-success" type="submit" name="submit">
               </div>
            </form>
            <?php 
               // session_start();
               // $username = $_SESSION['user'];
               // include 'conection.php';
               
               if(isset($_POST['submit'])){
                  $freeselect = "SELECT hoursfee FROM registation where username='$username'";
                  $res = mysqli_query($connect, $freeselect);
                while($row = mysqli_fetch_assoc($res)) 
                $hoursfee=$row["hoursfee"];
               //  echo'<div class="input-group mb-3">
               //          <span class="input-group-text w-25 p-2 " id="basic-addon1">Time Period</span>
               //          <input type="text"  value="'.$hoursfee.'" class="form-control placeholder bg-light text-dark" placeholder="" aria-label="Contact" aria-describedby="basic-addon7">
               //       </div>';
               } 
               
               ?>
            <hr>
            <div class="cols-md-6 " >
               <form action="v_out-process.php" method="POST">
                  <?php 
                     if(isset($_POST['submit'])){
                        
                      while($row = mysqli_fetch_assoc($result)) {
                        $reg=$row["reg"];
                        $owner=$row["owner"];
                        $nic=$row["nic"];
                        $time1=$row["time"]; 
                     
                     
                        // $time =  date("H:i", strtotime($time1)); 
                        
                              echo '<div class="input-group mb-3">
                              <span class="input-group-text w-25 p-2" id="basic-addon1">Reg No:</span>
                              <input type="text" class="form-control bg-light text-dark" name="reg" placeholder="Reg_number" value="'.$reg.'" aria-label="Reg_number" aria-describedby="basic-addon1">
                              </div>';
                     
                              echo '<div class="input-group mb-3 ">
                              <span class="input-group-text w-25 p-2" id="basic-addon1">Owner Name:</span>
                              <input type="text" class="form-control placeholder bg-light text-dark" placeholder="Ownername" value="'.$owner.'" aria-label="Ownername" aria-describedby="basic-addon2">
                              </div>';
                     
                              echo '<div class="input-group mb-3">
                              <span class="input-group-text w-25 p-2" id="basic-addon1">NIC</span>
                              <input type="text" class="form-control placeholder bg-light text-dark" placeholder="NIC" value="'.$nic.'" aria-label="NIC" aria-describedby="basic-addon3">
                              </div>';
                     
                              
                              echo '<div class="input-group mb-3">
                              <span class="input-group-text w-25 p-2 " id="basic-addon1">In-Time</span>
                              <input type="text" class="form-control placeholder bg-light text-dark" placeholder="In Time" value="'.$time1.'" aria-label="Time" aria-describedby="basic-addon5">
                              </div>';
                      }}?>
                  <?php
                     if(isset($_POST['submit'])){
                     
                      $sqlt="SELECT * FROM time WHERE reg='$inputbar' limit 1";
                      $value = mysqli_query($connect, $sqlt);
                      while($row = mysqli_fetch_assoc($value)) {
                         $time2=$row["outtime"]; 
                     
                           echo'<div class="input-group mb-3">
                            <span class="input-group-text w-25 p-2 " id="basic-addon1">Out-Time</span>
                            <input type="text" class="form-control placeholder bg-light text-dark" value="'.$time2.'" placeholder="Out Time" aria-label="Contact" aria-describedby="basic-addon6">
                         </div>';
                         
                         //  echo'<div class="input-group mb-3">
                         //    <span class="input-group-text w-25 p-2 " id="basic-addon1">Time Period</span>
                         //    <input type="text"  value="'.$hoursfee.'" class="form-control placeholder bg-light text-dark" placeholder="" aria-label="Contact" aria-describedby="basic-addon7">
                         // </div>';
                     
                         
                     $time1 = new DateTime($time1);
                     $time2 = new DateTime($time2);
                     
                     $interval = $time1->diff($time2);
                     $timeDiffInSeconds = $interval->s + $interval->i * 60 + $interval->h * 3600 + $interval->days * 86400;
                     
                     echo $timeDiffInSeconds;
                     
                      }
                     }
                     ?>
                  <hr>
                  <!-- <p id="ptime"></p>
                     <button type="button" name="enter" class="btn btn-outline-light" >ENTER</button>
                     <hr> -->
                  <?php
                      $fee=$hoursfee/3600;
                      $price=$timeDiffInSeconds*$fee;
                      $final=$price;
                     echo "'.$final.'";
                  
                     echo'   <div class="input-group mb-3">
                        <span class="input-group-text w-25 p-2 bg-danger text-light " id="basic-addon1">Cost </span>
                        <input type="text" class="form-control placeholder bg-light text-dark" value="rs.'.$price.'" placeholder="" aria-label="Contact" aria-describedby="basic-addon8">
                     </div>';
                     echo'<div class="input-group mb-3">
                        <span class="input-group-text w-25 p-2 bg-warning text-light text-light " id="basic-addon1">Service Change</span>
                        <input type="number" id="service" class="form-control placeholder bg-light text-dark" placeholder="" aria-label="Contact" aria-describedby="basic-addon9">
                     </div>';
                     echo'<div class="input-group mb-3">
                        <span class="input-group-text w-25 p-2 bg-success text-light" id="basic-addon1">Total Cost</span>
                        <input type="text" name="total" value="rs.'.$price.'" class="form-control placeholder bg-light text-dark" placeholder="" aria-label="Contact" aria-describedby="basic-addon10">
                     </div>';
                     ?>
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                     <input type="submit" name="paid" class="btn btn-success" value="Paid">
                  </div>
                  <div class="col-md-4"></div>
                  ';
               </form>
            </div>
         </div>
      </section>
      <!--end dashboard -->
      <!--start footer -->
      <footer class="bg-dark text-light text-center text-lg-start">
         <!-- Copyright -->
         <div class="text-center p-3" style="background-color: rgba(5, 5, 5, 0.2);">
            © 2023 Copyright:
            <a class="text-light" href="index.php">www.park-e.com</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!--end footer -->
      <?php
         // php code for update yard
         // session_start();
         // $username = $_SESSION['user'];
         // $yard=intval($_POST['yards']);
         
         //   $alert="UPDATE registation
         //   SET yards = yards+1
         //   WHERE username = '$username'";
         //   mysqli_query($connect,$alert);
         //   echo"<script>
         //   alert('yard updated')
         //   </script>";
         
         ?>
      <script>
         document.addEventListener('DOMContentLoaded', function(){
         
            var price = '<?php $price; ?>';
            document.getElementById("service").addEventListener("input", function() {
         var service = document.getElementById("service").value;
         }
         var totals=price+service
         document.getElementById("total").value = totals.toString();
         }
         
         
         
      </script>
   </body>
</html>