
                   <!-- MODAL FOR LEAVE TYPE -->
                        <div class="modal fade" id="edit-modal-leave<?php echo $leaverow['intLeave_ID']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-success">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i>Update Leave Type</h4>
                              </div>
                              <div class="modal-body ">
                               <?php 
                                 $editleave=mysqli_query($conn,"SELECT * FROM tbl_leave_type where intLeave_ID='".$leaverow['intLeave_ID']."'");
                                  $eleaverow=mysqli_fetch_array($editleave);
                              ?>                                  
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                  <div class="form-group">
                                    <input type="hidden" class="form-control"  name="leave_id"   value="<?php echo $leaverow['intLeave_ID'] ; ?>" >
                                   <label for="exampleInputEmail1">Leave</label>   
                                    <input type="text" class="form-control"  name="leave_type" placeholder="Enter Leave Type" value="<?php echo $eleaverow['varLeave_Type'] ; ?>">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Leave Description</label>
                                    <input type="text" class="form-control"  name="leave_description" placeholder="Enter Leave Description" value="<?php echo $eleaverow['varLeave_Description'] ; ?>">
                                  </div>
                                  

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="update_leave_type" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal LEAVE -dialog -->
                        </div>

                      <!-- DELETE MODAL LEAVE -->

                        <div class="modal fade" id="delete-modal-leave<?php echo $leaverow['intLeave_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Position</h4>
                              </div>
                              <?php
                                 
                                  $delleave=mysqli_query($conn,"SELECT * FROM tbl_leave_type where intLeave_ID='".$leaverow['intLeave_ID']."'");
                                  $delleaverow=mysqli_fetch_array($delleave);
                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Leave Type <strong><?php echo $delleaverow['varLeave_Type'] ; ?></strong> from the list? This method cannot be undone.</center></h5>
                                          <input type="hidden" class="form-control"  name="leave_id"   value="<?php echo $leaverow['intLeave_ID'] ; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_leave_type" class="btn btn-danger"><span class="fa fa-trash-o"></span>Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL LEAVE TYPE -->



                    <!--MODAL FOR POSITION  -->
                        <div class="modal fade" id="edit-modal-position<?php echo $positionrow['intSalary_ID']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-success">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i>Update Position</h4>
                              </div>
                              <div class="modal-body ">
                              <?php 
                                 $editposition=mysqli_query($conn,"SELECT a.*, b.* FROM tbl_salary_grade  a INNER JOIN tbl_position b ON a.intPosition_ID = b.intPosition_ID  where a.intSalary_ID='".$positionrow['intSalary_ID']."'");

                                  $epostrow=mysqli_fetch_array($editposition);
                              ?>                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">

                                  <input type="hidden" class="form-control"  name="salary_id"   value="<?php echo $positionrow['intSalary_ID'] ; ?>" >
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Position</label>   
                                    <input type="text" class="form-control"  name="position" placeholder="Enter Position Title" value="<?php echo $epostrow['varPosition'] ; ?>" >
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Salary Grade <b>(eg. 01-1)</b></label>
                                    <input type="text" class="form-control" id="salary_grade" name="salary_grade" data-inputmask='"mask": "(99-9)"' data-mask value="<?php echo $epostrow['varSalary_Grade'] ; ?>">
                                  </div>
                                 
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Step Increment</label>
                                      <select class="form-control" style="width: 100%;" name="stepincrement">
                                        <option value="<?php echo $epostrow['enumStep_Increment'] ; ?>"><?php echo $epostrow['enumStep_Increment'] ; ?></option> 
                                        <option value="N/A">N/A</option> 
                                        <option value="Step 1">Step 1</option>                                    
                                        <option value="Step 2">Step 2</option>
                                        <option value="Step 3">Step 3</option>                                                             
                                    </select>
                                    </div>

                                 <div class="form-group">
                                   <label for="exampleInputEmail1">Monthly Salary</label>   
                                    <input type="text" class="form-control"  name="monthly_salary" placeholder="Enter Monthly Salary" value="<?php echo $epostrow['decimalMonthly_Salary'] ; ?>">
                                  </div>
                                   
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="update_position" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.POSITION modal-dialog -->
                        </div>

                        <!-- DELETE MODAL POSITION -->

                        <div class="modal fade" id="delete-modal-position<?php echo $positionrow['intSalary_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Position</h4>
                              </div>
                              <?php
                                 
                                  $delposition=mysqli_query($conn,"SELECT a.*, b.* FROM tbl_salary_grade  a INNER JOIN tbl_position b ON a.intPosition_ID = b.intPosition_ID  where a.intSalary_ID='".$positionrow['intSalary_ID']."'");
                                  $delpostrow=mysqli_fetch_array($delposition);
                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Position <strong><?php echo $delpostrow['varPosition'] ; ?></strong> from the list? This method cannot be undone.</center></h5>
                                        <input type="hidden" class="form-control"  name="salary_id"   value="<?php echo $positionrow['intSalary_ID'] ; ?>" > 
                                  </div> 



                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_position" class="btn btn-danger"><span class="fa fa-trash-o"></span>Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL DEPARTMENT -->


                      <!-- MODAL UPDATE DEPARTMENT -->
                        <div class="modal fade" id="edit-modal-department<?php echo $deptrow['intDepartment_ID']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-success">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i> Update Department</h4>
                              </div>
                              <div class="modal-body ">
                              <?php
                                  $editdepart=mysqli_query($conn,"SELECT * FROM tbl_department where intDepartment_ID='".$deptrow['intDepartment_ID']."'");
                                  $edepartrow=mysqli_fetch_array($editdepart);
                              ?>                                 
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                  <div class="form-group">
                                    <input type="hidden" class="form-control"  name="depart_id"   value="<?php echo $edepartrow['intDepartment_ID'] ; ?>" >
                                   <label for="exampleInputEmail1">Department</label> 
                                    <input type="text" class="form-control"  name="department" placeholder="Enter Department Name" value="<?php echo $edepartrow['varDepartment'] ; ?>">
                                  </div>
                                  <div class="form-group">
                                    <input type="hidden" class="form-control"  name="depart_id"   value="<?php echo $edepartrow['intDepartment_ID'] ; ?>" >
                                   <label for="exampleInputEmail1">Department ShortName</label> 
                                    <input type="text" class="form-control"  name="department_shortname" placeholder="Enter Department Short Name" value="<?php echo $edepartrow['varDepartment_Shortname'] ; ?>">
                                  </div>


                                  <div class="form-group">
                                      <label for="empName" class="control-label">Status</label>

                                      <select class="form-control select" style="width: 100%;" name="enumStatus" id="enumStatus">
                                        <option value="<?php echo $edepartrow['enumStatus'] ; ?>"><?php echo $edepartrow['enumStatus'] ; ?></option>
                                        <option value="Active">Active</option> 
                                        <option value="Inactive">Inactive</option>  
                                                                                                   
                                        </select>
                                </div>  

                             <!-- <div class="form-group">
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
                                      <button type="submit" name="update_department" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.UPDATE DEPART modal-dialog -->
                        </div>

                <!-- DELETE MODAL DEPARTMENT -->

                        <div class="modal fade" id="delete-modal-department<?php echo $deptrow['intDepartment_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Department</h4>
                              </div>
                              <?php
                                 
                                  $deldepart=mysqli_query($conn,"SELECT * FROM tbl_department where intDepartment_ID='".$deptrow['intDepartment_ID']."'");
                                  $deldepartrow=mysqli_fetch_array($deldepart);
                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Department <strong><?php echo $deldepartrow['varDepartment'] ; ?></strong> from the list? This method cannot be undone.</center></h5>
                                        <input type="hidden" class="form-control"  name="depart_id"   value="<?php echo $deptrow['intDepartment_ID'] ; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_department" class="btn btn-danger"><span class="fa fa-trash-o"></span>Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL DEPARTMENT -->

                        <!-- DELETE MODAL SCHEDULE -->

                        <div class="modal fade" id="delete-modal-schedule<?php echo $rowsched['intWorkSched_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Inclusive Time Attendance</h4>
                              </div>
                              <?php
                                 
                                 $edit=mysqli_query($conn,"SELECT * FROM tbl_work_schedule WHERE intWorkSched_ID='".$rowsched['intWorkSched_ID']."'");
                                  $delrow=mysqli_fetch_array($edit);
                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Schedule <strong><?php echo date('h:i A', strtotime($delrow['Inclusive_Time_From'])) ; ?> & <?php echo date('h:i A', strtotime($delrow['Inclusive_Time_To'])) ; ?></strong> from the list? This method cannot be undone.</center></h5>
                                        <input type="hidden" class="form-control"  name="sched_id"   value="<?php echo $rowsched['intWorkSched_ID'] ; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_sched" class="btn btn-danger"><span class="fa fa-trash-o"></span>Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL SCHEDULE -->

                    <!-- DELETE MODAL HOLIDAY -->

                        <div class="modal fade" id="delete-modal-holiday<?php echo $holidayrow['intHoliday_ID'] ; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Holiday</h4>
                              </div>
                              <?php
                                 
                                 $delhol=mysqli_query($conn,"SELECT * FROM tbl_holiday WHERE intHoliday_ID='".$holidayrow['intHoliday_ID']."'");
                                  $delholrow=mysqli_fetch_array($delhol);
                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Holiday <strong><?php echo strtoupper($delholrow['varHoliday_Description']); ?> </strong> from the list? This method cannot be undone.</center></h5>
                                        <input type="hidden" class="form-control"  name="holi_id"   value="<?php echo $delholrow['intHoliday_ID'] ; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_holiday" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL HOLIDAY -->



                    <!-- DELETE MODAL LEAVE APPLICATION -->

                        <div class="modal fade" id="delete-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-danger">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-trash-o margin-r-5"></i>Delete Leave Application</h4>
                              </div>
                              <?php
                                 
                                  $apply=mysqli_query($conn,"SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID where intApplication_ID='".$appleaverow['intApplication_ID']."'");
                                  $applyleaverow=mysqli_fetch_array($apply);
                                  $leaveemployeename = strtoupper($applyleaverow['varLastname'] . " ". $applyleaverow['varFirstname']);

                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/delete_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to delete Leave Application of <strong><?php echo $leaveemployeename ; ?></strong> from the list? This method cannot be undone.</center></h5>
                                          <input type="hidden" class="form-control"  name="application_id"   value="<?php echo $appleaverow['intApplication_ID']; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="delete_leave_application" class="btn btn-danger"><span class="fa fa-trash-o"></span>Delete</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END DELETE MODAL LEAVE TYPE -->




                      <!-- MODAL SCHEDULE -->
                        <div class="modal fade" id="edit-modal-schedule<?php echo $rowsched['intWorkSched_ID']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i>Update Inclusive Time Attendance</h4>
                              </div>
                              <div class="modal-body ">
                              <?php
                                  $edit=mysqli_query($conn,"select * from tbl_work_schedule where intWorkSched_ID='".$rowsched['intWorkSched_ID']."'");
                                  $erow=mysqli_fetch_array($edit);
                              ?>                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                  <div class="bootstrap-timepicker">
                                   <label for="exampleInputEmail1">Time IN</label>
                                     <input type="hidden" class="form-control"  name="sched_id"   value="<?php echo $rowsched['intWorkSched_ID'] ; ?>" >
                                     <input type="text" class="form-control timepicker1" id="timein" name="timein" value="<?php echo date('h:i A', strtotime($erow['Inclusive_Time_From'])); ?>" required>
                                  </div>
                                   <div class="bootstrap-timepicker">
                                   <label for="exampleInputEmail1">Time OUT</label>   
                                     <input type="text" class="form-control timepicker" id="timeout" name="timeout" required value="<?php echo date('h:i A', strtotime($erow['Inclusive_Time_To'])); ?>">
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Work Schedule</label>
                                      <select class="form-control" style="width: 100%;" name="workschedule">
                                        <option value="<?php echo $erow['enumSchedule_Type']; ?>"><?php echo $erow['enumSchedule_Type']; ?></option> 
                                        <option value="Flexible Work Time">Flexible Work Time</option>                                    
                                        <option value="Normal Work Time">Normal Work Time</option>
                                                                                                   
                                    </select>
                                    </div>

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="update_schedule" class="btn btn-success">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- END MODAL SCHEDULE -->

                 




                      <!-- MODAL UPDATE HOLIDAY -->
                        <div class="modal fade" id="edit-modal-holiday<?php echo $holidayrow['intHoliday_ID'] ; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-pencil-square-o margin-r-5"></i>Update Holiday</h4>
                              </div>
                              <div class="modal-body ">
                              <?php
                                 
                                 $edith=mysqli_query($conn,"SELECT * FROM tbl_holiday WHERE intHoliday_ID='".$holidayrow['intHoliday_ID']."'");
                                  $eholidayrow=mysqli_fetch_array($edith);
                              ?>                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                  <div class="form-group">
                                    <input type="hidden" class="form-control"  name="holiday_id"   value="<?php echo $eholidayrow['intHoliday_ID'] ; ?>" >
                                   <label for="exampleInputEmail1">Holiday Description</label>   
                                    <input type="text" class="form-control"  name="holiday" placeholder="Enter Holiday Description"  value="<?php echo $eholidayrow['varHoliday_Description'] ; ?>">
                                  </div>
                                   <div class="form-group">
                                   <label for="exampleInputEmail1">Date of Holiday</label>   
                                    <input type="text" class="form-control" id="datepicker"  data-mask name="holiday_date" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask placeholder="Enter Holiday Date" value="<?php echo date("m/d/Y ",strtotime($eholidayrow['Holiday_Date'])) ; ?>" >
                                  </div>                                                                
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" name="update_holiday" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div> 
                        <!-- END MODAL HOLIDAY -->

          



                    <!--MODAL FOR APPLY LEAVE  -->
                        <div class="modal fade" id="update-modal-employee-leave-apply<?php echo $appleaverow['intApplication_ID']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title "><i class="fa fa-pencil-square-o margin-r-5"></i>Update Apply Leaves</h4>
                              </div>
                              <div class="box-body ">
                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Employee Name</label>   
                                      
                                      <select class="form-control select" style="width: 100%;" name="employ_id" disabled>
                                         <?php
                                           $leaveapply=mysqli_query($conn,"SELECT a.*, b.*,c.* FROM tbl_leave_application a INNER JOIN tbl_employee b ON b.intEmployee_ID = a.intEmployee_ID 
                                             INNER JOIN tbl_leave_type c ON a.intLeave_ID = c.intLeave_ID 
                                             WHERE a.intApplication_ID = '".$appleaverow['intApplication_ID']."' ");
                                           $approw=mysqli_fetch_array($leaveapply);
                                              $employeenamerow = strtoupper($approw['varLastname'] . " ".$approw['varExtension_Name']." ". $approw['varFirstname']); 




                                              if ($approw['enumLeave_Process'] = 1) {
                                                 $eleave_status =  "Forward to Hr Manager";
                                              }else if ($approw['enumLeave_Process'] = 2){
                                                $eleave_status ="Forward to Admin Officer";
                                              }
                                             

                                              ?>
                                              <option value="<?php echo $approw['intEmployee_ID']; ?>"><?php echo $employeenamerow?></option>
                                      </select>            
                                </div>                                                                                 
                              </div>

                              <input type="hidden" class="form-control"  name="application_id"   value="<?php echo $approw['intApplication_ID']; ?>"> 
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inclusive Date From</label>   
                                      <input type="text" class="form-control" id="datepicker2" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_from" placeholder="Select Inclusive Date From" value="<?php echo date("m/d/Y ",strtotime($approw['Inclusive_Date_From'])) ; ?>">
                                </div>                                                                                 
                              </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inclusive Date To</label>   
                                     <input type="text" class="form-control" id="datepicker1" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_to" placeholder="Select Inclusive Date To" value="<?php echo date("m/d/Y ",strtotime($approw['Inclusive_Date_To'])) ; ?>">
                                </div>                                                                                 
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Leave Type</span></label>   
                                    <select class="form-control" style="width: 100%;" name="leave_type" id="leave_type" onchange="FetchLeaveType(this.value)">
                                       <option value="<?php echo $approw['intLeave_ID']; ?>"><?php echo  strtoupper($approw['varLeave_Type']);  ?></option>
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

                                  <!-- <input type="text" class="form-control"  name="description" id ="description" disabled > -->

                                    <select class="form-control" style="width: 100%;" name="description" id="description"  >    
                                         <!-- <option value="Birthday Leave"><?php echo  strtoupper($row['varLeave_Type']);  ?></option> -->

                                        <option value="<?php echo  strtoupper($approw['intLeave_ID']);  ?>"><?php echo  $approw['varLeave_Description'];  ?></option>
                                         <?php
                                           // $sql = "SELECT * FROM tbl_leave_type";
                                          //  $query = $conn->query($sql);
                                          //  while($row = $query->fetch_assoc()){

                                              ?>
                                            <!--   <option value="<?php echo $row['intLeave_ID']; ?>"><?php echo  strtoupper($row['varLeave_Description']);  ?></option> -->

                                        <?php// } ?>   
                                                                               
                                                               
                                    </select>
                                </div>                                              
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <?php  if($userlevel=="HR Manager" || $userlevel == "System Admin" || $userlevel == "Department Head" || $userlevel == "Admin Officer" ){?>
                                   <label for="exampleInputEmail1">Remarks</label>
                                    <select class="form-control" style="width: 100%;" name="leave_description"  id="leave_description">
                                            <option value="<?php echo  $approw['enumLeave_Process'];  ?>"><?php echo  $eleave_status;  ?></option>  
                                            <option value="1">Forward to Hr Manager</option>
                                            <option value="2">Forward to Admin Officer </option>
                                            <option value="3">For Computation</option>
                                                                                                           
                                    </select>
                                  </div>
                               </div>   
                                <?php }?> 
                              
                             
                         
                              <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" name="update_leave_application" class="btn btn-primary">Save changes</button>
                              </form>                                                                              
                            
                              </div>
                              
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

               <!-- UPDATE APPROVE MODAL DEPARTMENT HEAD -->

                        <div class="modal fade" id="approved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-tasks margin-r-5"></i>Approve Leave Application</h4>
                              </div>
                              <?php
                                 
                                  $apply=mysqli_query($conn,"SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID where intApplication_ID='".$appleaverow['intApplication_ID']."'");
                                  $applyleaverow=mysqli_fetch_array($apply);
                                  $leaveemployeename = strtoupper($applyleaverow['varLastname'] . ", ". $applyleaverow['varFirstname']);

                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure you want to approve the leave application of <strong><?php echo $leaveemployeename ; ?></strong> from the list? This will be forwarded to 

                                           <?php if($userlevel== "Department Head" || $userlevel== "Admin Officer" || $userlevel== "System Admin"){
                                       echo 'HR MANAGER.' ;
                                       }else if($userlevel== "HR Manager"){
                                        echo 'Admin Officer.';
                                       }

                                       ?>
                                        </center></h5>
                                          <input type="hidden" class="form-control"  name="application_id"   value="<?php echo $applyleaverow['intApplication_ID']; ?>" > 
                                  </div> 

                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="approved_application" class="btn btn-success"><span class="fa fa-thumbs-o-up"></span> Approve</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                       



                         <!-- UPDATE DISAPPROVED MODAL DEPARTMENT HEAD -->

                        <div class="modal fade" id="disapproved-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-warning">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-tasks margin-r-5"></i>Disapprove Leave Application</h4>
                              </div>
                              <?php
                                 
                                  $disapply=mysqli_query($conn,"SELECT a.*,b.*,c.*  FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID  INNER JOIN tbl_employee c  ON a.intEmployee_ID = c.intEmployee_ID where intApplication_ID='".$appleaverow['intApplication_ID']."'");
                                  $disapprovedapply=mysqli_fetch_array($disapply);
                                  $leaveemployeename = strtoupper($disapprovedapply['varLastname'] . ", ". $disapprovedapply['varFirstname']);

                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure to Disapprove leave of <strong><?php echo $leaveemployeename ; ?></strong> from the list? 
                                      </center></h5>
                                          <input type="hidden" class="form-control"  name="application_id"   value="<?php echo $disapprovedapply['intApplication_ID']; ?>" > 
                                  </div> 

                                   <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Textarea</label>
                                      <textarea class="form-control" rows="3" name="remarks" placeholder="Enter Remarks"></textarea>
                                    </div>
                                  </div>
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="disapproved_application" class="btn btn-warning"><span class="fa fa-thumbs-o-down"></span> Approve</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                    






                           <!-- UPDATE  MODAL COMPUTE LEAVE -->

                        <div class="modal fade" id="compute-modal-leave<?php echo $appleaverow['intApplication_ID']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header alert-info">
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-tasks margin-r-5"></i>Compute Leave Application</h4>
                              </div>
                              <?php
                                 
                                  


                                    

                                   $computeapply=mysqli_query($conn,"SELECT a.*,b.*,c.*,d.* FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON a.intLeave_ID = b.intLeave_ID INNER JOIN tbl_employee c ON a.intEmployee_ID = c.intEmployee_ID INNER JOIN tbl_leave_balance d ON d.intEmployee_ID = c.intEmployee_ID WHERE  intApplication_ID= '".$appleaverow['intApplication_ID']."' ");

                                   $computeapplyrow=mysqli_fetch_array($computeapply); 
                                   $leaveemployeename = strtoupper($computeapplyrow['varLastname'] . ", ". $computeapplyrow['varFirstname']);
                                   
                                   $datetime1 = strtotime($appleaverow['Inclusive_Date_From']);
                                   $datetime2 = strtotime($appleaverow['Inclusive_Date_To']);

                              
                                  

                                    // $selectleave=mysqli_query($conn,"SELECT a.*, b.*, c.* FROM tbl_leave_application a INNER JOIN tbl_leave_type b ON b.intLeave_ID = a.intLeave_ID INNER JOIN tbl_leave_balance c ON a.intLeave_ID = c.intLeave_ID WHERE a.intApplication_ID = '".$appleaverow['intApplication_ID']."' AND a.intEmployee_ID = '".$computeapplyrow['intEmployee_ID']."' ");
                                    // $selectrow=mysqli_fetch_array($selectleave);

                                    $leavebance = $computeapplyrow['Leave_Balance'];

                                  if( $datetime1 ==  $datetime2){

                                    $num = 1;
                                    $updatebalance =  $leavebance  - $num;

                                   }else{

                                     $datediff = ($datetime2 - $datetime1);
                                     $num = round($datediff / (24 * 60 * 60));
                                      $updatebalance =  $leavebance  - $num;
                                   }

                                  


                              ?>

                              <div class="modal-body ">                                
                                 <form role="form" method="post" enctype = "multipart/form-data" action="query/update_query.php">
                                 <div class="container-fluid">
                                        <h5><center>Are you sure you want to Compute Leave of <strong><?php echo $leaveemployeename ; ?></strong>  ?
                                      </center></h5>
                                      <!-- UPDATED BALANCE -->
                                      <input type="hidden" class="form-control"  name="balance_leave"   value="<?php echo $updatebalance; ?>">                                        
                                      
                                          <input type="hidden" class="form-control"  name="application_id"   value="<?php echo $computeapplyrow['intApplication_ID']; ?>"> 
                                          <input type="hidden" class="form-control"  name="leave_accumulated"   value="<?php echo $num; ?>" >
                                          
                                          <input type="hidden" class="form-control"  name="leave_id"   value="<?php echo $computeapplyrow['intLeave_ID']; ?>" >
                                          <input type="hidden" class="form-control"  name="emp_id"   value="<?php echo $computeapplyrow['intEmployee_ID']; ?>" >

                                          
                                  </div>
                                                                                                  
                                  
                              </div>
                                  <div class="modal-footer ">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                                      
                                      <button type="submit" name="compute_leave" class="btn btn-warning"><span class="fa fa-file-text"></span> Compute</button>                                      
                                    </form>
                                  </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                     





                       