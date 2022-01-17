
<?php 
include("db.php");
$lat = isset($_GET['lat'])?$_GET['lat']:'';
$lon = isset($_GET['lon'])?$_GET['lon']:'';
//$lat = -1.3106059;
//$lon = 36.8238471;
$country = isset($_GET['country'])?$_GET['country']:'';
$region = isset($_GET['region'])?$_GET['region']:'';
$city = isset($_GET['city'])?$_GET['city']:'';
$suburb = isset($_GET['suburb'])?$_GET['suburb']:'';
$data = array('country' => $country, 'regionName'=>$region,'lon'=>$lon,'lat'=>$lat,'city'=>$city,'suburb'=>$suburb);
$mm = json_encode($data);
$timestamp = time();

$date = date('Y-m-d');
$time = date('H:i:s');

$q = $con->prepare("INSERT INTO rescue(details,time,date) VALUES('$mm','$time','$date')");
$q->execute();
header("Location:index.php?rescue=sent");
 ?>
 

       