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
  $stmt = $con->prepare("SELECT id,name,MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd,email,carmodel,phone,issue,status,time,image,description FROM appointments order by id DESC");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $x = 0;
  foreach($stmt->fetchAll() as $v) {
  		$id = $v['id'];
        $name = $v['name'];
        $image = $v['image'];
        $date = $v['dd']." ".$v['dm']." ".$v['dy'];
        $description = $v['description'];
        $issue = $v['issue'];
        $phone = $v['phone'];
        $email = $v['email'];
        $carmodel = $v['carmodel'];
        $time = $v['time'];
        $x++;
        if ($v['status'] == "False") {
          echo "<tr style='background:red;'><td>$x</td><td><img style='width:90px;height:auto;' src='../$image'></td><td>$name</td><td>$phone</td><td>$email</td><td>$carmodel</td><td>$date</td><td>$time</td><td>$issue</td><td>$description</td><td><a href='check_appointment.php?id=$id'> <button class='btn btn-success' data-toggle='tooltip' data-placement='bottom' title='Check Appointment'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
        }
        else{
        echo "<tr><td>$x</td><td><img style='width:90px;height:auto;' src='../$image'></td><td>$name</td><td>$phone</td><td>$email</td><td>$carmodel</td><td>$date</td><td>$time</td><td>$issue</td><td>$description</td><td><a href='check_appointment.php?id=$id'> <button class='btn btn-success' data-toggle='tooltip' data-placement='bottom' title='Check Appointment'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
      }
    
  }
  

?>
</table>
</div>

<?php 
include('tail.php')
?>