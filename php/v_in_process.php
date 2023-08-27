<?php 

require_once 'conection.php';

if(isset($_POST['submit']))
{
$reg=$_POST['reg'];
$owner=$_POST['owner'];
$nic=$_POST['nic'];
$date=$_POST['date'];
$time=$_POST['time'];
$contact=$_POST['contact'];


$timestamp = date("Y-m-d h-m-s", strtotime($time));


$del="INSERT INTO details values('$reg','$owner','$nic','$date','$contact','$timestamp')";
try{mysqli_query($connect,$del);

  // php code for update yard
session_start();
$username = $_SESSION['user'];
$yard=intval($_POST['yards']);

  $sql="UPDATE registation
  SET yards = yards-1
  WHERE username = '$username'";
  mysqli_query($connect,$sql);
  echo"<script>
  alert('yard updated')
  </script>";



// location for insert
header("location:http://localhost/park-e2/php/v_in.php");
}
catch(Exception $e){
    echo $e;
}


}
?>