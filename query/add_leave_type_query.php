<?php 

include '../include/database.php';     
include('../include/session.php');
if(isset($_POST['add_leave_type'])){

            $leave_type=strtoupper(mysqli_real_escape_string($conn,$_POST['leave_type']));
            $leave_description=strtoupper(mysqli_real_escape_string($conn,$_POST['leave_description']));
                         
   
        $sql = "INSERT INTO tbl_leave_type (varLeave_Type, varLeave_Description)
             VALUES ('$leave_type','$leave_description')";


             //echo "<script>alert('User successfully added!'); window.location='../view_leave_type.php'</script>";

        if($conn->query($sql)){
            $_SESSION['success'] = 'Leave Type added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
     }

     header('location: ../view_leave_type.php');

?>