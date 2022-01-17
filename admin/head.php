<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta charset="utf-8">
  
    <title>Hermit Garage Admin</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/h-removebg-preview-121x94.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="../assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
          <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
          <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
          <link rel="stylesheet" href="../assets/parallax/jarallax.css">
          <link rel="stylesheet" href="../assets/animatecss/animate.css">
          <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
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
include('functions.php'); 
//$n = notification(); 
?>
<script type="text/javascript">
    $(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-body').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// load new notifications
$(document).on('click', '.notfi', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 200);
});
</script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light" style="display: flex;justify-content: center;" >
                    <img src="../assets/images/h-removebg-preview-121x94.png" alt="Home" style="height: 5.4rem;">
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index1.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="appointments.php"><i class="far fa-calendar-check"></i> Appointments <?php appointments() ?></a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="overview.php"><i class="far fa-eye"></i> Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="inquiries.php"><i class="fa fa-question-circle" aria-hidden="true"></i></i> Inquiries</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="services.php"><i class="fas fa-car"></i> Services</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="blog.php"><i class="fas fa-th-large"></i> Blog</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="about.php"><i class="far fa-address-card"></i> About Us</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper" >
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background: #ff9966 !important;">
                    <div class="container-fluid">
                        <button class="btn btn-success" id="sidebarToggle" data-toggle="tooltip" data-placement="bottom" title="Menu"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <style>
                                .badge {
                                    position: relative;
                                    border: 1px solid white;
                                    border-radius: 50%;
                                    color: white;
                                }
                            </style>

                                <li class="nav-item active"><a class="nav-link notfi" type="button" data-toggle="modal" data-target="#exampleModalLong" id="notif" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#" data-toggle="tooltip" data-placement="bottom" title="Notification"><i class="fas fa-bell"><span class="sr-only">unread messages</span></i> Notification <span class="badge badge-dark count" id="notificationb"></span></a>
                                    <div style="height:auto;background: #ffe0cc; max-height: 500px; overflow-y: scroll;" class="dropdown-menu dropdown-menu-end p-4" aria-labelledby="notif">
                                        <h5 class="dropdown-header"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Notifications</h5>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-body"></div>
                                        
                                        
                                    </div>
                                   
                                </li>
                                <li class="nav-item active"><a class="nav-link" href="index1.php" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fas fa-home"></i> Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="bottom" title="<?php 
                                    echo $_SESSION['username'];
                                     ?>"><i class="fas fa-user-shield"></i> <?php 
                                    
                                    echo $_SESSION['username'];
                                     ?></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
           
                <div class="container-fluid">