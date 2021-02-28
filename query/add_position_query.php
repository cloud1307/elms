<?php 
include '../include/database.php';
include('../include/session.php');
     

if(isset($_POST['add_position'])){

 	$position=strtoupper(mysqli_real_escape_string($conn,$_POST['position']));
 	$salary_grade=mysqli_real_escape_string($conn,$_POST['salary_grade']);
 	$stepincrement=mysqli_real_escape_string($conn,$_POST['stepincrement']);
 	$monthly_salary=mysqli_real_escape_string($conn,$_POST['monthly_salary']);

  $sql = "INSERT INTO tbl_position (varPosition, varSalary_Grade, enumStep_Increment, decimalMonthly_Salary) VALUES ('$position', '$salary_grade', '$stepincrement', '$monthly_salary') ";

        
        if($conn->query($sql)){
            $_SESSION['success'] = 'Position added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../view_position.php');




?>