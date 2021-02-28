
<?php 
include ('../include/database.php');
include('../include/session.php');

// DELETE QUERY WORK SCHEDULE
if(isset($_POST['delete_sched'])){
if(isset($_POST['delete_sched'])){

	//$get_id=$_GET['intWorkSched_ID'];

	$sched_id = mysqli_real_escape_string($conn,$_POST['sched_id']);
	$sql ="DELETE FROM tbl_work_schedule WHERE intWorkSched_ID = '$sched_id'";
	


if($conn->query($sql)){
             $_SESSION['danger'] = 'Work Schedule Successfully Deleted';
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
// DELETE QUERY HOLIDAY
if(isset($_POST['delete_holiday'])){

if(isset($_POST['delete_holiday'])){

	//$get_id=$_GET['intWorkSched_ID'];

	$holi_id = mysqli_real_escape_string($conn,$_POST['holi_id']);
	$sql ="DELETE FROM tbl_holiday WHERE intholiday_ID = '$holi_id'";
	


if($conn->query($sql)){
             $_SESSION['danger'] = 'Holiday Successfully Deleted';
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
// END QUERY HOLIDAY DELETE


// DELETE QUERY DEPARTMENT
if(isset($_POST['delete_department'])){

if(isset($_POST['delete_department'])){

    //$get_id=$_GET['intWorkSched_ID'];

    $depart_id = mysqli_real_escape_string($conn,$_POST['depart_id']);
    $sql ="DELETE FROM tbl_department WHERE intDepartment_ID = '$depart_id'";
    


if($conn->query($sql)){
             $_SESSION['danger'] = 'Department Successfully Deleted';
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
// END QUERY DEPARTMENT


// DELETE QUERY POSITION
if(isset($_POST['delete_position'])){

if(isset($_POST['delete_position'])){

    //$get_id=$_GET['intWorkSched_ID'];

    $position_id = mysqli_real_escape_string($conn,$_POST['position_id']);
    $sql ="DELETE FROM tbl_position WHERE intPosition_ID = '$position_id'";
    


if($conn->query($sql)){
             $_SESSION['danger'] = 'Position Successfully Deleted';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }
header('location: ../view_position.php');
}
// END QUERY POSITION


// DELETE QUERY LEAVE TYPE
if(isset($_POST['delete_leave_type'])){

if(isset($_POST['delete_leave_type'])){

    //$get_id=$_GET['intWorkSched_ID'];

    $leave_id = mysqli_real_escape_string($conn,$_POST['leave_id']);
    $sql ="DELETE FROM tbl_leave_type WHERE intLeave_ID = '$leave_id'";
    


if($conn->query($sql)){
             $_SESSION['danger'] = 'Position Successfully Deleted';
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
// END QUERY LEAVE TYPE



// DELETE QUERY LEAVE APPLICATION
if(isset($_POST['delete_leave_application'])){

if(isset($_POST['delete_leave_application'])){

    //$get_id=$_GET['intWorkSched_ID'];

    $application_id = mysqli_real_escape_string($conn,$_POST['application_id']);
    $sql ="DELETE FROM tbl_leave_application WHERE intApplication_ID = '$application_id'";
    


if($conn->query($sql)){
             $_SESSION['danger'] = 'Application Leave Successfully Deleted';
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
// END QUERY LEAVE TYPE
?>