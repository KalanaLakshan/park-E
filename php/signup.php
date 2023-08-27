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
          <link href="../css/style.css" type="text/css" rel="stylesheet">
    <script src="js/password.js" type="text/javascript"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    
<style>
  body{
    background: rgb(72,236,215);
background: linear-gradient(180deg, rgba(72,236,215,1) 2%, rgba(9,70,121,1) 43%, rgba(158,0,255,1) 100%);

  }
</style>
</head>
    <body>
         <!-- start naviaion bar-->
         <div class="navi" id="home">
    <ul class="nav justify-content-end">
 <li class="nav-item">
   <a class="nav-link active" aria-current="page" href="../index.php">HOME</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="../index.php#feature">FEATURES</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " href="login.php">LOGIN</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " href="signup.php">SIGN UP</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="../index.php#developer">DEVELOPER</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " href="../index.php#about">ABOUT</a>
 </li>
</ul>
</div>
<!--end naviation bar-->
<!--sign up form-->
<section id="signup">
<div class="mb-5">
<div class="p-5  text-white text-center ">
  <h1>Signup with Us ! </h1>
  <p>Car Park Management System</p> 
</div>
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-3">
      </div>
    <div class="col-sm-9">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/asst/signup.jpg" class="img-fluid rounded-start" alt="Sign" style="height:100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <form class="row g-3" action="signup-process.php" method="post">
                <div class="col-md-6">
                  <label for="company" class="form-label">Company</label>
                  <input type="text" class="form-control" id="company" name="company" placeholder="company name" required>
                </div>
                <div class="col-md-4">
                  <label for="owner" class="form-label">Owner</label>
                  <input type="text" class="form-control" id="owner" name="owner" placeholder="owner name">
                </div>
                <div class="col-md-2">
                  <label for="reg_no" class="form-label">Reg_no</label>
                  <input type="text" class="form-control" id="reg_no" name="reg" placeholder="reg12">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="abc@email.com" required>
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone no.</label>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="+00 123 45 78" required>
                </div>
                <div class="col-md-6">
                  <label for="user_name" class="form-label">User Name</label>
                  <input type="test" class="form-control" id="user_name" name="username" placeholder="abccom123.." required>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" name="passwords" placeholder="must be 8-20 characters" maxlength="20" minlength="8" required>
                </div>
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="No, Lane, City, State, Country">
                </div>
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                      I agree with privacy Policy.
                    </label>
                  </div>
                </div>
                <div class="col-6">
                  <input type="submit" class="btn btn-success" name="submit" value="submit">
                </div>
                <div class="col-6">
                  <button type="reset" class="btn btn-danger">Cancle</button>
                </div>
                
              </form>    
              </div>        
            </div>
          </div>
        </div>
      </div>   
     </div>
  </div>
</div>
</section>
<!--bottom-->
<footer class="container-fluid text-center">
  <div class=" p-4 bg-dark text-white text-center">
  <p>@ all rights reserved.</p>
</div>
    
  </footer>


    </body>
</html>