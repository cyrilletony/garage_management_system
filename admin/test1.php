<script type="text/javascript">
  function getCity(coordinates) {
    var xhr = new XMLHttpRequest();
    
  
    // Paste your LocationIQ token below.
    xhr.open('GET', "https://us1.locationiq.com/v1/reverse.php?key=pk.2fe3703ade4f9520b08a97c200007a1d&lat=-1.2188842&lon=36.9039835&format=json", true);
    xhr.send();
    xhr.onreadystatechange = processRequest;
    xhr.addEventListener("readystatechange", processRequest, false);
  
    function processRequest(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            var city = response.address.city;
            console.log(city);
            console.log(response.address)
            return;
        }
    }
}
getCity()
</script>