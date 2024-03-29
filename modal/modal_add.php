<?php
include 'include/database.php';


?>


                    <!--MODAL FOR APPLY LEAVE  -->
                        <div class="modal fade" id="modal-employee-apply-leave">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-warning">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title "><i class="fa fa-pencil-square-o margin-r-5"></i> Apply Leave</h4>
                              </div>
                              <div class="box-body ">
                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_query.php">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Employee Name</label>   
                                      
                                      <select class="form-control select2" style="width: 100%;"   name="emp_id" id="emp_id">
                                         <?php
                                          //  $sql1 = "SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_department b ON b.intDepartment_ID = a.intDepartment_ID WHERE a.intDepartment_ID = '$dpartment_id' ";
                                            $sql1 = "SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_department b ON b.intDepartment_ID = a.intDepartment_ID WHERE a.enumEmployment_Status = 'Active'";

                                            $query1 = $conn->query($sql1);
                                            while($emplrow = $query1->fetch_assoc()){
                                              $employeenamerow = strtoupper($emplrow['varLastname'] . " ".$emplrow['varExtension_Name']." ". $emplrow['varFirstname']); 
                                              ?>
                                              <option value="<?php echo $emplrow['intEmployee_ID']; ?>"><?php echo $employeenamerow   ?></option>
                                        
                                         <?php } ?>
                                      </select>            
                                </div>                                                                                 
                              </div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inclusive Date From</label>   
                                      <input type="text" class="form-control" id="datepicker6" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_from" placeholder="Select Inclusive Date From" >
                                </div>                                                                                 
                              </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inclusive Date To</label>   
                                     <input type="text" class="form-control" id="datepicker5" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_to" placeholder="Select Inclusive Date To" >
                                </div>                                                                                 
                              </div>
                              

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">No. of Days</label>   
                                     <input type="number" class="form-control"   name="no_of_days" placeholder="No. of Days" disabled="" value=" <?php// echo $diff ; ?>">
                                </div>                                                                                 
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Leave Type</span></label>   
                                      <select class="form-control" style="width: 100%;" name="leave_type" id="leave_type"  onchange="FetchLeaveType(this.value)" >
                                       <option selected="" disabled="" >Select Leave Type</option>
                                       <?php
                                            //$sql = "SELECT * FROM tbl_leave_type";
                                             $sql = "SELECT DISTINCT varLeave_Type FROM tbl_leave_type";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){

                                              ?>
                                              <option value="<?php echo $row['varLeave_Type']; ?>"><?php echo  $row['varLeave_Type'];  ?></option>

                                        <?php } ?>
                                      </select> 
                                </div>                                              

                              </div> 

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Leave Description</span></label> 
                                    <select class="form-control" style="width: 100%;" name="description" id="description"  >  
                                                             
                                    </select>
                                </div>                                              
                              </div>
                           
                                  <?php  if($userlevel=="HR Manager" || $userlevel == "System Admin" || $userlevel == "Department Head" || $userlevel == "Admin Officer" ){?>
                              <div class="col-md-12">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Leave Status Remarks</label>
                                    <select class="form-control" style="width: 100%;" name="leave_process"  id="leave_description">
                                            <option value="">Select a State</option>  
                                            <option value="1">Forward to Hr Manager</option>
                                            <option value="2">Forward to Admin Officer </option>
                                            <option value="3">For Computation</option>
                                                                                                           
                                    </select>
                                  </div>
                               </div>   
                                <?php }?> 
                              
                             
                         
                              <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" name="add_leave_application" class="btn btn-primary">Save changes</button>
                              </form>                                                                              
                            
                              </div>
                              
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

             


                        <!-- MODAL FOR LEAVE TYPE -->
                        <div class="modal fade" id="modal-leave-type">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add New Leave Type</h4>
                              </div>
                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_leave_type_query.php">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Leave</label>   
                                    <input type="text" class="form-control"  name="leave_type" placeholder="Enter Leave Type" >
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Leave Description</label>
                                    <input type="text" class="form-control"  name="leave_description" placeholder="Enter Leave Description" >
                                  </div>
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="add_leave_type" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>



                        <!--MODAL FOR POSITION  -->
                        <div class="modal fade" id="modal-position">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add New Position</h4>
                              </div>
                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_position_query.php">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Position</label>   
                                    <input type="text" class="form-control"  name="position" placeholder="Enter Position Title" >
                                  </div>
                                  
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Salary Grade</label>
                                    <input type="text" class="form-control" id="salary_grade" name="salary_grade" data-inputmask='"mask": "(99-9)"' data-mask>
                                  </div>
                                 
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Step Increment</label>
                                      <select class="form-control" style="width: 100%;" name="stepincrement">
                                        <option value="N/A">N/A</option> 
                                        <option value="Step 1">Step 1</option>                                    
                                        <option value="Step 2">Step 2</option>
                                        <option value="Step 3">Step 3</option>                                                             
                                    </select>
                                    </div>

                                 <div class="form-group">
                                   <label for="exampleInputEmail1">Monthly Salary</label>   
                                    <input type="text" class="form-control"  name="monthly_salary" placeholder="Enter Monthly Salary" >
                                  </div>
                                   
                                   <div class="modal-footer ">                                      
                                      <button type="button" name="add" id="add" class="btn btn-primary">Add</button>
                                    </form>
                                  </div>
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="add_position" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

                  <!-- MODAL DEPARTMENT -->
                        <div class="modal fade" id="modal-department">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add New Department</h4>
                              </div>
                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_department_query.php">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Department</label>   
                                    <input type="text" class="form-control"  name="department" placeholder="Enter Department Name" >
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Department ShortName</label>   
                                    <input type="text" class="form-control"  name="department_Shortname" placeholder="Enter Department Short Name" >
                                  </div>
