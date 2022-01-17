<?php 
$id = $_POST['service_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = date('Y-m-d');
include("db.php");

$q = $con->prepare("INSERT INTO inquiries(service_id,email,name,phone,date) VALUES('$id','$email','$name','$phone','$date')");
$q->execute();

header("Location:index.php");
 ?>