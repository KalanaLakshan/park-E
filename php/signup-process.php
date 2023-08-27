<?php 
require_once 'conection.php';

if(isset($_POST['submit']))
{
$company=$_POST['company'];
$owner=$_POST['owner'];
$reg=$_POST['reg'];
$username=$_POST['username'];
$password=$_POST['passwords'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
// $hoursfee=number_format($_POST['reg'],2);

$sql="INSERT INTO registation(username,passwords,company,owner,reg,email,phone,address,hoursfee) values('$username','$password','$company','$owner','$reg','$email','$phone','$address','')";
mysqli_query($connect,$sql);
echo
"
<script>
alert('registation sucessfully')
</script>
";
header("location:http://localhost/park-e2/php/signup.php");
}
?>