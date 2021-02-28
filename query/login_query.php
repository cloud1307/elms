

<?php
 session_start();
  include("../include/database.php");

 if (isset($_POST['login']))
    {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      //$password =md5($password);
      
      $query    = mysqli_query($conn, "SELECT * FROM tbl_account WHERE  varUsername='$username' and  varPassword='$password' ");
      $row    = mysqli_fetch_array($query);
      $num_row  = mysqli_num_rows($query); 
      
       if ($num_row > 0) 
         {     
           $_SESSION['id']=$row['intEmployee_ID'];
           $_SESSION['enumUser_Level'] =  $row['enumUser_Level'];
                
         }
       else
         {
           $_SESSION['error'] = 'Cannot find account with the username';
         }
     }



header('location: ../login.php');





?> 