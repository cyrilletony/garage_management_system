<?php 
include('head.php')
?>
<h3 style="font-weight: bold;">About Us</h3>
<hr>
<?php
$id = isset($_GET['id'])?$_GET['id']:'';
include("../db.php");
$query = "SELECT * , MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd FROM blog WHERE id = '$id'";
$results = mysqli_query($conn,$query);

$row = mysqli_fetch_array($results);
$id = $row['id'];
$title = $row['comment'];
$image = $row['image'];
$name = $row['name'];
$date = $row['dd']." ".$row['dm']." ".$row['dy'];
$description = $row['description'];
?>
<section data-bs-version="5.1" class="content2 cid-sQkUx6sLQR mbr-fullscreen bg-white" id="whoweare">


    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img style="width: 450px" src="../<?php echo $image; ?>" alt="Hermit">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper" >
                        <h4 class="">
                            <strong><?php echo $description; ?></strong>
                        </h4>
                            
                        <p class="">
                            <strong><?php echo $name; ?></strong> <?php echo $date; ?> <br><br>
                             <strong>Comment</strong><br>
                             
                             <?php echo $title; ?>
                            </p>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php 
include('tail.php')
?>