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
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                         <?php
                                            $sql1 = "SELECT a.*, b.* FROM tbl_employee a INNER JOIN tbl_department b ON b.intDepartment_ID = a.intDepartment_ID WHERE a.intDepartment_ID = '$dpartment_id' ";
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
                                  <label for="exampleInputEmail1">Leave Type</span></label>   
                                    <select class="form-control" style="width: 100%;" name="leave_type" id="leave_type" >
                                       <option value="0">Select Leave Type</option>
                                       <?php
                                            $sql = "SELECT * FROM tbl_leave_type";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){

                                              ?>
                                              <option value="<?php echo $row['intLeave_ID']; ?>"><?php echo  strtoupper($row['varLeave_Type']);  ?></option>

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

                                        
                                        <option value="Vacation Leave">Vacation Leave</option>
                                        <option value="Sick Leave">Sick Leave</option>
                                        <option value="Solo Parent Leave">Solo Parent Leave</option>
                                        <option value="Maternity Leave">Maternity Leave</option>
                                        <option value="Paternity Leave">Paternity Leave</option>
                                        <option value="Birthday Leave">Birthday Leave</option>
                                        <option value="Anniversary Leave">Anniversary Leave</option>
                                        <option value="Domestic Emergency Leave">Domestic Emergency Leave</option>
                                        <option value="Parental Oblicagation">Parental Oblicagation</option>
                                        <option value="Graduation Leave">Graduation Leave</option>
                                        <option value="Mourning Leave">Mourning Leave</option>                                        
                                                               
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
                                <button type="submit" name="add_application" class="btn btn-primary">Save changes</button>
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
                                    <input type="text" class="form-control"  name="position" placeholder="Enter Leave Type" >
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
                                    <input type="text" class="form-control"  name="monthly_salary" placeholder="Enter Leave Type" >
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
                                    <input type="text" class="form-control" id="datepicker1" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="holiday_date" placeholder="Enter Holiday Date" >
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

            
