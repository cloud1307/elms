<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        View List of Leave Application      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">View Leave Application</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      <?php
       include 'modal/notification.php'
      ?>
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
        <?php  if ($userlevel == "HR Manager"){ ?>
             <div class="box-header with-border">
               <a href="#modal-employee-apply-leave" data-toggle="modal"  class="btn btn-primary  btn-flat"><i class="fa fa-plus"></i> Apply Employee Leave</a>
            </div>

            <?php }?> 
            <div class="box-body">
              <table id="dataleave" class="table table-bordered">
                <thead>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>          
                  <th>Date Filed</th>
                  <th>Employee Name</th>
                  <th>Type of Leave</th>
                  <th>Inclusive Date</th>
                  <th>Number of Days</th>
                  <th>Leave Status</th>
                  <th>Leave Remarks</th>
                  
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php

                  if($userlevel=="Admin Officer"){
                   
                     $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID  WHERE a.enumLeave_Process = '2' AND a.enumLeave_Status ='Pending' ";

                  }elseif($userlevel=="Department Head"){

                    

                     $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_department d ON d.intDepartment_ID = c.intDepartment_ID WHERE a.enumLeave_Process = '0' AND enumLeave_Status ='Pending' AND d.intDepartment_ID = '$dpartment_id' ";

                     // $sql6 = "SELECT a.*,b.*,c.*,d.*  FROM tbl_employee a INNER JOIN tbl_department b O

                     
                  }elseif($userlevel=="HR Manager"){ 
                    $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID  WHERE a.enumLeave_Process = '1' OR a.enumLeave_Process = '3' ";
                    
                  }elseif($userlevel=="System Admin"){ 

                    $sql6 = "SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID ";
                     
                  }
                


                   $query6 = $conn->query($sql6);
                    while($appleaverow = $query6->fetch_assoc()){
                     $employeename = strtoupper($appleaverow['varLastname'] . " ". $appleaverow['varFirstname']);
                     if($appleaverow['enumLeave_Process'] == 3){
                      $Status_Leave = "For Computation";
                     }else{
                      $Status_Leave = "For Approval";
                     }

                     

                     $datetime1 = strtotime($appleaverow['Inclusive_Date_From']);
                     $datetime2 = strtotime($appleaverow['Inclusive_Date_To']);
                     $datediff = $datetime2 - $datetime1;

                    
                      ?>
                        <tr>
                        <td><input type="checkbox" name="intApplication_ID" value="<?php echo $appleaverow['intApplication_ID']; ?>">
                          
                        </td>                       
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Filling_Date'])) ; ?></td>
                          <td><?php echo $employeename ; ?></td>
                                                  
                          <td><?php echo $appleaverow['varLeave_Type'] ; ?></td>
                          <td><?php echo date("M d, Y ",strtotime($appleaverow['Inclusive_Date_From'])). " - " .date("M d, Y ",strtotime($appleaverow['Inclusive_Date_To'])) ; ?></td>
                          <td><?php echo round($datediff / (60 * 60 * 24)) + 1; ?></td>

                          <td><?php echo $Status_Leave ; ?></td>
                          <td><?php echo $appleaverow['enumLeave_Status']; ?></td>
                                                                                   
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <?php if($userlevel=="Department Head"){?>
                                  <li><a href="#approved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Approve</a></li>
                                  <li><a href="#disapproved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>" data-toggle="modal">Disapprove</a></li>
                                  <li><a href="#delete-modal-leave<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Delete</a></li>
                                <?php }?>
                                 <?php if($userlevel== "Admin Officer"){?>
                                  <li><a href="#approved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Approve</a></li>
                                  <li><a href="#disapproved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>" data-toggle="modal">Disapprove</a></li>
                                <?php  }?>
                                 <?php if($userlevel=="HR Manager" || $userlevel == "System Admin"){?>
                                 
                                 <?php if($appleaverow['enumLeave_Process'] == 1){?>
                                 <li><a href="#approved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Approve</a></li>
                                  <li><a href="#disapproved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>" data-toggle="modal">Disapprove</a></li>

                                <?php }?>
                                 <?php if($appleaverow['enumLeave_Process'] == 3){?>
                                  <li><a href="#compute-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>" data-toggle="modal">Compute Leave</a></li>
                                  <?php } ?>
                                  <li><a href="#update-modal-employee-leave-apply<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Edit</a></li>
                                  <li><a href="#delete-modal-leave<?php echo $appleaverow['intApplication_ID']; ?> " data-toggle="modal" >Delete</a></li>  
                                  <li><a href="#" >Print</a></li>
                                  
                                <?php } ?>
                                </ul>

                          </div>

                        </td>
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
    <!-- /.content -->
    </div> 
  
    <?php include 'include/footer.php'; ?>
    <?php include ('modal/modal_add.php') ?>
  </div> 
  <?php include 'include/scripts.php'; ?>