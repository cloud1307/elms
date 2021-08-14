<?php
	include '../include/database.php';
	include('../include/session.php');



// UPDATE QUERY update_account_details
if(isset($_POST['update_account_details'])){
	if(isset($_POST['update_account_details'])){
			//$emp_id=mysqli_real_escape_string($conn,$_POST['emp_id']);
			//$employee_id=mysqli_real_escape_string($conn,$_POST['intEmployee_ID']);
			$surname=strtoupper(mysqli_real_escape_string($conn,$_POST['surname']));
            $firstname=strtoupper(mysqli_real_escape_string($conn,$_POST['firstname']));
            $middlename=strtoupper(mysqli_real_escape_string($conn,$_POST['middlename']));
            $extension=mysqli_real_escape_string($conn,$_POST['extension']);
            $gender=mysqli_real_escape_string($conn,$_POST['gender']);                                   
            $civil_status=mysqli_real_escape_string($conn,$_POST['civil_status']);           
            $date_of_birth = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_of_birth'])));
            $address =strtoupper(mysqli_real_escape_string($conn,$_POST['address']));
           $department=mysqli_real_escape_string($conn,$_POST['department']);
           $position=mysqli_real_escape_string($conn,$_POST['position']);
            $employment_date=date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['employment_date'])));
           $enumWork_Schedule=mysqli_real_escape_string($conn,$_POST['enumWork_Schedule']);
             $Day_Off=mysqli_real_escape_string($conn,$_POST['Day_Off']);
          $enumUserLevel=mysqli_real_escape_string($conn,$_POST['enumUserLevel']);
         

        if($userlevel=="HR Manager") {
	
		   $sql = "UPDATE  tbl_employee SET varFirstname = '$firstname' , varMiddlename = '$middlename', varLastname = '$surname', enumGender = '$gender', varExtension_Name = '$extension' , enumCivil_Status = '$civil_status', Birth_Date = '$date_of_birth', intPosition_ID = '$position', varAddress = '$address', intDepartment_ID = '$department',  Employment_Date = '$employment_date', enumWork_Schedule = '$enumWork_Schedule',enumDay_Off = '$Day_Off'  WHERE  intEmployee_ID  = '$id_session' "; 
             }else{
           $sql = "UPDATE  tbl_employee SET varFirstname = '$firstname' , varMiddlename = '$middlename', varLastname = '$surname', enumGender = '$gender', varExtension_Name = '$extension' , enumCivil_Status = '$civil_status', Birth_Date = '$date_of_birth', varAddress = '$address'  WHERE  intEmployee_ID  = '$id_session' "; 
		}
		 	//enumEmployment_Status = 'Active'
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Your Details Successfully Updated';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../update_account.php');

}








// UPDATE QUERY update_employee_details
if(isset($_POST['update_employee_details'])){
	if(isset($_POST['update_employee_details'])){

			$emp_id = mysqli_real_escape_string($conn,$_POST['emp_id']);
			$username=mysqli_real_escape_string($conn,$_POST['username']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);

			$employee_num=mysqli_real_escape_string($conn,$_POST['employee_num']);
			$surname=strtoupper(mysqli_real_escape_string($conn,$_POST['surname']));
            $firstname=strtoupper(mysqli_real_escape_string($conn,$_POST['firstname']));
            $middlename=strtoupper(mysqli_real_escape_string($conn,$_POST['middlename']));
            $extension=mysqli_real_escape_string($conn,$_POST['extension']);
            $gender=mysqli_real_escape_string($conn,$_POST['gender']);                                   
            $civil_status=mysqli_real_escape_string($conn,$_POST['civil_status']);           
            $date_of_birth = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_of_birth'])));
            $address =strtoupper(mysqli_real_escape_string($conn,$_POST['address']));
            $department=mysqli_real_escape_string($conn,$_POST['department']);
            $position=mysqli_real_escape_string($conn,$_POST['position']);
            $employment_date=date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['employment_date'])));
            $enumWork_Schedule=mysqli_real_escape_string($conn,$_POST['enumWork_Schedule']);
            $Day_Off=mysqli_real_escape_string($conn,$_POST['Day_Off']);
            $enumUserLevel=mysqli_real_escape_string($conn,$_POST['enumUserLevel']);
              
	
		    $sql = "UPDATE  tbl_employee SET intEmployee_number = '$employee_num', varFirstname = '$firstname' , varMiddlename = '$middlename', varLastname = '$surname', enumGender = '$gender', varExtension_Name = '$extension' , enumCivil_Status = '$civil_status', Birth_Date = '$date_of_birth', intPosition_ID = '$position', varAddress = '$address', intDepartment_ID = '$department',  Employment_Date = '$employment_date', enumWork_Schedule = '$enumWork_Schedule', enumDay_Off = '$Day_Off'  WHERE  intEmployee_ID = '$emp_id' "; 
             
          $sql1 = "UPDATE tbl_account SET varUsername = '$username', varPassword = '$password' , enumUser_Level = '$enumUserLevel' WHERE intEmployee_ID = '$emp_id' ";
		
		 	//enumEmployment_Status = 'Active'
		 	if($conn->query($sql) AND $conn->query($sql1)){
		            $_SESSION['success'] = 'Update Employee Details Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_employee.php');

}






