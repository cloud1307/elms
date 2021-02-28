<?php
include '../include/database.php';
include('../include/session.php');

if(isset($_POST['update_account'])){
	
		$username = strtolower(mysqli_real_escape_string($conn,$_POST['username']));
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$question1 = mysqli_real_escape_string($conn,$_POST['question1']);
		$answer1 = mysqli_real_escape_string($conn,$_POST['answer1']);
		$question2 = mysqli_real_escape_string($conn,$_POST['question2']);
		$answer2 = mysqli_real_escape_string($conn,$_POST['answer2']);
		$emailaddress = mysqli_real_escape_string($conn,$_POST['emailaddress']);

	$sql = "UPDATE tbl_account SET varUsername = '$username', varPassword = '$password', varQuestion1 = '$question1', varAnswer1 = '$answer1', varQuestion2 = '$question2', varAnswer2 = '$answer2', varEmailaddress = '$emailaddress' WHERE intEmployee_ID = '$id_session'";
		
		 if($conn->query($sql)){
            $_SESSION['success'] = 'Account Successfully Updated';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../index.php');
?>