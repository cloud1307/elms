<?php 
include ('../include/database.php');
include('../include/session.php');
     

if(isset($_POST['add_schedule'])){

 	$timein=date('H:i:s', strtotime(mysqli_real_escape_string($conn,$_POST['timein'])));
    $timeout=date('H:i:s', strtotime(mysqli_real_escape_string($conn,$_POST['timeout'])));    
    $workschedule=mysqli_real_escape_string($conn,$_POST['workschedule']);
  $sql = "INSERT INTO tbl_work_schedule (Inclusive_Time_From, Inclusive_Time_To, enumSchedule_Type) VALUES ('$timein','$timeout', '$workschedule')";

        
        if($conn->query($sql)){
            $_SESSION['success'] = 'New Time Schedule added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../view_workschedule.php');




?>