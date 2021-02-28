<?php include('include/database.php'); ?>

<!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>

<?php

	

	$sql = "SELECT count(*) as Pending FROM tbl_leave_application where enumRemarks ='Pending' ";	
	$query = $conn->query($sql);
	$row1 = $query->fetch_assoc();

?>	

	
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Patient Remarks Summary"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
	},
	data: [{
		type: "bar",
		name: "Approved Leave",
		axisYType: "secondary",
		color: "gold",
		dataPoints: [
			{ y: <?php echo $row1['Pending'];?>, label: "January" },
			
			
		]
	}
	
	]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="bower_components/chart/canvasjs.min.js"></script>
</body>
</html>