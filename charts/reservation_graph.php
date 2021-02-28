<?php include('include/database.php'); ?>

<!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>

<?php

	$treated = mysql_query("select count(*) as pending from tblroom_reservation  where status = 'Pending'");
	$row = mysql_fetch_assoc($treated);
	
	$referred = mysql_query("select count(*) as Approved from tblroom_reservation  where status = 'Approved'");
	$row1 = mysql_fetch_assoc($referred);
	
	$treted = mysql_query("select count(*) as Check_In from tblroom_reservation  where status = 'Check in'");
	$row2 = mysql_fetch_assoc($treted);
	
	$refered = mysql_query("select count(*) as Check_Out from tblroom_reservation  where status = 'Check Out'");
	$row3 = mysql_fetch_assoc($refered);
	
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
		name: "companies",
		axisYType: "secondary",
		color: "gold",
		dataPoints: [
			{ y: <?php echo $row['pending'];?>, label: "Pending" },
			{ y: <?php echo $row1['Approved'];?>, label: "Approved" },
			{ y: <?php echo $row2['Check_In'];?>, label: "Check In" },
			{ y: <?php echo $row3['Check_Out'];?>, label: "Check Out" },
			
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
<script src="../bower_components/canvasjs.min.js"></script>
</body>
</html>