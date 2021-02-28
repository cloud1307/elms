<?php
	session_start();
	include 'include/database.php';

	if (!isset($_SESSION['id']) && !isset($_SESSION['enumUser_Level'])){
		header('location: login.php');
	}
	 $id_session=$_SESSION['id'];
	 $userlevel = $_SESSION['enumUser_Level'];


	$sql = "SELECT a.*,b.*,c.*,d.* FROM tbl_employee a 
			INNER JOIN tbl_position b ON b.intPosition_ID = a.intPosition_ID
			INNER JOIN tbl_department d ON d.intDepartment_ID = a.intDepartment_ID
			INNER JOIN tbl_account c on  a.intEmployee_ID = c.intEmployee_ID
			WHERE a.intEmployee_ID =  '".$_SESSION['id']."'";

	//$sql = "SELECT * FROM  tbl_account  WHERE intEmployee_ID = '".$_SESSION['id']."'";
	$query = $conn->query($sql);
	$emp_user = $query->fetch_assoc();
	$gender = $emp_user['enumGender'];	
	$emp_id =$emp_user['intEmployee_ID'];
	$dpartment_id = $emp_user['intDepartment_ID'];
	
?>