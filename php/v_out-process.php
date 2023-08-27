<?php
   include 'conection.php';
   session_start();
   $username = $_SESSION['user'];


   $alert="UPDATE registation
   SET yards = yards+1
   WHERE username = '$username' limit 1";
   mysqli_query($connect,$alert);
   echo"<script>
   alert('yard updated')
   </script>"; 


   if(isset($_POST['paid'])){
      $total=$_POST['total'];
      $reg=$_POST['reg'];

       //$send="INSERT INTO bill (price,reg) values('$total','$reg') where reg='$reg'";
       $send="INSERT INTO bill (price,reg) values('$total','$reg')";
       mysqli_query($connect,$send);
       
       $delete="DELETE FROM details WHERE reg='$reg';";
       mysqli_query($connect,$delete);
      
     }
  

   header("location:http://localhost/park-e2/php/v_out.php");
   
   
   ?>