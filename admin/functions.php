<?php 

function notification()
{
	//setInterval(function(){
	include("../db.php");
	$q = $con->prepare("SELECT COUNT(id) as new FROM rescue WHERE status = 'False'");
	$q->execute();
	$row = $q->fetch();
	$count = $row['new'];
	return $count;	
	//}, 200);
}
function appointments()
{
	//setInterval(function(){
	include("../db.php");
	$q = $con->prepare("SELECT COUNT(id) as new FROM appointments WHERE status = 'False'");
	$q->execute();
	$row = $q->fetch();
	$count = $row['new'];
	return $count;	
	//}, 200);
}
function rescuelist()
{
	include("../db.php");
	$query = $con->prepare("SELECT *, MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd FROM rescue WHERE status = 'False' order by id desc");
	$query->execute();
	//$query = "SELECT *, MONTHNAME(date) as month,DATENAME(date) as day,YEAR(date) as year FROM rescue WHERE status = 'False'";
	if ($query) {
	  foreach ($query->fetchAll() as $row) {
	  	
	  	$detail = $row['details'];
	  	$id = $row['id'];
	  	$time = $row['time'];
	  	//$date = $row['date'];
	  	$date = $row['dd']." ".$row['dm']." ".$row['dy'];
	  	//$date = $row['day'].' '.$row['month'].' '.$row['year'];
	  	//echo $date;
	  	//echo $time;
	  	//print_r($row);
	  	$details = json_decode($detail);
	  	//print_r($details);
	  	$country = $details->country;
	  	$region = $details->regionName;
	  	$location = $details->lon." ".$details->lat;
	  	$ip = $details->query;
	  	echo "<a class='dropdown-item' href='locate.php?id=$id&lon=$details->lon&lat=$details->lat'><div>
                <table style='width: 100%;'>
                    <tr>
                        <td style='text-align: left; color: green;'>
                            $time
                        </td>
                        <td style='text-align: right;color: red;'>
                            $date
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' style='width:250px; word-wrap:break-word;'>
                            Country: $country<br>
                            Region: $region<br>
                            Location: $location
                        </td>
                    </tr>
                </table>
            </div></a>
            <div class='dropdown-divider'></div>";
//print_r(json_decode($details));
	  }
	}
}
 ?>