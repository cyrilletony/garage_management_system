<?php  
include("../db.php");
$from = isset($_GET['from'])?$_GET['from']:'';
$id = isset($_GET['id'])?$_GET['id']:'';
if ($from == "services") {
	
	$q = "DELETE FROM services WHERE id = '$id'";
	$conn->query($q);
	header("Location:services.php");
	
}
elseif ($from == "blog") {
	$q = "DELETE FROM blog WHERE id = '$id'";
	$conn->query($q);
	echo "Welcome to delete and destroy!".$id. " ".$from;
}
?>