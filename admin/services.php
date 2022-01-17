<?php 
include('authenticate.php'); 
include('head.php');

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
<table id="tb" style="width: 100%;">
<tr>
	<td>
		<h3 style="font-weight: bold;">Our Services</h3>
	</td>
	<td style="display: flex; justify-content: center;">
		<button type="button" class="btn btn-outline-success" style="border-radius: 100%"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" data-placement="bottom" title="Add Service"><i class="fa fa-plus"></i></button>
		
		</td>
	</tr></table>
	<hr>
	<div class="container row" style="padding: 5px;">
	<?php
	include("../db.php");
	$query = $con->prepare('SELECT * FROM services');
	$query->execute();

	foreach ($query->fetchAll() as $row) { 
	    
	    $id = $row['id'];
	    $title = $row['Name'];
	    $image = $row['image'];
	    $description = $row['description'];
	    
	   
	    echo "<div class=\"col-md col-lg-4\" style='border-right:5px solid green;border-bottom:1px solid green;margin-bottom:10px;'>
	            <div class='row'>
	                <div class='col-5'>
	                    <img src='../$image' alt='$title' title='$title' style='height:140px; width:140px;'>
	                </div>
	                <div class='col-7' >
	                    <h5 class=''><strong>$title</strong></h5> 
	                    <div style='bottom:0%;position:relative;'>
	                    <a href='check_service.php?id=$id'> <button class='btn btn-primary' data-toggle='tooltip' data-placement='bottom' title='Read More'>Read More <i class='fa fa-arrow-right'></i></button></a>   
	                    </div>
	                </div>
	            </div>
	        </div>";
	    
	}
	?>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="form1.php" method="post" enctype="multipart/form-data">
       <div class="container row">
       	<div class="col-md">
   			<input type="text" name="title" required="" placeholder="Title" style="width: 100%"><br>
   			<br>
   			<textarea type="text" rows="7" name="description" required="" style="width: 100%" placeholder="Description..."></textarea>
	    </div>
	  <div class="col-md">
	  	<img id="blah" class="imgf" src="../assets/images/184349078_239613284609414_1046597693623168504_n.jpg" alt="Selected Image" /><br>
	  	<input type="file" name="upload" required="" onchange="readURL(this);">
	  </div>
	  </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>

  </script>
<?php 
include('tail.php')
?>