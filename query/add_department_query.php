<?php 
include '../include/database.php';
include('../include/session.php');
     

if(isset($_POST['add_department'])){

 	$department=strtoupper(mysqli_real_escape_string($conn,$_POST['department']));

  $sql = "INSERT INTO tbl_department (varDepartment) VALUES ('$department')";

        
        if($conn->query($sql)){
            $_SESSION['success'] = 'New Department added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../view_department.php');




?>