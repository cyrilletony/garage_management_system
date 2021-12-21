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
  
  
  <title>Appointment</title>
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

<section data-bs-version="5.1" class="form7 cid-sQxNXf8gUm mbr-fullscreen" id="form7-11">
    <style type="text/css">
        #success{
            display: none;
        }
        #failed{
            display: none;
        }
    </style>
    <?php
        $remark = isset($_GET['appointment'])?$_GET['appointment']:'';
        if ($remark == 'success') {
            echo "<style type=\"text/css\">#success{display: block;}</style>";
        }
        elseif ($remark == 'failed') {
            echo "<style type=\"text/css\">#failed{display: block;}</style>";
        }
    ?>
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Book Appointment</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="form.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler mx-auto" >
                    <div class="row">
                        <div id="success" class="alert alert-success col-12">Thanks for Booking an appointment with us!</div>
                        <div id="failed" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div>
                    <div class="dragArea row">
                    <div class="col-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" required="" placeholder="Name"  class="form-control" value="" id="name-form7-11">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="model">
                            <input type="text" name="model" required="" placeholder="Car Model"  class="form-control" value="" id="name-form7-11">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="issue">
                            <input type="text" name="issue" required="" placeholder="Car Issue"  class="form-control" value="" id="name-form7-11">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="file">
                            <input type="file" name="image" required="" placeholder="Car Issue"  class="form-control" value="" id="name-form7-11">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="useremail" required="" placeholder="Email" class="form-control" value="" id="email-form7-11">
                        </div>
                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input type="tel" name="phone" required="" placeholder="Phone"  class="form-control" value="" id="phone-form7-11">
                        </div>
                       <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" style="width: 100%;">
                            <textarea type="text" name="description" maxlength="200" style="width: 100%;" rows="5" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" id="phone-form7-11" placeholder="Problem description ..."></textarea>
                        </div>
                       
                        
                    </div>
                    <div class="col-auto mbr-section-btn align-center">
                            <input type="submit" class="btn btn-primary display-4" value='Submit'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer6 cid-sQl3ZyRCBs mbr-fullscreen" once="footers" id="footer6-10">

    
 <?php
 include("footer.php")
 ?> 
</section>
 <?php
 include("designe.php")
 ?> 
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>