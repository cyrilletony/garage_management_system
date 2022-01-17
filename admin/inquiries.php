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
<h4>Inquiries</h4>
<hr>
<table id="apps">
    
  <tr>
    <th></th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Service</th>
    <th>Image</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
<?php
  include("../db.php");
$query = $con->prepare('SELECT inquiries.id as id1,inquiries.name as name,MONTHNAME(inquiries.date) as dm,YEAR(inquiries.date) as dy,DAY(inquiries.date) as dd,inquiries.email as email,inquiries.phone as phone,services.name as s_name,services.image as image,services.description as description FROM inquiries left join services on inquiries.service_id = services.id order by inquiries.id DESC');
$query->execute();
$x = 0;
if ($query->rowCount() > 0) {
    foreach ($query->fetchAll() as $row) { 
    	//print_r($row);
        $id = $row['id1'];
        $name = $row['name'];
        $image = $row['image'];
        $date = $row['dd']." ".$row['dm']." ".$row['dy'];
        $description = $row['description'];
        $phone = $row['phone'];
        $sname = $row['s_name'];
        $email = $row['email'];
        $x++;
        if (strlen($description) > 25) {
          $description = substr($description,0,25)."...";
        }
        else{
          $description = $description;
        }
        
        echo "
    <tr style=''>
	<td>$x</td>
	<td>$name</td>
	<td>$email</td>
	<td>$phone</td>
	<td>$date</td>
	<td>$sname</td>
	<td><img style='width:90px;height:auto;' src='../$image'></td>
	<td>$description</td>
	<td><a href='#check_inquiry.php?id=$id'> <button class='btn btn-success' data-toggle='tooltip' data-placement='bottom' title='Check Inquiry'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
        }
    }
?>
</table>
</div>

<?php 
include('tail.php')
?>