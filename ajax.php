<?php 
	include 'include/database.php';
	include('include/session.php');


if (isset($_POST['varLeave_Type'])) {	
	$query = "SELECT DISTINCT varLeave_Description, intLeave_ID  FROM `tbl_leave_type` WHERE varLeave_Type = '".$_POST['varLeave_Type']."'";		
	$result = $conn->query($query);	
	 while ($row = mysqli_fetch_array($result)) {			
		 	echo '<option value='.$row['intLeave_ID'].'>'.$row['varLeave_Description'].'</option>';
		 }	
}
?>