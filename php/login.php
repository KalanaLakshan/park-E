<?php
session_start();
include 'conection.php';

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['passwords'];

$sql = "select * from registation where username = '$username' and passwords = '$password'";
/* $result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  
    $_SESSION['user'] = $username;
    echo "<script>
    alert('Login Success!!');
    </script>
    ";  */ 
    // $sql = "select * from hfadahf where username='$_SESSION['user']'";
    //header("location:http://localhost/park-e2/php/dashboard%20.php");
//}      

        $result = mysqli_query($connect,$sql);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["user"] = $row['username'];
        header("location:http://localhost/park-e2/php/dashboard%20.php");
        } else {
         $message = "Invalid Username or Password!";
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
      <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="js/password.js" type="text/javascript"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    


<style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 580px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
.btns{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
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

<div class="background" >
        <div class="shape"></div>
        <div class="shape"></div>
</div>
    <form action="login.php" method="post" style="margin-top: 100px; margin-bottom:100px;">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="passwords" maxlength="20" minlength="8" required>

        <!-- <button class="btns">Log In</button> -->
        <input type="submit" name="submit" value="Log In" class="btns">
    
        <button class="btns" onclick="document.location='signup.php'">Sign up</button>
        </form>
</body>
</html>