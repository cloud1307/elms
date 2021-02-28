<?php 
include '../include/database.php';
include('../include/session.php');
     

if(isset($_POST['add_holiday'])){

 	$holiday=strtoupper(mysqli_real_escape_string($conn,$_POST['holiday']));
    $holiday_date=date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['holiday_date'])));

  $sql = "INSERT INTO tbl_holiday (varHoliday_Description, Holiday_Date) VALUES ('$holiday','$holiday_date')";

        
        if($conn->query($sql)){
            $_SESSION['success'] = 'New Holiday added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../view_holiday.php');




?>