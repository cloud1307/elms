<?php 

include '../include/database.php';
include('../include/session.php');
     

if(isset($_POST['add_leave_application'])){
    if(isset($_POST['add_leave_application'])){
    
     	
    	
        $emp_id=mysqli_real_escape_string($conn,$_POST['emp_id']);
        $date_from = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_from'])));
     	$date_to = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_to'])));
     	$leave_type=mysqli_real_escape_string($conn,$_POST['description']);
     //	$description=mysqli_real_escape_string($conn,$_POST['description']);
        $leave_process=mysqli_real_escape_string($conn,$_POST['leave_process']);
if($userlevel=="Employee"){
      	//$sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, varDescription_Leave, Inclusive_Date_From, Inclusive_Date_To) VALUES ('$id_session', '$leave_type', CURDATE(), '$description', '$date_from','$date_to')";
        $sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, Inclusive_Date_From, Inclusive_Date_To) VALUES ('$id_session', '$leave_type', CURDATE(), '$date_from','$date_to')";

    }else{

    	
    	//$date_from = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_from'])));
     //	$date_to = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_to'])));
     	//$leave_type=mysqli_real_escape_string($conn,$_POST['leave_type']);
     //	$description=mysqli_real_escape_string($conn,$_POST['description']);
     	$leave_process=mysqli_real_escape_string($conn,$_POST['leave_process']);

    //   $sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, varDescription_Leave, Inclusive_Date_From, Inclusive_Date_To, enumLeave_Process) VALUES ('$id_session', '$leave_type', CURDATE(), '$description', '$date_from','$date_to','$leave_process')";
        $sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, Inclusive_Date_From, Inclusive_Date_To, enumLeave_Process) VALUES ('$emp_id', '$leave_type', CURDATE(),  '$date_from','$date_to','$leave_process')";


    }
            
            if($conn->query($sql)){
                $_SESSION['success'] = ' Leave Application Successfully Applied';
            }
            else{
                $_SESSION['error'] = $conn->error;
            }

        }
        else{
            $_SESSION['error'] = 'Fill up add form first';
        }

        if($userlevel=="Employee"){

         header('location: ../index.php');
     }else{

        header('location: ../view_leave_application.php');
     }

}


if(isset($_POST['add_application'])){

if(isset($_POST['add_application'])){


       if($userlevel=="Employee"){
            $date_from = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_from'])));
            $date_to = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_to'])));
            $leave_type=mysqli_real_escape_string($conn,$_POST['leave_type']);
            $description=mysqli_real_escape_string($conn,$_POST['description']);
            $leave_process=mysqli_real_escape_string($conn,$_POST['leave_process']);

             $sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, varDescription_Leave, Inclusive_Date_From, Inclusive_Date_To, enumLeave_Process) VALUES ('$id_session', '$leave_type', CURDATE(), '$description', '$date_from','$date_from','0')";

      }else{

            $date_from = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_from'])));
            $date_to = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['date_to'])));
            $leave_type=mysqli_real_escape_string($conn,$_POST['leave_type']);
            $description=mysqli_real_escape_string($conn,$_POST['description']);
            $leave_process=mysqli_real_escape_string($conn,$_POST['leave_process']);

             $sql = "INSERT INTO tbl_leave_application (intEmployee_ID, intLeave_ID, Filling_Date, varDescription_Leave, Inclusive_Date_From, Inclusive_Date_To, enumLeave_Process) VALUES ('$id_session', '$leave_type', CURDATE(), '$description', '$date_from','$date_from','0')";


      }


            if($conn->query($sql)){
                $_SESSION['success'] = ' Leave Application Successfully Applied';
            }
            else{
                $_SESSION['error'] = $conn->error;
            }

        }
        else{
            $_SESSION['error'] = 'Fill up add form first';
        }

         header('location: ../index.php');



}






?>