<!-- 
                                 <div class="form-group">
                                      <label for="empName" class="control-label">Officer / OIC / Heads</label>

                                      <select class="form-control select2" style="width: 100%;" name="stepincrement">
                                        <option value="N/A">N/A</option> 
                                         <?php
                                            $sql = "SELECT * FROM tbl_employee";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                             $employeename = strtoupper($row['varLastname'] . " ". $row['varFirstname']);
                                              ?>
                                              <option value=""><?php echo  strtoupper($employeename);  ?></option>

                                                <?php } ?>                                                           
                                        </select>
                                </div>  -->                                   
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="add_department" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>


                      <!-- MODAL HOLIDAY -->
                        <div class="modal fade" id="modal-holiday">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add New Holiday</h4>
                              </div>
                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_holiday_query.php">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Holiday Description</label>   
                                    <input type="text" class="form-control"  name="holiday" placeholder="Enter Holiday Description" >
                                  </div>
                                   <div class="form-group">
                                   <label for="exampleInputEmail1">Date of Holiday</label>   
                                    <input type="text" class="form-control" id="datepicker7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="holiday_date" placeholder="Enter Holiday Date" >
                                  </div>                                                                
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="add_holiday" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div> 
                        <!-- END MODAL HOLIDAY -->

                        
                        <!-- MODAL SCHEDULE -->
                        <div class="modal fade" id="modal-schedule">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add Inclusive Time Attendance</h4>
                              </div>
                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_schedule_query.php">
                                  <div class="bootstrap-timepicker">
                                   <label for="exampleInputEmail1">Time IN</label>   
                                     <input type="text" class="form-control timepicker" id="timein" name="timein" required>
                                  </div>
                                   <div class="bootstrap-timepicker">
                                   <label for="exampleInputEmail1">Time OUT</label>   
                                     <input type="text" class="form-control timepicker" id="timeout" name="timeout" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Work Schedule</label>
                                      <select class="form-control" style="width: 100%;" name="workschedule">
                                        <option value="Flexible Work Time">Flexible Work Time</option>                                    
                                        <option value="Normal Work Time">Normal Work Time</option>
                                                                                                   
                                    </select>
                                  </div>

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="add_schedule" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END MODAL SCHEDULE -->

            
                <!-- MODAL FOR LEAVE EARN -->
                        <div class="modal fade" id="modal-employee-earn-leave">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-warning">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Update Monthly Earn Leave</h4>
                              </div>
                              <div class="modal-body "> 
                               <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php"> 
                                <h5>  <center>  Are you sure you want to Update Earn Leave For This Month Of  <strong> <?php print date("M - Y") ;?></strong> ?</center></h5>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Vacation Leave</label>   
                                     <input type="text" class="form-control" id="Vacation_Leave" name="Vacation_Leave" value="1.25" disabled="">
                                </div>
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Sick Leave</label>   
                                     <input type="text" class="form-control" id="Sick_Leave" name="Sick_Leave" value="1.25" disabled="">
                                </div>
                              </div>


                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="update_earn_leave" class="btn btn-primary">Leave Earn</button>
                               </div></form>
                                  
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>


                        <!-- MODAL VIEW LEAVE -->
                        <div class="modal fade" id="modal-add-deduction<?php echo $deductionrow['intEmployee_ID'] ; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i>Add Leave Deduction</h4>
                              </div>
                              <div class="modal-body ">
                              <?php

                                 // $balancesql="SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_leave_balance b ON b.intEmployee_ID = a.intEmployee_ID WHERE a.intEmployee_ID='".$deductionrow['intEmployee_ID']."'";

                                 //  $query2 = $conn->query($balancesql);
                                 //   while($viewbal = $query2->fetch_assoc()){
                                

                                 //    if ($viewbal['intLeave_ID'] == 1) {
                                 //    $leaveVl = $viewbal['Leave_Balance'];
                                 //    }elseif ($viewbal['intLeave_ID'] == 2) {                                 
                                 //    $leaveSl = $viewbal['Leave_Balance'];
                                 //    }
                                    
                                 

                                 // }
                                 
                                  $viewsql=mysqli_query($conn,"SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_leave_balance b ON b.intEmployee_ID = a.intEmployee_ID WHERE b.intLeave_ID = 1 AND a.intEmployee_ID='".$deductionrow['intEmployee_ID']."'");                               
                                  $viewData=mysqli_fetch_array($viewsql); 
                                  $employeename = strtoupper($deductionrow['varLastname'] . " ".$deductionrow['varExtension_Name']." ". $deductionrow['varFirstname']);

                                  if ($viewData['intLeave_ID'] == 1) {
                                    $leaveVl = $viewData['Leave_Balance'];
                                  }

                              ?>  

                                                         
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/add_query.php">
                                  
                                <div class="col-md-6">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Available VL: </label>   
                                    <?php echo $leaveVl ;?>
                                  </div>
                                </div>

                                <?php

                              $balancesql=mysqli_query($conn,"SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_leave_balance b ON b.intEmployee_ID = a.intEmployee_ID WHERE b.intLeave_ID = 2  AND a.intEmployee_ID='".$deductionrow['intEmployee_ID']."'   ");                               
                                  $viewbal=mysqli_fetch_array($balancesql); 
                                  if ($viewbal['intLeave_ID'] == 2) {                                 
                                    $leaveSl = $viewbal['Leave_Balance'];
                                    }

                               ?>   
                                <div class="col-md-6">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Available SL: </label>
                                   <?php echo $leaveSl ;?>   
                                    
                                  </div>



                                </div>

                               
                                  <div class="form-group">
                                    <!-- HIDDEN TEXT FIELD EMPLOYEE ID -->
                                    <input type="hidden" class="form-control"  name="employee_id"   value="<?php echo $deductionrow['intEmployee_ID'] ; ?>" >
                                   <label for="exampleInputEmail1">Employee Name</label>   
                                    <input type="text" class="form-control"    value="<?php echo $employeename ; ?>" readonly>
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Leave Type</label>
                                      <select class="form-control" style="width: 100%;" name="leave_type">
                                        <option value="1">Vacation Leave</option>                                    
                                        <option value="2">Sick Leave</option>
                                                                                                   
                                    </select>
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Number of Deduction</label>   
                                    <input type="number" class="form-control" id="number_deduction"  name="number_deduction" min="0" value="0" step="any" placeholder="Enter Leave Deduction">
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Date of Deduction</label>  
                                    <input type="text" class="form-control" id="datepicker9" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_deduction" placeholder="Enter Deduction date" >
                                  </div> 
                                  <div class="form-group">
                                     <label for="exampleInputPassword1">Remarks</label>
                                      <textarea class="form-control"  rows="5"  name="remarks" value="" placeholder="Enter Your Remarks"></textarea>    
                                  </div>                                                               
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="Add_deduction" class="btn btn-primary">Save Deduction</button>
                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div> 
                        <!-- END MODAL HOLIDAY -->







<script type="text/javascript">
  
function FetchLeaveType(value){
    $('#description').html('');
   
    $.ajax({
      type:'post',
      url: 'ajax.php',
      data : { varLeave_Type : value},
      success : function(data){
         $('#description').html(data);
      }

    })
  }
</script>
