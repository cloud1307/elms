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
        <li class="active"><a href="#">Dashboard</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      
    <?php
       include 'modal/notification.php'
      ?>


<?php if($userlevel=="System Admin" || $userlevel=="HR Manager"){ ?>
        <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <?php
                    $result = mysqli_query($conn,"SELECT * FROM tbl_leave_type ");
                    $num_rows3 = mysqli_num_rows($result);
                ?>
                <h3><?php echo $num_rows3; ?></h3>

                <p>Leave Types</p>
              </div>
              <div class="icon">
                <i class="ion ion-plane"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                        <?php
                            $result = mysqli_query($conn,"SELECT * FROM tbl_employee where enumEmployment_Status ='Active' ");
                           $num_rows3 = mysqli_num_rows($result);
                        ?>
                <h3><?php echo $num_rows3; ?></h3>

                <p>Active Employee</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                        <?php
                            $result = mysqli_query($conn,"SELECT * FROM tbl_account");
                           $num_rows3 = mysqli_num_rows($result);
                        ?>
                <h3><?php echo $num_rows3; ?></h3>

                <p>Registered Accounts</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                        <?php
                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE (a.enumLeave_Process = '1' OR a.enumLeave_Process = '3')");
                           $num_rows = mysqli_num_rows($result);
                        ?>
                <h3><?php echo $num_rows; ?></h3>

                <p>Pending Leave Application</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <a href="view_leave_application.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- <div class="col-lg-12">
              <div class="au-card m-b-30">
                  <div class="au-card-inner">
                  <div class="au-card-inner">
                      <h3 class="title-2 m-b-40">Leave Approved</h3>
                        
                  </div>
              </div>
          </div> -->
     
      
    <?php }else { ?>
        <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <?php
                    $result1 = mysqli_query($conn,"SELECT a.*, b.* FROM  tbl_leave_balance a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  where a.intEmployee_ID ='$id_session' AND b.varLeave_Type = 'VL' ");
                      $account_user1 = mysqli_fetch_array($result1);
                      if($account_user1 == ""){
                        $count1 = 0;
                      }else{
                        $count1 = $account_user1['Leave_Balance'];

                      }

                ?>
                <h3><?php echo $count1; ?></h3>

                <p>Vacation Leave</p>
              </div>
              <div class="icon">
                <i class="ion ion-plane"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                        <?php
                        $result1 = mysqli_query($conn,"SELECT a.*, b.* FROM  tbl_leave_balance a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  where a.intEmployee_ID ='$id_session' AND b.varLeave_Type = 'SL' ");
                        $account_user = mysqli_fetch_array($result1);

                        if ($account_user =="") {
                          $count = 0;
                        }else{
                          $count = $account_user['Leave_Balance'];
                        }
                ?>
                <h3><?php echo $count; ?></h3>

                <p>Sick Leave</p>
              </div>
              <div class="icon">
                <i class="fa fa-medkit"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                        
                <h3><?php echo $count + $count1; ?></h3>

                <p>Total Leave Balance</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                        <?php
                            $result = mysqli_query($conn,"SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE a.enumLeave_Process = '0' AND enumLeave_Status ='Pending' ");
                           $num_rows = mysqli_num_rows($result);

                           if ($num_rows == "") {
                             $numcount = 0;
                           }else{

                            $numcount =  $num_rows;
                           }
                        ?>
                <h3><?php echo $numcount; ?></h3>

                <p>Pending Leave Application</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
             
              <a href="view_leave_application.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                     
            


           
            </div>
          </div>
          <!-- ./col -->

          <!-- <div class="col-lg-12">
              <div class="au-card m-b-30">
                  <div class="au-card-inner">
                  <div class="au-card-inner">
                      <h3 class="title-2 m-b-40">Leave Approved</h3>
                       
                  </div>
              </div>
          </div> -->
          
      <?php }?>   

        
    </section>
    <!-- /.content -->
    </div> 
	
    <?php include 'include/footer.php'; ?>
    
  </div> 
  <?php include 'include/scripts.php'; ?>
  </body>
</html>