<nav class="navbar navbar-dropdown navbar-expand-lg">
         <div class="navbar-collapse bg-dark" id="ll" style="color: white; height: 40px; width: 100%;">
        <table style="width:100%;" id="links">
            <tr>
                <td><span>Email:</span> info@hermit.co.ke </td>
                <td><span>Phone:</span> +254720214454 </td>
                <td><span>Location:</span> Hermit Garage, Castle inn Gardens, Off Garden Estate
Nairobi, </td>
            </tr>
        </table>
    </div>
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/h-removebg-preview-121x94.png" alt="Home" style="height: 5.4rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="index.php#header1-f"><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="index.php#whoweare"><span class="mbrib-italic mbr-iconfont mbr-iconfont-btn"></span>About&nbsp;</a></li>
                     <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-danger display-4" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-toggle="dropdown-submenu">
                        <span class="mbrib-new-file mbr-iconfont mbr-iconfont-btn"></span>Services</a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="dropdown-undefined" style="background-color: black;">
                         <?php 
                        include("db.php");
                        $query = 'SELECT * FROM services';
                        $results = mysqli_query($conn,$query);
                        $rows = mysqli_num_rows($results);
                        if ($rows > 0) {
                            for ($rows > 0 ; $rows--;) { 
                                $row = mysqli_fetch_array($results);
                                $id = $row['id'];
                                $title = $row['Name'];
                               
                                echo "<a class='show dropdown-item text-danger text-primary display-4' href='services.php?service_id=$id#item1'>$title</a>";
                            }
                            
                        }
                         ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link text-danger display-4" href="blog.php"><span class="mbrib-new-file mbr-iconfont mbr-iconfont-btn"></span>Blog</a></li>
                    <li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="index.php#form4-y"><span class="mbrib-contact-form mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="appointment.php">Book Appointment</a></div>
            </div>
        </div>
    </nav>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;height:2000px;}
@media only screen and (max-width:600px
    ){
    #links span{
        display: none;
    }
    #ll{
        display: none;
    }
    #icon-bar{
        display: none;
    }
}
#links{
    width: 100%;

}
#links span{
    display: block;
}
#icon-bar {
    display: block;
}
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
.instagram {
  background: #c13584;
  color: white;
}
.whatsapp {
    
border-radius: 10px;
  background: green;
  color: white;
}
#WhatsApp{
    position: fixed;
  top: 94%;
  left:10px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
 
}
#WhatsApp a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

#WhatsApp a:hover {
  background-color: #000;
}

.content {
  margin-left: 75px;
  font-size: 30px;
 
}

</style>
<body>
<div id="WhatsApp">
    <a href="https://wa.me/254720214454?text=Hello%20Hermit%20Garage.%20%20I%20need%20help%20with%20my%20car!" class="whatsapp"><i  class="fa fa-whatsapp"> WhatsApp Us</i></a> 
</div>
<div class="icon-bar" id="icon-bar">
  <a href="https://www.facebook.com/hermitgarage" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.google.com/search?q=hermit+garage&oq=hermit+garage+&aqs=chrome..69i57j69i59j69i60l3.5197j0j7&sourceid=chrome&ie=UTF-8" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a> 
  <a href="https://instagram.com/hermitgarage" class="instagram"><i class="fa fa-instagram"></i></a>
  

</div>

