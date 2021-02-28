



                    <!--MODAL FOR APPLY LEAVE  -->
                        <div class="modal fade" id="modal-leave-apply">
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
                                  <label for="exampleInputEmail1">Inclusive Date From</label>   
                                      <input type="text" class="form-control" id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_from" placeholder="Select Inclusive Date From" >
                                </div>                                                                                 
                              </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inclusive Date To</label>   
                                     <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_to" placeholder="Select Inclusive Date To" >
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
                              <div class="col-md-12">
                                <div class="form-group">
                                  <?php  if($userlevel=="HR Manager" || $userlevel == "System Admin" || $userlevel == "Department Head" || $userlevel == "Admin Officer" ){?>
                                   <label for="exampleInputEmail1">Leave Status Remarks</label>
                                    <select class="form-control" style="width: 100%;" name="leave_description"  id="leave_description">
                                            <option value="">Select a State</option>  
                                            <option value="1">For Approval of Hr Manager</option>
                                            <option value="2">For Approval of Admin Officer </option>
                                            <option value="4">For Computation</option>
                                                                                                           
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

             