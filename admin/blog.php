<?php 
include('head.php')
?>
<table id="tb" style="width: 100%;">
<tr>
	<td>
		<h3 style="font-weight: bold;">Our Blog</h3>
	</td>
	<td style="display: flex; justify-content: center;">
		<button type="button" class="btn btn-outline-success" style="border-radius: 100%"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" data-placement="bottom" title="Add Service"><i class="fa fa-plus"></i></button>
		
		</td>
	</tr></table><hr>
<div class="container row" style="padding: 5px;">
	<?php
	include("../db.php");
	$query = 'SELECT * , MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd FROM blog';
	$results = mysqli_query($conn,$query);
	$rows = mysqli_num_rows($results);
	if ($rows > 0) {
	for ($rows > 0 ; $rows--;) { 
	    $row = mysqli_fetch_array($results);
	    $id = $row['id'];
	    $title = $row['comment'];
	    $image = $row['image'];
	    $name = $row['name'];
	    $date = $row['dd']." ".$row['dm']." ".$row['dy'];
	    $description = $row['description'];
	    
	   
	    echo "<div class=\"col-md col-lg-4\" style='border-right:5px solid green;border-bottom:1px solid green;margin-bottom:10px;'>
	            <div class='row'>
	                <div class='col-5'>
	                    <img src='../$image' alt='$title' title='$name' style='height:140px; width:140px;'>
	                </div>
	                <div class='col-7' >
	                    <h5 class=''>$description</h5> 
	                    <p>$date</p>
	                    <div style='bottom:0%;position:relative;'>
	                    <a href='check_blog.php?id=$id'> <button class='btn btn-primary' data-toggle='tooltip' data-placement='bottom' title='Read More'>Read More <i class='fa fa-arrow-right'></i></button></a>   
	                    </div>
	                </div>
	            </div>
	        </div>";
	    }
	}
	?>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Blog Entry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="form1.php" method="post" enctype="multipart/form-data">
       <div class="container row">
       	
	  <div class="col-md">
	  	<img id="blah" class="imgf" src="../assets/images/184349078_239613284609414_1046597693623168504_n.jpg" alt="Selected Image" />
	  	<input type="file" name="upload" required="" onchange="readURL(this);"><br><br>
	  	<input type="text" name="description" required="" placeholder="Description" style="width: 100%"><br><br>
	  	<input type="text" name="name" placeholder="Name" required="" style="width: 100%"><br>
	  </div>
	  <div class="col-md">
   			<textarea type="text" rows="11" name="comment" required="" style="width: 100%" placeholder="Type Your Comment Here..."></textarea>
   			<input type="date" name="date" required="" placeholder="Date" style="width: 100%"><br>
	    </div>
	  </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
<?php 
include('tail.php')
?>