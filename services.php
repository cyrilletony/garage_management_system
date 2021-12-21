<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/h-removebg-preview-121x94.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Services</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
   <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-z">
    
<?php
    include("menu.php");
    ?>

</section>

<?php
include("db.php");
$id = isset($_GET['service_id'])?$_GET['service_id']:'';
$query = "SELECT * FROM services where id = '$id'";
$results = mysqli_query($conn,$query);
$row = mysqli_fetch_array($results);
$id = $row['id'];
$title = $row['Name'];
$image = $row['image'];
$description = $row['description'];

echo "
<section data-bs-version='5.1' class='image1 cid-sR0nceaKzP mbr-fullscreen' id='item$id'>
<div class='container'>
        <div class='row '>
            <div class='row col-12 col-lg-8'>
            <div class='col-12 col-lg-8'>
                <div class='image-wrapper'>
                    <h4 class=''>
                        <strong>$title</strong></h4>
                    <img src='$image' alt='Mobirise'>
                    
                </div>
            </div>
            <hr>
            <div class='col-12 col-lg-12'>
                <div class='text-wrapper'>
                    <p class='mbr-description mbr-fonts-style pt-2  display-4'>
                    Description</p>
                    <p class='mbr-text mbr-fonts-style display-7'>$description</p>
                </div>
            </div>
            </div>

            <div class='row col-12 col-lg-4 '>
                <div class='col-12 bg-danger'>
                <div class='mbr-section-head'>
                    <h3 class=''><strong>Inquire About Service</strong></h3>
                    <hr>
                </div>
                <div class='text-wrapper'>
                <form class=''>
                    <input type='number' name='service_id' value='$id' id='' hidden=''>
                     <div class='col-lg-12 col-md-12 col-sm-12 form-group mb-3' data-for='name'>
                            <input type='text' name='name' placeholder='Name' data-form-field='name' class='form-control' value='' id='name-form7-11'>
                        </div>
                    <div class='col-lg-12 col-md-12 col-sm-12 form-group mb-3' data-for='email'>
                            <input type='email' name='email' placeholder='Email' data-form-field='name' class='form-control' value='' id='name-form7-11'>
                        </div>
                    <div class='col-lg-12 col-md-12 col-sm-12 form-group mb-3' data-for='name'>
                            <input type='tel' name='phone' placeholder='Phone Number' data-form-field='name' class='form-control' value='' id='name-form7-11'>
                        </div>
                    <div class='col-auto mbr-section-btn align-center'>
                            <input type='submit' class='btn btn-success col-12 display-4'value='Submit'>
                        </div>
                </form>
                <br>
                </div>
                </div>
                
";
?>
                <div class='row col-12' style="padding-bottom:5px;">
                <div class='mbr-section-head' >
                    <h3 class=''><strong>Our Blog</strong></h3>
                    <hr>
                </div>
<?php 
include("db.php");
$query = 'SELECT * FROM blog order by id desc limit 3';
$results = mysqli_query($conn,$query);
$rows = mysqli_num_rows($results);
if ($rows > 0) {
    for ($rows > 0 ; $rows--;) { 
        $row = mysqli_fetch_array($results);
        $id = $row['id'];
        $description = $row['description'];
        $image = $row['image'];
        $name = $row['name'];
        $date = $row['date'];
        $comment = $row['comment'];
       
        echo "<a class='show dropdown-item text-danger text-primary display-4' href='blog.php#item$id'><div class='col-12 bg-danger row'><img  style='width: 70px;height: auto;'' src='$image'><div class='col-8'style='color:white;font-size:12px;' >$description<br>$name<br><p class=''>$date</p></div></div></a>";
    }
    
}
?>
                
                
                </div>
                <div class='row col-12'>
                <div class='mbr-section-head'>
                    <h3 class=''><strong>Quick Link</strong></h3>
                    <hr>
                </div>
                <a class='show dropdown-item text-danger text-primary display-4' href='index.php#header1-f'>Home</a>
                <a class='show dropdown-item text-danger text-primary display-4' href='index.php#whoweare'>About Us</a>
                <a class='show dropdown-item text-danger text-primary display-4' href='index.php#footer6-x'>Map</a>
                
                </div>
            
            
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="footer6 cid-sQl3ZyRCBs" once="footers" id="footer6-10">
 <?php
 include("footer.php")
 ?> 
</section><?php
 include("designe.php")
 ?> <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>