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
  
  
  <title>Blog</title>
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
    $query = $con->prepare('SELECT * , MONTHNAME(date) as dm,YEAR(date) as dy,DAY(date) as dd FROM blog');
    $query->execute();
    foreach ($query->fetchAll() as $row) {
        $id = $row['id'];
        $title = $row['comment'];
        $image = $row['image'];
        $name = $row['name'];
        $date = $row['dd']." ".$row['dm']." ".$row['dy'];
        $description = $row['description'];
      
    ?>
<section data-bs-version="5.1" class="image1 cid-sR0nceaKzP mbr-fullscreen" id="item<?php echo $id; ?>">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md col-lg-6">
                <div class="image-wrapper" style="display: flex;justify-content: center;">
                    <img style="width: 350px;" src="<?php echo $image; ?>" alt="Hermit">
                    
                </div>
            </div>
            <div class="col-md col-lg-6">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                        <strong><?php echo $description; ?></strong></h3>
                    <p><strong><?php echo $name; ?></strong>  <?php echo $date; ?></p>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $title; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
}

 ?>
<section data-bs-version="5.1" class="form4 cid-sQyYIdCVvL mbr-fullscreen" id="form4-16">
    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="2KWGPlIzXOzhS02MKSHYX0oHH46NHm84UlWUr/QWdRZB8SETkfir9VcfGoH0c0cra3VN6+UoAOIsg72+cxxoUZvz2dCT1KOo1/a0jcY1m+pKKgiVCcqJ7fVk0gBZXmVI">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>Contact Us</strong>
                            </h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Fill this form and we'll get back to you soon.</p>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form4-16">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-16">
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn">
                            <button type="submit" class="btn btn-secondary display-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/184574324_239508547953221_2873074828986916359_n.jpg" alt="Mobirise">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer6 cid-sQl3ZyRCBs" once="footers" id="footer6-x">

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