// UPDATE QUERY HOLIDAY
	if(isset($_POST['update_holiday'])){
			if(isset($_POST['update_holiday'])){
				$holiday_id = mysqli_real_escape_string($conn,$_POST['holiday_id']);
				$holiday=strtoupper(mysqli_real_escape_string($conn,$_POST['holiday']));
		    	$holiday_date=date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['holiday_date'])));

		    	 $sql = "UPDATE tbl_holiday SET varHoliday_Description = '$holiday', Holiday_Date = '$holiday_date' WHERE intHoliday_ID ='$holiday_id' ";
		 
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Update Holiday Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_holiday.php');

}
// UPDATE QUERY SCHEDULE
	if(isset($_POST['update_schedule'])){
			if(isset($_POST['update_schedule'])){


				$sched_id = mysqli_real_escape_string($conn,$_POST['sched_id']);
				$timein=date('H:i:s', strtotime(mysqli_real_escape_string($conn,$_POST['timein'])));
			    $timeout=date('H:i:s', strtotime(mysqli_real_escape_string($conn,$_POST['timeout'])));    
			    $workschedule=mysqli_real_escape_string($conn,$_POST['workschedule']);
 				
 				$sql = "UPDATE tbl_work_schedule SET Inclusive_Time_From = '$timein', Inclusive_Time_To = '$timeout', enumSchedule_Type = '$workschedule' WHERE intWorkSched_ID = '$sched_id' ";
		    	 
		 
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Update Schedule Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_workschedule.php');

}
// UPDATE QUERY DEPARTMENT
if(isset($_POST['update_department'])){
			if(isset($_POST['update_department'])){

		$depart_id = mysqli_real_escape_string($conn,$_POST['depart_id']);	
		$department=strtoupper(mysqli_real_escape_string($conn,$_POST['department']));
		$department_shortname=strtoupper(mysqli_real_escape_string($conn,$_POST['department_shortname']));

		$sql = "UPDATE tbl_department SET varDepartment = '$department', varDepartment_Shortname = '$department_shortname'  WHERE intDepartment_ID = '$depart_id' ";
		    	 
		 
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Update Department Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_department.php');

}

// UPDATE QUERY POSITION
if(isset($_POST['update_position'])){
			if(isset($_POST['update_position'])){

		$position_id = mysqli_real_escape_string($conn,$_POST['position_id']);	
		$position=strtoupper(mysqli_real_escape_string($conn,$_POST['position']));
	 	$salary_grade=mysqli_real_escape_string($conn,$_POST['salary_grade']);
	 	$stepincrement=mysqli_real_escape_string($conn,$_POST['stepincrement']);
	 	$monthly_salary=mysqli_real_escape_string($conn,$_POST['monthly_salary']);

		$sql = "UPDATE  tbl_position SET varPosition = '$position', varSalary_Grade = '$salary_grade', enumStep_Increment = '$stepincrement', decimalMonthly_Salary = '$monthly_salary' WHERE intPosition_ID = '$position_id' ";
		    	 
		 
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Update Position Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_Position.php');

}

// UPDATE QUERY LEAVE TYPE
if(isset($_POST['update_leave_type'])){
			if(isset($_POST['update_leave_type'])){

		$leave_id = mysqli_real_escape_string($conn,$_POST['leave_id']);	
		$leave_type=strtoupper(mysqli_real_escape_string($conn,$_POST['leave_type']));
        $leave_description=strtoupper(mysqli_real_escape_string($conn,$_POST['leave_description']));
	
		    	 
		  $sql = "UPDATE  tbl_leave_type SET varLeave_Type = '$leave_type' , varLeave_Description = '$leave_description' WHERE intLeave_ID = '$leave_id' ";
		 	
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Update Leave Type Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_leave_type.php');

}
// UPDATE APPROVED QUERY DEPARTMENT HEAD
if(isset($_POST['approved_application'])){
			if(isset($_POST['approved_application'])){

	
		$application_id = mysqli_real_escape_string($conn,$_POST['application_id']);	
		
		if($userlevel=="Department Head"){		    	 
		  $sql1 = "UPDATE  tbl_leave_application SET enumLeave_Process = '1' WHERE intApplication_ID = '$application_id' ";
		 }	else if ($userlevel=="HR Manager"){
		 	$sql1 = "UPDATE  tbl_leave_application SET enumLeave_Process = '2' WHERE intApplication_ID = '$application_id' ";

		 }else{
		 	$sql1 = "UPDATE  tbl_leave_application SET enumLeave_Process = '3'  WHERE intApplication_ID = '$application_id' ";
		 }



		 	if($conn->query($sql1)){
		            $_SESSION['success'] = 'Leave Approved Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_leave_application.php');

}

// UPDATE DISAPPROVED QUERY DEPARTMENT HEAD
if(isset($_POST['disapproved_application'])){
			if(isset($_POST['disapproved_application'])){

		$application_id = mysqli_real_escape_string($conn,$_POST['application_id']);	
		$remarks = strtoupper(mysqli_real_escape_string($conn,$_POST['remarks']));
	
		    	 
		  $sql = "UPDATE  tbl_leave_application SET enumLeave_Process = '0' ,enumLeave_Status ='Disapprove', varRemarks = '$remarks' WHERE intApplication_ID = '$application_id' ";
		 	
		 	if($conn->query($sql)){
		            $_SESSION['success'] = 'Leave Disapproved Successfully';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		     header('location: ../view_leave_application.php');

}


// UPDATE DISAPPROVED QUERY COMPUTE LEAVE
if(isset($_POST['compute_leave'])){
			if(isset($_POST['compute_leave'])){

		$application_id = mysqli_real_escape_string($conn,$_POST['application_id']);	
		$leave_accumulated = mysqli_real_escape_string($conn,$_POST['leave_accumulated']);
		$balance_leave = mysqli_real_escape_string($conn,$_POST['balance_leave']);
		$leave_id = mysqli_real_escape_string($conn,$_POST['leave_id']);
		$emp_id = mysqli_real_escape_string($conn,$_POST['emp_id']);
		    	 
		  $sql = "UPDATE  tbl_leave_application SET enumLeave_Process = '4' ,enumLeave_Status ='Approve' WHERE intApplication_ID = '$application_id' ";
		  $sql2 =" UPDATE tbl_leave_balance  SET Leave_Balance = '$balance_leave' WHERE intEmployee_ID = '$emp_id' AND intLeave_ID = '$leave_id' ";
		  $sql1 = "INSERT tbl_leave_deduction (intApplication_ID, Compute_Date, doubleDeduction) VALUES ('$application_id', CURDATE(), '$leave_accumulated') ";
		 

		
	

		 	if($conn->query($sql) AND $conn->query($sql1) AND  $conn->query($sql2)){
		            $_SESSION['success'] = 'Leave Successfully Computed';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		 
		  



		 	

		     header('location: ../view_leave_application.php');

}



if(isset($_POST['update_leave_application'])){
    if(isset($_POST['update_leave_application'])){

    	$application_id = mysqli_real_escape_string($conn,$_POST['application_id']);
		$date_from = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_from'])));
     	$date_to = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_to'])));
     	$leave_type=mysqli_real_escape_string($conn,$_POST['description']);
     	//$description=mysqli_real_escape_string($conn,$_POST['description']);
     	$leave_description=mysqli_real_escape_string($conn,$_POST['leave_description']);

     	// $sqlupdateleave = "UPDATE tbl_leave_application SET intLeave_ID = '$leave_type', varDescription_Leave = '$description', Inclusive_Date_From = '$date_from', Inclusive_Date_To = '$date_to', enumLeave_Process = '$leave_description' WHERE intApplication_ID ='$application_id' ";
     	$sqlupdateleave = "UPDATE tbl_leave_application SET intLeave_ID = '$leave_type',  Inclusive_Date_From = '$date_from', Inclusive_Date_To = '$date_to', enumLeave_Process = '$leave_description' WHERE intApplication_ID ='$application_id' ";


     	 	 	if($conn->query($sqlupdateleave) ){
		            $_SESSION['success'] = 'Leave Successfully Updated';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		 
		  



		 	

		     header('location: ../view_leave_application.php');
	
}




if(isset($_POST['update_earn_leave'])){
    if(isset($_POST['update_earn_leave'])){

    	$sqlEarnCredits = "UPDATE tbl_leave_balance SET Leave_Balance = Leave_Balance + 1.25 WHERE intEmployee_ID IN (SELECT intEmployee_ID FROM tbl_employee WHERE enumEmployment_Status = 'Active') ";



			if($conn->query($sqlEarnCredits) ){
		            $_SESSION['success'] = 'Leave Successfully Credit';
		        }
		        else{
		            $_SESSION['error'] = $conn->error;
		        }

		    }
		    else{
		        $_SESSION['error'] = 'Fill up add form first';
		    }

		 
		  



		 	

		     header('location: ../view_leave_earn.php');


}

	?>