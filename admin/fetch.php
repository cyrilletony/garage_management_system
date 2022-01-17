<?php

include('../db.php');

$query = $con->prepare("SELECT *, MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd FROM rescue WHERE status = 'False' order by id desc");
$query->execute();
$output = '';
$count = $query->rowCount();
if($count > 0)
{

foreach($query->fetchAll() as $row)

{
  $detail = $row['details'];
  $id = $row['id'];
  $time = $row['time'];
  $date = $row['dd']." ".$row['dm']." ".$row['dy'];
  $details = json_decode($detail);
  $country = $details->country;
  $region = $details->regionName;
  $location = $details->lon.", ".$details->lat;
  $city = $details->city;
  $output .= "<a class='dropdown-item' href='locate.php?id=$id&lon=$details->lon&lat=$details->lat'><div>
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
                    <td colspan='2' style='width:250px; font-size:13px; word-wrap:break-word;'>
                        <strong><i class='fa fa-flag-alt'></i> Country:</strong> $country  <strong><i class='fas fa-city'></i> City:</strong> $city<br>
                        <strong><i class='fa fa-chart-area'></i> Region:</strong> $region<br>
                        <strong><i class='fa fa-map-marker-alt'></i> Location:</strong> $location
                    </td>
                </tr>
            </table>
        </div></a>
        <div class='dropdown-divider'></div>";

    };
}


else{
    $output .= "<a href='#' class='dropdown-item text-bold text-italic'><div>
            <table style='width: 100%;'>
                <tr>
                    <td style='text-align: left; color: green;'>
                       
                    </td>
                    <td style='text-align: right;color: red;'>
                        
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style='width:250px; word-wrap:break-word;'>
                        <i class='fa fa-times'></i> Nothing Found!
                    </td>
                </tr>
            </table>
        </div></a>";
}

$status_query = $con->prepare("SELECT * FROM rescue WHERE status='False'");
$status_query->execute();
$count = $status_query->rowCount();
//$count = count($status_query);

$data = array(

   'notification' => $output,
   'unseen_notification'  => $count
);

echo json_encode($data);

?>