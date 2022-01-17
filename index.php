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
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  transition: 1.5s;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
   from {opacity: .4;
    left: 0;

  } 
  to {opacity: 1;
    left: 100%;
  }
}

@keyframes fade {
  from {opacity: .4;
    left: 0;

  } 
  to {opacity: 1;
    left: 100%;
  }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<script>
var slideIndex = 1;
//showSlides(slideIndex);

function plusSlides(n) {
  

}
var i= 0;
setInterval(function(){
  //showSlides(slideIndex += 1);
  
  var images = ["assets/images/image-612x408.jpg","assets/images/45-500x313.jpg","assets/images/vlcsnap-2020-04-12-20h24m27s582-1281x534.png"]
  var place = document.getElementById('images');
  place.setAttribute('src',images[i])
  i++;
  if (i == images.length) {
    i = 0;
  }
  },5000)

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
 
  
  if (n > slides.length) {
    slideIndex = 1
}    
  if (n < 1) {
    slideIndex = slides.length
}
  for (i = 0; i < slides.length; i++) {
      slides[slideIndex-1].style.display = "block"; 
      slides[i].style.display = "none";  
  }
  
  // 
  

}
</script>
</head>
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
   
    <?php
    include("menu.php");
    ?>

</section>
<section   class="" id='header1-f'>
    <div class="row" style="color: white;">
        <br>
    <div class="mbr-overla col-lg-12 col-md" style="opacity: 0.5; background-color: rgb(53, 53, 53);"></div>
    
    <div class="align-center container col-lg-12 col-md bg-dark" id="mainp" style="background-color: black;">
        <div class="row justify-content-center" style="">
            <img class="mySlides fade" id="images" style="width: 100%; top: -100px; height: 700px;" src="assets/images/image-612x408.jpg">
            
            <div class="col-12 col-lg-8" style="z-index: 5;position: absolute; top: 20px;">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2 animate__backInRight"><strong>Hermit Garage</strong></h1>
                <h2 class="mbr-section-title mbr-fonts-style mb-3 display-2 animate__backInRight">Professional Car Service Providers</h2>
                
                <p class=" display-7 animate__backInRight" style="color: tomato;">// ANY KIND OF CAR REPAIR AND MAINTENANCE YOU WOULD WANT!//</p>
                <div class="mbr-section-btn mt-3"><button id="nm" style="border-radius: 50px;" class="btn btn-dark display-4" onclick="getLocation()">Get Rescued</button><a id="nm2" class="btn btn-danger display-4" href="index.php#form4-y"> CONTACT US</a></div>
            </div>
           
        </div>
    </div>
    <style> 
#anime {
  width: 100px;
  height: 20px;
  color: red;
  position: relative;
  animation-name: blinker;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}

@keyframes blinker {
  0%   {color:red; left:0px; top:0px;}
  25%  {color:orange; left: 0px; top: 15px;}
  50%  {color:yellow; left: 0px; top: 35px; }
  75%  {color:green; left:0px; top:50px;}
  100% {color:red; left:0px; top:0px;}
}
</style>
<div style="visibility: hidden; height: 20px;"></div>
 <div class="row" id="btns" style="z-index: 5;margin: 0px 10px;padding: 0px 10px;">
                <a href="" class="col-md col-lg"><div id="btn-bl" class="row">
                    <div class="col-7" style="margin:auto;"><h6 style="font-weight: bold;">Hello Hermit User</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur </p></div>
                    <div class="col-3" style="font-size: 30px; display: flex; justify-content: center; margin: auto;"><i class="fa fa-cog"></i></div>
                </div></a>
                <button onclick="getLocation()" style="text-align: left;" class="col-md col-lg"><div id="btn-bl" class="row">

                    <div class="col-7" style="margin:auto;"><h6 style="font-weight: bold;"><br>Ask for Rescue</h6>
                        <p>Request towing, emergency rescue ...</p></div>
                    <div class="col-3" style="font-size: 30px; display: flex; justify-content: center; margin: auto;"><i class="fa fa-bullhorn" aria-hidden="true">  </i></div>
                </div></button>
                <a href="" class="col-md col-lg"><div id="btn-bl" class="row">
                    <div class="col-7" style="margin:auto;"><h6 style="font-weight: bold;">Hello Hermit User</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur </p></div>
                    <div class="col-3" style="font-size: 30px; display: flex; justify-content: center; margin: auto;"><i class="fas fa-car-mechanic"></i></div>
                </div></a>
                <a href="appointment.php" class="col-md col-lg"><div id="btn-bl" class="row">
                    <div class="col-7" style="margin:auto;">
                        <h6 style="font-weight: bold;">Request a Quote</h6>
                        <p>Make an a appointment with us.</p></div>
                    <div class="col-3" style="font-size: 30px; display: flex; justify-content: center; margin: auto;"><i class="fa fa-calendar"></i></div>
                </div></a>
            </div>
