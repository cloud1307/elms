<?php 
    if($userlevel=="Employee"){
    echo "<body class='hold-transition skin-green sidebar-mini'>";
    }elseif($userlevel=="Admin Officer"){
    echo "<body class='hold-transition skin-red sidebar-mini'>";
    }elseif($userlevel=="HR Manager"){
    echo "<body class='hold-transition skin-purple sidebar-mini'>";
    }elseif($userlevel=="System Admin"){    
      echo "<body class='hold-transition skin-white sidebar-mini'>";
    }else{
      echo "<body class='hold-transition skin-yellow sidebar-mini'>";
    }
?>

<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
       <span class="logo-mini"><b>E</b>LMS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Employees' LMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">        
        <ul class="nav navbar-nav">
           <?php 
            if ($userlevel == "Employee") {

                $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE c.intEmployee_ID = '$id_session' AND a.enumLeave_Status ='Approved'  ");

                        }else if($userlevel == "Department Head"){

                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE a.enumLeave_Process = '0' AND enumLeave_Status ='Pending' AND d.intDepartment_ID = '$dpartment_id' ");
                          }else if($userlevel == "HR Manager"){

                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE (a.enumLeave_Process = '1'  OR a.enumLeave_Process = '3') AND enumLeave_Status ='Pending' ");
                          }else if($userlevel == "Admin Officer"){

                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE a.enumLeave_Process = '2' AND enumLeave_Status ='Pending' ");
                          }else{

                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID");
                          }


                  $num_rows = mysqli_num_rows($result);


                  if ($num_rows== "") {
                             $numcount = 0;
                           }else{

                            $numcount =  $num_rows;
                           }

                ?>



          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
             <span class="label label-warning"><?php echo $numcount; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $numcount; ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->

                 


                <ul class="menu">
                   <?php 

                      if($userlevel=="Admin Officer"){
                   
                     $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID  WHERE a.enumLeave_Process = '2' AND a.enumLeave_Status ='Pending' ";

                  }elseif($userlevel=="Department Head"){

                    

                     $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE a.enumLeave_Process = '0' AND enumLeave_Status ='Pending' AND d.intDepartment_ID = '$dpartment_id' ";

                    

                     
                  }elseif($userlevel=="HR Manager"){ 
                    $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID  WHERE a.enumLeave_Process = '1' OR a.enumLeave_Process = '3' ";
                    
                  }elseif($userlevel=="System Admin"){ 

                    $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID ";
                     
                  }else{

                   $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID WHERE a.enumLeave_Status ='Approved' AND c.intEmployee_ID ='$id_session' ";
                }
                    $query6 = $conn->query($sql6);
                    while($appleaverow = $query6->fetch_assoc()){
                     $employeename = strtolower($appleaverow['varLastname'] . " ". $appleaverow['varFirstname']);
                     $employeename1 = ucwords($employeename);


                  ?>
                  <li>
                   <a href="view_leave_application.php">
                      <i class="fa fa-user text-aqua"></i><?php echo $employeename1 ." " . $appleaverow['enumLeave_Status'] ;?> Leave
                    </a>
                  </li>
                  
                  <?php }?>
                </ul>
              </li>
              <li class="footer"><a href="view_leave_application.php">View all</a></li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (!empty($emp_user['photo'])) ? 'images/'.$emp_user['photo'] : 'images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo strtoupper($emp_user['varUsername']); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($emp_user['photo'])) ? 'images/'.$emp_user['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo strtoupper($emp_user['varUsername']); ?>
                  <small>Member since <?php echo date('M. d, Y', strtotime($emp_user['dateCreated'])); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">                
                   <a href="#modal-update-account" data-toggle="modal" class="btn btn-default btn-flat">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
     <!--MODAL FOR UPDATE ACCOUNT  -->
                        <div class="modal fade" id="modal-update-account">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title "><i class="fa fa-pencil-square-o margin-r-5"></i> Update Account</h4>
                              </div>
                              <div class="box-body ">
                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_account_query.php">

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Username</label>   
                                    <input type="text" class="form-control"  name="username" value="<?php echo $emp_user['varUsername']; ?>">
                                </div>                                                                                 
                              </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Password</label>   
                                    <input type="password" class="form-control"  name="password" value="<?php echo $emp_user['varPassword']; ?>" >
                                </div>                                                                                 
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Security Question 1</span></label>   
                                    <select class="form-control" style="width: 100%;" name="question1">
                                        <option value="<?php echo $emp_user['varQuestion1']; ?>"><?php echo $emp_user['varQuestion1']; ?></option>                                    
                                        <option value="What is your favorite movie?">What is your favorite movie?</option>
                                        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                        <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                        <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                        <option value="What is the name of the first school you attended?">What is the name of the first school you attended?</option>
                                        <option value="What is the name of your best friend from childhood?">What is the name of your best friend from childhood?</option>
                                        <option value="What is the name of your first teacher?">What is the name of your first teacher?</option>
                                                               
                                    </select>
                                </div>                                              
                              </div> 
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Answer 1</label>                                    
                                    <input type="text" class="form-control"  name="answer1" value="<?php echo $emp_user['varAnswer1']; ?>" placeholder="Enter Your Answer" >
                                </div>                                                                                 
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Security Question 2</span></label>   
                                    <select class="form-control" style="width: 100%;" name="question2">
                                        <option value="<?php echo $emp_user['varQuestion2']; ?>"><?php echo $emp_user['varQuestion2']; ?></option>                                    
                                        <option value="What is your favorite movie?">What is your favorite movie?</option>
                                        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                        <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                        <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                        <option value="What is the name of the first school you attended?">What is the name of the first school you attended?</option>
                                        <option value="What is the name of your best friend from childhood?">What is the name of your best friend from childhood?</option>
                                        <option value="What is the name of your first teacher?">What is the name of your first teacher?</option>
                                                               
                                    </select>
                                </div>                                              
                              </div> 
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Answer 2</label>                                    
                                    <input type="text" class="form-control"  name="answer2" value="<?php echo $emp_user['varAnswer2']; ?>" placeholder="Enter Your Answer" >
                                </div>                                                                                 
                              </div>
                               
                               <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>                                    
                                    <input type="email" class="form-control"  name="emailaddress" value="<?php echo $emp_user['varEmailaddress']; ?>" placeholder="Enter Your Email Address" >
                                </div>                                                                                 
                              </div>
                         
                              <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" name="update_account" class="btn btn-primary">Save changes</button>
                              </form>                                                                              
                            
                              </div>
                              
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

