<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
	<?php include 'include/navbar.php'; ?>
  	<?php include 'include/menubar.php'; ?>

<div class="content-wrapper"> 
   
    <section class="content-header">     
      <h1>
        Update Information      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Update Information</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
       include 'modal/notification.php' 
      ?> 
      <div class="box">        
        <div class="box-body">
         <h3 class="box-title">Update Information</h3>
      <form role="form" method="post" id="register_form" action="query/update_query.php" enctype="multipart/form-data">
         <div class="col-md-12">
              <div class="form-group">
                <label >Last Name <span class="mb-0 text-primary">*</span></label>   
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name" required="" value="<?php echo strtoupper($emp_user['varLastname']); ?>">
                <label >First Name <span class="mb-0 text-primary">*</span></label> 
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" value="<?php echo strtoupper($emp_user['varFirstname']); ?>" required="" >  
              </div>              
         </div>

         <div class="col-md-4">
              <div class="form-group">
                <label >Middle Name </label>   
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle Name" value="<?php echo strtoupper($emp_user['varMiddlename']); ?>">
              </div>              
          </div>

          <div class="col-md-4">
              <div class="form-group">
                <label >Name Extension (eg. Jr., Sr.)</label>   
                    <input type="text" class="form-control" id="extension" name="extension" placeholder="Enter Extension Name" value="<?php echo strtoupper($emp_user['varExtension_Name']); ?>">
               </div>              
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label >Gender</label>
                <br>
                <div class="col-md-6">
                    
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Male" <?php if($gender=="Male"){?> checked="true" <?php } ?> />
                                Male
                        </label>                                
                 </div>
                  <div class="col-md-6">
                    
                       <label>
                         <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($gender=="Female"){?> checked="true" <?php } ?> />
                                Female
                       </label>                                 
                 </div>
              </div>              
            </div>   
                 
           <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Civil Status</label>
                     <select class="form-control" style="width: 100%;" name="civil_status" onchange="showhideOtherSpecify(this.value)" id="civil_status">
                        <option value="<?php echo $emp_user['enumCivil_Status']; ?>"><?php echo $emp_user['enumCivil_Status']; ?></option>  
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Divorce">Divorce</option>
                        <option value="Separated">Separated</option>
                        <option value="Annulled">Annulled</option>                                                               
                    </select>
                  </div>              
             </div>
          
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date of Birth</label>   
                      <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_of_birth" placeholder="Enter Date of Birth" value="<?php echo date('m/d/Y',strtotime($emp_user['Birth_Date'])); ?>">
              </div>              
          </div>             
          <div class="col-md-6">
              <div class="form-group">
                <label >Address (Brgy/City or Municipality)</label>   
                    <input type="text" class="form-control" id="extension" name="address" placeholder="Enter Address"  value="<?php echo strtoupper($emp_user['varAddress']); ?>">
               </div>              
          </div>
<?php if($userlevel=="Employee"){ ?>
          <div class="col-md-6">
              <div class="form-group">
                 <label >Work Schedule</label>                   
                 <select class="form-control" style="width: 100%;" name="enumscheduletype"  id="enumscheduletype">
                     <option selected="selected" value="<?php echo $emp_user['enumWork_Schedule']; ?>"><?php echo $emp_user['enumWork_Schedule']; ?></option>
                     <option value="Flexible Work Time">Flexible Work Time</option>
                     <option value="Normal Work Time">Normal Work Time</option>                                                                                
                </select>
               </div>              
           </div> 



<?php }else{ ?>
          <div class="col-md-6">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Department</label>
                    <select class="form-control" style="width: 100%;" name="department"  id="department">
                      <option selected="selected" value="<?php echo strtoupper($emp_user['intDepartment_ID']); ?>"><?php echo strtoupper($emp_user['varDepartment']); ?></option>
                       <?php
                            $sql = "SELECT * FROM tbl_department";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                              $department = strtoupper($row['varDepartment']);
                              ?>
                              <option value="<?php echo $row['intDepartment_ID']; ?>"><?php echo  $department;  ?></option>

                        <?php } ?>
                      </select> 
              </div>
          </div> 

          <div class="col-md-6">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Position</label>
                    <select class="form-control" style="width: 100%;" name="position"  id="position">
                      <option selected="selected" value="<?php echo strtoupper($emp_user['intPosition_ID']); ?>"><?php echo strtoupper($emp_user['varPosition']); ?></option>
                       
                       <?php
                            $sql = "SELECT * FROM tbl_position";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                              $position = strtoupper($row['varPosition']);
                              ?>
                              <option value="<?php echo $row['intPosition_ID']; ?>"><?php echo  $position;  ?></option>

                        <?php } ?>
                      </select> 
              </div>
          </div>   
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Employment Date</label>   
                      <input type="text" class="form-control" id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="employment_date" placeholder="Enter Employement Date" value="<?php echo date('m/d/Y',strtotime($emp_user['Employment_Date'])); ?>" >
              </div>              
          </div> 

          <div class="col-md-6">
              <div class="form-group">
                 <label >Work Schedule</label>                   
                  <select class="form-control" style="width: 100%;" name="enumscheduletype"  id="enumscheduletype">
                     <option selected="selected" value="<?php echo $emp_user['enumWork_Schedule']; ?>"><?php echo $emp_user['enumWork_Schedule']; ?></option>
                     <option value="Flexible Work Time">Flexible Work Time</option>
                     <option value="Normal Work Time">Normal Work Time</option>                                                                                
                </select>
               </div>              
           </div> 

           <div class="col-md-6">
              <div class="form-group">
                 <label >UserLevel</label>                   
                <select class="form-control" style="width: 100%;" name="enumUserLevel"  id="enumUserLevel">
                      <option selected="selected" value="<?php echo $emp_user['enumUser_Level']; ?>"><?php echo $emp_user['enumUser_Level']; ?></option>                                    
                     <option value="Employee">Employee</option>
                     <option value="HR-Staff">HR-Staff</option>
                     <option value="Admin Officer">Admin Officer</option>
                     <option value="Department  Head">Department  Head</option>
                     <option value="System Admin">System Admin</option>                                                                     
                </select>
               </div>              
           </div> 

           <!--  <div class="modal-footer">
                  <button type="submit" name="add_employee" class="btn btn-primary">Submit</button>
                  <a href="view_employee.php" class="btn btn-default ">Cancel</a>
            </div>  -->             
<?php } ?>
          <div class="col-md-12">
             <div class="modal-footer">
                  <button type="submit" name="update_account_details" class="btn btn-primary">Submit</button>
                  <a href="view_employee.php" class="btn btn-default ">Cancel</a>
               </div>
          </div>

          </form>   

        </div>
      </div>
    </section>
    <!-- /.content -->
    </div> 
	
    <?php include 'include/footer.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>
