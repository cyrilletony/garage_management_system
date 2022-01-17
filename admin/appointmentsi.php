<?php 
include('authenticate.php'); 
include('head.php');
?>
  <style>
#apps {
border-radius: 10px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#apps th{
  background-color: #ff9966;
}
#apps td, #apps th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

#apps tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h3 style="font-weight: bold;">Client Appointments</h3>

  <div class="">
  <table id="apps">
    
  <tr>
    <th></th>
    <th>Car Image</th>
    <th>Customer Name</th>
    <th>Customer Phone</th>
    <th>Customer Email</th>
    <th>Car Model</th>
    <th>Booking Date</th>
    <th>Booking Time</th>
    <th>Car Issue</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  <?php
  include("../db.php");
$query = $con->prepare('SELECT id,name,MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd,email,carmodel,phone,issue,status,time,image,description FROM appointments order by id DESC');
$query->execute();
$x = 0;
if ($query->rowCount() > 0) {
    foreach ($query->fetchAll() as $row) { 
        $id = $row['id'];
        $name = $row['name'];
        $image = $row['image'];
        $date = $row['dd']." ".$row['dm']." ".$row['dy'];
        $description = $row['description'];
        $issue = $row['issue'];
        $phone = $row['phone'];
        $email = $row['email'];
        $carmodel = $row['carmodel'];
        $time = $row['time'];
        $x++;
        
        if ($row['status'] == "False") {
          echo "<tr style='background:red;'><td>$x</td><td><img style='width:90px;height:auto;' src='../$image'></td><td>$name</td><td>$phone</td><td>$email</td><td>$carmodel</td><td>$date</td><td>$time</td><td>$issue</td><td>$description</td><td><a href='check_appointment.php?id=$id'> <button class='btn btn-success' data-toggle='tooltip' data-placement='bottom' title='Check Appointment'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
        }
        else{
        echo "<tr><td>$x</td><td><img style='width:90px;height:auto;' src='../$image'></td><td>$name</td><td>$phone</td><td>$email</td><td>$carmodel</td><td>$date</td><td>$time</td><td>$issue</td><td>$description</td><td><a href='check_appointment.php?id=$id'> <button class='btn btn-success' data-toggle='tooltip' data-placement='bottom' title='Check Appointment'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
      }
        }
    }
?>
</table>
</div>

<?php 
include('tail.php')
?>
 