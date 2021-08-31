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


if (isset($_POST["date_from"])) {

	$date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $designation = $_POST['designation'];
    $job_status = $_POST['job_status'];
    $office = $_POST['office'];
    $withoutpay = $_POST['withoutpay'];
    $separation_date = $_POST['separation_date'];
    
    //$query = '';

    for ($count = 0; $count < count($date_from) ; $count++) { 
    	
    	$date_from_value =  mysqli_real_escape_string($conn, $date_from[$count]);
    	$date_to_value =  mysqli_real_escape_string($conn, $date_to[$count]);
    	$designation_value =  mysqli_real_escape_string($conn, $designation[$count]);
    	$job_status_value =  mysqli_real_escape_string($conn, $job_status[$count]);
    	$office_value =  mysqli_real_escape_string($conn, $office[$count]);
    	$withoutpay_value =  mysqli_real_escape_string($conn, $withoutpay[$count]);
    	$separation_date_value =  mysqli_real_escape_string($conn, $separation_date[$count]);
    	$emp_id_value = mysqli_real_escape_string($conn,$_POST['emp_id']);

    	if ($date_from_value !='' && $date_to_value !='' && $designation_value !='' && $job_status_value !='' && $job_status_value !='') {
    		
    		$query = "INSERT INTO tbl_service_record(intEmployee_ID, inclusive_DateFrom, inclusive_DateTo, intPosition_ID, enumJobStatus, intDepartment_ID, varAwol, varSeparation_Date) VALUES ('$emp_id_value ', '$date_from_value', '$date_to_value', '$designation_value', '$job_status_value', '$office_value', '$withoutpay_value', '$separation_date_value')";

    		//$query .= ' INSERT INTO tbl_service_record(inclusive_DateFrom, inclusive_DateTo, intPosition_ID, enumJobStatus, intDepartment_ID, varW/o_Pay, varSeparation_Date) VALUES ("'.$date_from_value. '", "' .$date_to_value. '", "' .$designation_value. '", "' .$job_status_value. '", "' .$office_value. '", "'.$withoutpay_value. '", "'.$separation_date_value. '"); ';  	

    	}
    }
if($query != '')
 {
 if($conn->multi_query($query))
  //if(mysqli_multi_query($conn, $query))
  {
   echo 'Service Record Successfully Added';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>


