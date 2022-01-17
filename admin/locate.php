<?php
include('authenticate.php'); 
include('head.php');

?>
<?php 
include('../db.php');
$id = isset($_GET['id'])?$_GET['id']:'';
$qi = "UPDATE rescue SET status='True' WHERE id = '$id'";
$conn->query($qi);
$lat = isset($_GET['lat'])?$_GET['lat']:'';
$lon = isset($_GET['lon'])?$_GET['lon']:'';

 ?>
 <style type="text/css">
 	#dets div, #maps{
 		border-bottom: 1px solid black;
 		border: 1px solid black;
 		border-radius:0px 10px;
 		margin-bottom: 5px;
 	}
 	#dets div strong{
 		color: #ff9966;
 	}
 </style>
 <div class="container row">
 <div class="col-md">
 <h4>
Location Details
</h4>
<div id="dets">
	<div style="" class="container"><strong><i class="fas fa-city"></i> City: </strong><p  id="city"></p></div>
	<div  class="container"><strong><i class="fa fa-flag-alt"></i> Country: </strong><p id="country"></p></div>
	<div  class="container"><strong><i class="fa fa-code"></i> Country Code: </strong><p id="countrycode"></p></div>
	<div class="container"><strong><i class="fa fa-envelope"></i> Post Code: </strong><p id="postcode"></p></div>
	<div class="container"><strong><i class="fa fa-chart-area"></i> Region: </strong><p id="region"></p></div>
	<div class="container"><strong><i class="fa fa-map-marker-alt"></i> State: </strong><p id="state"></p></div>
	<div class="container"><strong><i class="fa fa-map-marker-alt"></i> Suburb: </strong><p id="suburb"></p></div>
</div>
</div>

  <div  class="col-md">
  	<h4>Locate the Customer</h4>
 <iframe 
  id="maps"
  style="width: 100%; height: 100%;"
  frameborder="1" 
  scrolling="yes" 
  marginheight="0" 
  marginwidth="0" 
  src="https://maps.google.com/maps?key=AIzaSyBgpIw4u6XbMvKkoooCZg9hXROG9tCfZMg&q=<?php echo $lat ?>,<?php echo $lon ?>&hl=en&z=14&amp;output=embed"
 >
 </iframe>
</div>
</div>
<script type="text/javascript">
  function getCity(coordinates) {
    var xhr = new XMLHttpRequest();
    
  
    // Paste your LocationIQ token below.
    xhr.open('GET', "https://us1.locationiq.com/v1/reverse.php?key=pk.2fe3703ade4f9520b08a97c200007a1d&lat=<?php echo $lat ?>&lon=<?php echo $lon ?>&format=json", true);
    xhr.send();
    xhr.onreadystatechange = processRequest;
    xhr.addEventListener("readystatechange", processRequest, false);
  
    function processRequest(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            var city = response.address.city;
            var country = response.address.country;
            var countrycode = response.address.country_code;
            var postcode = response.address.postcode;
            var region = response.address.region;
            var state = response.address.state;
            var suburb = response.address.suburb;
            //console.log(city);
            document.getElementById('city').innerHTML = city
            document.getElementById('country').innerHTML = country
            document.getElementById('countrycode').innerHTML = countrycode
            document.getElementById('postcode').innerHTML = postcode
            document.getElementById('region').innerHTML = region
            document.getElementById('state').innerHTML = state
            document.getElementById('suburb').innerHTML = suburb
            //console.log(response.address)
            return;
        }
    }
}
getCity()
</script>

 <?php 
include('tail.php')
?>