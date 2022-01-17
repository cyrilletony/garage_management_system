<?php
include('authenticate.php'); 
include('head.php');

?>
<h3 style="font-weight: bold;">Dashboard</h3>
<?php
    $dataPoints = array(
        array("y" => 6, "label" => "Apple"),
        array("y" => 4, "label" => "Mango"),
        array("y" => 5, "label" => "Orange"),
        array("y" => 7, "label" => "Banana"),
        array("y" => 4, "label" => "Pineapple"),
        array("y" => 6, "label" => "Pears"),
        array("y" => 7, "label" => "Grapes"),
        array("y" => 5, "label" => "Lychee"),
        array("y" => 4, "label" => "Jackfruit")
    );
?>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "dark1", // "light2", "dark1", "dark2"
    animationEnabled: true, // change to true      
    title:{
        text: "Bar Chart"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }
    ]
});
chart.render();
var chart = new CanvasJS.Chart("chartContainer2", {
    theme: "dark1", // "light2", "dark1", "dark2"
    animationEnabled: true, // change to true      
    title:{
        text: "Spline Graph"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "spline",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }
    ]
});
chart.render();
var chart = new CanvasJS.Chart("chartContainer3", {
    theme: "dark1", // "light2", "dark1", "dark2"
    animationEnabled: true, // change to true      
    title:{
        text: "Line Chart"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "line",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }
    ]
});
chart.render();
var chart = new CanvasJS.Chart("chartContainer4", {
    theme: "dark1", // "light2", "dark1", "dark2"
    animationEnabled: true, // change to true      
    title:{
        text: "Area Chart"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "area",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }
    ]
});
chart.render();

}

</script>
<div class="container row">
<div id="chartContainer" class="col-md" style="height: 230px;"></div>
<div id="chartContainer2" class="col-md" style="height: 230px;"></div>
</div>
<hr>
<div class="container row">
    <div id="chartContainer3" class="col-md" style="height: 230px;"></div>
    <div id="chartContainer4" class="col-md" style="height: 230px;"></div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

<?php 
include('tail.php')
?>