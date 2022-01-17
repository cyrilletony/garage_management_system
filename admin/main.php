<?php 
include("../db.php");
$email = $_POST['email'];
$password = $_POST['pass'];
$query = $con->prepare("SELECT * FROM admin WHERE email = '$email' AND password = '$password' OR username = '$email' AND password = '$password'");
$query->execute();
$row = $query->fetch();
if ($row) {
  	session_start();
  	$_SESSION['active'] = "active";
  	$_SESSION['username'] = $row['username'];
    header("Location:index1.php");
  
} else {
  	header("Location:index.php?login=failed");
}
$con = null;
 ?>