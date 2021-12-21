<?php 
include('head.php')
?>
<style type="text/css">
	.imge{
		display: none;
	}
	.imgf{
		display: block;
		width: 300px;
		border:2px solid black;
		height: auto;
	}
</style>
<?php
include("../db.php");
$id = isset($_GET['id'])?$_GET['id']:'';
$query = "SELECT * FROM services WHERE id = '$id'";
$results = mysqli_query($conn,$query);

$row = mysqli_fetch_array($results);
$id = $row['id'];
$title = $row['Name'];
$image = $row['image'];
$description = $row['description'];
?>
<table style="width: 100%;">
	<tr>
		<td style="align-content: left;"><a href="services.php"><button class="btn btn-primary" data-toggle='tooltip' data-placement='bottom' title='Back'><i class="fa fa-arrow-left"></i> Back</button></a></td>
		<td style="display: flex; justify-content: right;">
			<button class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteModal"  data-toggle='tooltip' data-placement='bottom' title='Delete'><i class='fa fa-trash'></i> Delete</button>
			<button style="margin-left: 5px;" class='btn btn-success' data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle='tooltip' data-placement='bottom' title='Edit'><i class='fa fa-edit'></i> Edit</button></td>
	</tr>
</table>
<hr>
<div class="row" style="display: flex; justify-content: center;">
<div class="col-md" style="display: flex; justify-content: center;">
<img src="../<?php echo $image; ?>" style='height: 250px;' alt="<?php echo $title; ?>">
</div>
<div class="col-md container">
	<h3><?php echo $title; ?></h3>
	<p><?php echo $description; ?></p>
</div>
</div>
<hr>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="#form1.php" method="post" enctype="multipart/form-data">
       <div class="container row">
       	<div class="col-md">
   			<input type="text" name="title" placeholder="<?php echo $title; ?>" value="<?php echo $title; ?>" style="width: 100%"><br>
   			<br>
   			<textarea type="text" rows="7" name="description"  style="width: 100%" placeholder="<?php echo $description; ?>" value="<?php echo $description; ?>"></textarea>
	    </div>
	  <div class="col-md">
	  	<img id="blah" class="imgf" src="../<?php echo $image; ?>" alt="Selected Image" /><br>
	  	<input type="file" name="upload" required="" onchange="readURL(this);">
	  </div>
	  </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel" style="color: red;"><i class="fas fa-exclamation-triangle"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<h5>Are you sure you want to delete <?php echo $title; ?></h5>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> No</button>
      	<a href="delete.php?id=<?php echo $id; ?>&from=services"><button class="btn btn-danger"><i class="fas fa-check"></i> Yes</button></a>
      </div>
    </div>
  </div>
</div>
<?php 
include('tail.php')
?>