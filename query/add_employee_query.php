 <?php 

include '../include/database.php';
include('../include/session.php');
     

if(isset($_POST['add_employee'])){
          $employee_id=mysqli_real_escape_string($conn,$_POST['employee_id']); 
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
            $enumscheduletype=mysqli_real_escape_string($conn,$_POST['enumscheduletype']);
            
            $fullname = $_POST['firstname'].$_POST['surname'];
             
            $username = strtolower(mysqli_real_escape_string($conn,$fullname));
            $enumUserLevel=mysqli_real_escape_string($conn,$_POST['enumUserLevel']);
              
   
        $sql = "INSERT INTO tbl_employee (intEmployee_ID,varFirstname, varMiddlename, varLastname, enumGender, varExtension_Name, enumCivil_Status, Birth_Date, intPosition_ID, varAddress, intDepartment_ID, enumEmployment_Status, Employment_Date, enumWork_Schedule )
             VALUES ('$employee_id','$firstname','$middlename','$surname','$gender','$extension','$civil_status','$date_of_birth','$position','$address','$department','Active','$employment_date', '$enumscheduletype')";



         $sql1 ="INSERT INTO tbl_account (intEmployee_ID, varUsername, varPassword, enumUser_Level, dateCreated) VALUES ('$employee_id','$username','1234','$enumUserLevel', CURDATE())";

         $sql2 = "INSERT INTO tbl_leave_balance(intLeave_ID, intEmployee_ID,Leave_Balance) VALUES ('1','$employee_id','0')";
         $sql3 = "INSERT INTO tbl_leave_balance(intLeave_ID, intEmployee_ID,Leave_Balance) VALUES ('2','$employee_id','0')";

        if($conn->query($sql) AND $conn->query($sql1) AND $conn->query($sql2) AND $conn->query($sql3)){
            $_SESSION['success'] = 'Employee added Successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }

    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
    }

     header('location: ../view_employee.php');




            ?>