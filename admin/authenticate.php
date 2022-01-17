<?php 
session_start();

if (!isset($_SESSION['active'])) {
 	header("Location:index.php");
 	session_unset();
 	session_destroy();

} 
?>