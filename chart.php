<?php
 
$dataPoints = array(
	array("label"=> "Ujwala sav + Research", "y"=> 590),
	array("label"=> "Ujwala Sav + Certificate", "y"=> 261),
	array("label"=> "Sahil shah + Research", "y"=> 158),
	array("label"=> "Srikanth + TESTING", "y"=> 72),
	array("label"=> "Sahil Shah + Project", "y"=> 573),
	array("label"=> "Project development", "y"=> 126)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Overall statics"
	},
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                              