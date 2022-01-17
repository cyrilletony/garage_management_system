<?php
date_default_timezone_set('Africa/Nairobi');
//$conn = new PDO("mysql:host=localhost;dbname=hermit", "root", "");
/*$conn = new mysqli('localhost',
	'root',
	'',
	'hermit'
);*/
$servername = "localhost";
$username = "root";
$password = "";


try {
	try{
		$con = new PDO("mysql:host=$servername;dbname=hermit", $username, $password);
  		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  	catch(PDOException $e){
  		header("Location:error.php");
  	}
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
