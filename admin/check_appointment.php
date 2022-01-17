<?php 
include('authenticate.php'); 
include('head.php');
include("../db.php");
?>
<table style="width: 100%;">
	<tr>
		<td style="align-content: left;"><a href="appointments.php"><button class="btn btn-primary" data-toggle='tooltip' data-placement='bottom' title='Back'><i class="fa fa-arrow-left"></i> Back</button></a></td>
		<td style="display: flex; justify-content: right;">
			<button class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteModal"  data-toggle='tooltip' data-placement='bottom' title='Delete'><i class='fa fa-trash'></i> Delete</button>
			</td>
	</tr>
</table>
<hr>
<?php
$id = isset($_GET['id'])?$_GET['id']:'';
$qi = "UPDATE appointments SET status='True' WHERE id = '$id'";
$update = $con->prepare($qi);
$update->execute();
$query = $con->prepare("SELECT id,name,MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd,email,carmodel,phone,issue,time,image,description FROM appointments WHERE id = '$id'");
//$results = mysqli_query($conn,$query);
$query->execute();
$result = $query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();
//$row = $rows[0];
//$row = mysqli_fetch_array($results);
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

?>
<div class="row">
<div class="col-md">
	<img style="width: 300px;" src="../<?php echo $image; ?>">
	<hr>
	<h6><strong><i class="fa fa-user"></i> <?php echo $name; ?></strong> <i class="fa fa-phone"></i> <?php echo $phone; ?> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email; ?></h6> 
	<h6><i class="fa fa-calendar-alt"></i> <?php echo $date; ?>  <i class="far fa-clock" aria-hidden="true"></i> <?php echo $time; ?></h6>
	<h6><strong><i class="fas fa-car"></i> Car Model: </strong><?php echo $carmodel; ?></h6>
	<h6><strong><i class="fas fa-bullhorn"></i> Issue: </strong><?php echo $issue; ?></h6>
	<hr>
	<h5>Description</h5>
	<h6><?php echo $description; ?></h6>
</div>
<div class="col-md">
	<h3>Email a Response</h3>
	<hr>
	<form action="../response.php" method="post">
		<input type="email" name="receiver" value="<?php echo $email; ?>"  hidden="" >
		<h6>To: <?php echo $email; ?></h6>
		<input type="text" placeholder="Email Subject ..." required="" name="subject" style="width: 100%; border:none; border-bottom: 1px solid black;margin-bottom: 3px;"><br>
		<textarea style="width: 100%" name="body" rows="13" required="" placeholder="Response Body ..."></textarea>
		<button type="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
	</form>
</div>
</div>
<?php 

include('tail.php');
?>