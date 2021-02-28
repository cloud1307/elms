<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        Welcome To Employees' Leave Management System
        <small>Start Updating Your information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Profile</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      
    <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->
               <img src="<?php echo (!empty($emp_user['photo'])) ? 'images/'.$emp_user['photo'] : 'images/profile.jpg'; ?>" class="profile-user-img img-responsive img-circle" alt="User profile picture">
              <h3 class="profile-username text-center"><?php echo strtoupper($emp_user['varFirstname']. " " .$emp_user['varLastname']." ".$emp_user['varExtension_Name']); ?></h3>

              

              <p class="text-muted text-center"><?php echo $emp_user['varPosition'] ; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <?php
                    $result1 = mysqli_query($conn,"SELECT a.*, b.* FROM  tbl_leave_balance a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  where a.intEmployee_ID ='$id_session' AND b.varLeave_Type = 'VL' ");
                      $account_user = mysqli_fetch_array($result1);
                ?>
                  <b>Vacation Leave</b> <a class="pull-right"><?php echo number_format($account_user['Leave_Balance'],2); ?></a>
                </li>
                <li class="list-group-item">
                  <?php
                    $result1 = mysqli_query($conn,"SELECT a.*, b.* FROM  tbl_leave_balance a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  where a.intEmployee_ID ='$id_session' AND b.varLeave_Type = 'SL' ");
                      $account_user = mysqli_fetch_array($result1);
                ?>
                  <b>Sick Leave</b> <a class="pull-right"><?php echo number_format($account_user['Leave_Balance'],2); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Other Leaves</b> <a class="pull-right">0.0</a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Department</strong>

              <p class="text-muted">
                <?php echo $emp_user['varDepartment'] ; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Salary Grade</strong>

              <p class="text-muted"><?php echo $emp_user['varSalary_Grade'] ; ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Monthly Salary</strong>

              <p>
                <?php echo "Php " .number_format($emp_user['decimalMonthly_Salary'],2) . " /Month" ; ?>
              </p>

         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Vacation Leave History</a></li>
              <li><a href="#timeline" data-toggle="tab">Sick Leave History</a></li>
              <li><a href="#settings" data-toggle="tab">Other Leave</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

 <!-- Main content -->
    <section class="content"> 
      
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
             
            <div class="box-body">
              <table id="dataleave" class="table table-bordered">
                <thead>
                           
                  <th>Date File</th>                 
                  <th>Type of Leave</th>
                  <th>Inclusive Date</th>
                  <th>Number of Days</th>                  
                  <th>Leave Remarks</th>                 
                  
                </thead>
                <tbody>
                  <?php

             

                    

                     $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE b.intLeave_ID = '1' AND a.enumLeave_Status ='Approve' AND c.intEmployee_ID = '$id_session' ";


                   $query6 = $conn->query($sql6);
                    while($appleaverow = $query6->fetch_assoc()){
                   

                     

                     $datetime1 = strtotime($appleaverow['Inclusive_Date_From']);
                     $datetime2 = strtotime($appleaverow['Inclusive_Date_To']);
                     $datediff = $datetime2 -$datetime1;

                    
                      ?>
                        <tr>
                                   
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Filling_Date'])) ; ?></td>  
                          <td><?php echo $appleaverow['varLeave_Type'] ; ?></td>
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Inclusive_Date_From'])). " - " .date("M d, Y ",strtotime($appleaverow['Inclusive_Date_To'])) ; ?></td>
                          <td><?php echo round($datediff / (60 * 60 * 24)) + 1; ?></td>
                          
                          <td><?php echo $appleaverow['enumLeave_Status']; ?></td>
                                                                                   
                        
                       
                        </tr>
                        
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      

        </div>
      </div>
    </section>
    <!-- /.content -->




              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                 <!-- Main content -->
   <!-- Main content -->
    <section class="content"> 
      <?php
       include 'modal/notification.php'
      ?>
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
             
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                           
                  <th>Date File</th>                 
                  <th>Type of Leave</th>
                  <th>Inclusive Date</th>
                  <th>Number of Days</th>                  
                  <th>Leave Remarks</th>                 
                  
                </thead>
                <tbody>
                  <?php

             

                    

                     $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE b.intLeave_ID = '2' AND enumLeave_Status ='Approve' AND c.intEmployee_ID = '$id_session' ";


                   $query6 = $conn->query($sql6);
                    while($appleaverow = $query6->fetch_assoc()){
                   

                     

                     $datetime1 = strtotime($appleaverow['Inclusive_Date_From']);
                     $datetime2 = strtotime($appleaverow['Inclusive_Date_To']);
                     $datediff = $datetime2 -$datetime1;

                    
                      ?>
                        <tr>
                                   
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Filling_Date'])) ; ?></td>  
                          <td><?php echo $appleaverow['varLeave_Type'] ; ?></td>
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Inclusive_Date_From'])). " - " .date("M d, Y ",strtotime($appleaverow['Inclusive_Date_To'])) ; ?></td>
                          <td><?php echo round($datediff / (60 * 60 * 24)) + 1; ?></td>
                          
                          <td><?php echo $appleaverow['enumLeave_Status']; ?></td>
                                                                                   
                        
                       
                        </tr>
                         <?php include 'modal/modal_update.php' ?>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      

        </div>
      </div>
    </section>
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                   <!-- Main content -->
    <section class="content"> 
      <?php
       include 'modal/notification.php'
      ?>
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
             
            <div class="box-body">
              <table id="example2" class="table table-bordered">
                <thead>
                           
                  <th>Date File</th>                 
                  <th>Type of Leave</th>
                  <th>Inclusive Date</th>
                  <th>Number of Days</th>                  
                  <th>Leave Remarks</th>                 
                  
                </thead>
                <tbody>
                  <?php

             

                    

                     $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE b.intLeave_ID IN(3,4,5,6) AND enumLeave_Status ='Approve' AND c.intEmployee_ID = '$id_session' ";


                   $query6 = $conn->query($sql6);
                    while($appleaverow = $query6->fetch_assoc()){
                   

                     

                     $datetime1 = strtotime($appleaverow['Inclusive_Date_From']);
                     $datetime2 = strtotime($appleaverow['Inclusive_Date_To']);
                     $datediff = $datetime2 -$datetime1;

                    
                      ?>
                        <tr>
                                   
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Filling_Date'])) ; ?></td>  
                          <td><?php echo $appleaverow['varLeave_Type'] ; ?></td>
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Inclusive_Date_From'])). " - " .date("M d, Y ",strtotime($appleaverow['Inclusive_Date_To'])) ; ?></td>
                          <td><?php echo round($datediff / (60 * 60 * 24)) + 1; ?></td>
                          
                          <td><?php echo $appleaverow['enumLeave_Status']; ?></td>
                                                                                   
                        
                       
                        </tr>
                         <?php include 'modal/modal_update.php' ?>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      

        </div>
      </div>
    </section>
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
       
        
    </section>
    <!-- /.content -->
    </div> 
  
    <?php include 'include/footer.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>
  </body>
</html>