<?php 
session_start();
$con=mysqli_connect('localhost','root');








mysqli_select_db($con,'user');
mysqli_close($con);






if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$n=$_POST['name'];
$p=$_POST['password'];
$email=$_POST['email'];
$_SESSION['username']=$n;
$q="Insert into usertable (n,p,email) values ('$n','$p,'$email')";
mysqli_query($con,$q);
header('location:test.php');


?>