<!--<div class="col-lg-12 col-md" style="width: 100%; display: flex; justify-content: center; height: 100px;">
    <div id="anime" style="font-size: 40px;"><i class="fa fa-arrow-down"></i></div>
</div>-->

</section>

<section data-bs-version="5.1" class="content2 cid-sQkUx6sLQR mbr-fullscreen bg-light" id="whoweare">


    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-md col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/184349078_239613284609414_1046597693623168504_n.jpg" alt="Mobirise">
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="text-wrapper" >
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Hermit Garage</strong>
                        </h6>
                            
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            <strong>WHO WE ARE</strong><br>
                            Hermit Garage is an institution offering services for General Auto Repair & Maintenance and body painting services. Our services are a full guarantee for the wellbeing of your vehicle.  We Inspect vehicle computer and electronic systems to repair, maintain and upgrade. Car sale on behalf. We also do car body painting. Trust us with your car
                            and visit us today.
                            <br>
                             <strong>WHAT WE OFFER</strong>
                             <br>
                             We use only genuine parts, repair technics, and tools! We are ready to deal with any car repair needed or vehicle issues you may be experiencing. We have highly skilled technicians who are ready to deal you’re your car repair and maintenance and cater for all your car needs and requirements.
                            </p>

                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-primary display-4" href="index.php#form4-y">
                                Contact US
                            </a>
                            <a class="btn btn-success display-4" href="index.php#footer6-x">
                                Find Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="features4 bg-dark cid-sQkKBRNmnx mbr-fullscreen" id="features4-o">
    <style type="text/css">
        .item-title{
            font-size: 20px;
        }
    </style>
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Our Services<br></strong></h4>
            
        </div>
        <div class="row mt-4">
           <?php 
include("db.php");
$query = $con->prepare('SELECT * FROM services');
$query->execute();

foreach($query->fetchAll() as $row) { 
        
        $id = $row['id'];
        $title = $row['Name'];
        $image = $row['image'];
        $description = $row['description'];
        
       
        echo "
<div class='item features-image сol-12 col-md-6 col-lg-4'>
                <div class='item-wrapper'>
                    <div class='item-img'>
                        <img src='$image' alt='' title=''>
                    </div>
                    <div class='item-content'>
                        <h5 class='item-title mbr-fonts-style display-5'><strong>$title</strong><p class='mbr-text mbr-fonts-style mt-3 display-7'><a href='services.php?service_id=$id#item1'>Read more ></a></p></h5>
                        
                    </div>
                </div>
            </div>";
        
    }
?>
            
</section>
<section data-bs-version="5.1" class="content2 cid-sQkUx6sLQR mbr-fullscreen" id="content2-q">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Our Blog</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Read the recent blog posts about Hermit Garage</h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/173515593_222199713017438_8429043698062944541_n - Copy.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Best Auto repair services</a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                            <strong>John Smith</strong><em> 10-10-2021</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Hello World.</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="blog.php#item1" class="btn item-btn btn-primary display-7">Read More
                            &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/173684507_222199779684098_6452668566057281316_n - Copy.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Ontime Service Delivery</a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Ann
                                Brown</strong><em>&nbsp;09-09-2021</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Hello World.<br>
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="blog.php#item2" class="btn btn-primary item-btn display-7" >Read More
                            &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/174216550_222200139684062_3767130506757933578_n.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">One Stop shop for all repair service</a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Jessica Doe
                            </strong><em>08-08-2021</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Hello World.</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="blog.php#item3" class="btn btn-primary item-btn display-7">Read More
                            &gt;</a></div>
                </div>
            </div>

        </div>
    </div>
</section>
<section data-bs-version="5.1" class="form4 cid-sQleSWhuHQ mbr-fullscreen" id="form4-y">

    

    

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="WveUDDVrJ/kKs5SyyzbpAuE0//k49Wq2Sjb4J0mlMDFp6VIFnTVRHe/3hQeeNsN47EdvVBoA8CNYSNar45izzThv+OiwQ/FQH0snInlWvQpcxSN/f+aPoAcb8BiVN/AP">
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
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form4-y">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-y">
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-secondary display-4">Submit</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/p52-removebg-preview.png" alt="Mobirise">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer6 cid-sQl3ZyRCBs mbr-fullscreen" once="footers" id="footer6-x">

 <?php
 include("footer.php")
 ?>   

</section><?php
 include("designe.php")
 ?> 
 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>