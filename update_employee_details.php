<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<?php 
  

    $emp_id=$_GET['emp_id'];



    $result = mysqli_query($conn, "SELECT a.*,b.*,c.*,d.*,e.* FROM tbl_employee a 
      RIGHT JOIN tbl_account b ON a.intEmployee_ID = b.intEmployee_ID
       INNER JOIN tbl_position c ON c.intPosition_ID = a.intPosition_ID 
       INNER JOIN tbl_department d ON d.intDepartment_ID = a.intDepartment_ID
       INNER JOIN tbl_salary_grade e on a.intPosition_ID = e.intPosition_ID


      WHERE a.intEmployee_number =$emp_id");
      $emp_row = mysqli_fetch_array($result);
      $emp_position = strtoupper($emp_row['varPosition'] ." / ".$emp_row['enumStep_Increment']);
 
     


?>


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
      <div class="box">        
        <div class="box-body">
         <h3 class="box-title">Update Employee Information</h3>

      <form role="form" method="post" id="register_form" action="query/update_query.php" enctype="multipart/form-data">
        <!-- HIDDEN TEXT BOX -->
           <input type="hidden" class="form-control"  name="emp_id"   value="<?php echo $emp_row['intEmployee_ID'] ; ?>" > 

           <div class="col-md-6">
              <div class="form-group">
                <label >Username<span class="mb-0 text-primary">*</span></label>
                <input type="text"  class="form-control"  name="username" placeholder="Enter Username" required="" value="<?php echo $emp_row['varUsername']; ?>">
             </div>              
         </div>
         <div class="col-md-6">
                

                <label >Password<span class="mb-0 text-primary">*</span></label>
         <div class="input-group">

                 <input type="password"  class="form-control"  name="password" id="password-field" placeholder="Enter Employee Password" required="" value="<?php echo $emp_row['varPassword']; ?>" >
                <span  class="input-group-addon toggle-password" toggle="#password-field" ><i class="fa fa-eye field-icon  toggle-password"></i></span>
              </div>   

         </div>

          <div class="col-md-12">
              <div class="form-group">
                <label >Employee ID<span class="mb-0 text-primary">*</span></label>
                <input type="text"  class="form-control"  name="employee_num" placeholder="Enter Employee Number" required="" value="<?php echo $emp_row['intEmployee_number']; ?>">
             </div>              
         </div>

         <div class="col-md-12">
              <div class="form-group">
                <label >Last name<span class="mb-0 text-primary">*</span></label>   
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name" required=""value="<?php echo strtoupper($emp_row['varLastname']); ?>">
                <label >First Name <span class="mb-0 text-primary">*</span></label> 
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" required="" value="<?php echo strtoupper($emp_row['varFirstname']); ?>">  
              </div>              
         </div>

         <div class="col-md-4">
              <div class="form-group">
                <label >Middle Name </label>   
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle Name" value="<?php echo strtoupper($emp_row['varMiddlename']); ?>">
              </div>              
          </div>

          <div class="col-md-4">
              <div class="form-group">
                <label >Name Extension (eg. Jr., Sr.)</label>   
                    <input type="text" class="form-control" id="extension" name="extension" placeholder="Enter Extension Name" value="<?php echo strtoupper($emp_row['varExtension_Name']); ?>">
               </div>              
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label >Gender</label>
                <br>
                <div class="col-md-6">
                    
                       <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Male" <?php if($emp_row['enumGender']=="Male"){?> checked="true" <?php } ?> />
                                Male
                        </label>                                 
                 </div>
                  <div class="col-md-6">
                    
                        <label>
                         <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($emp_row['enumGender']=="Female"){?> checked="true" <?php } ?> />
                                Female
                       </label>                                
                 </div>
              </div>              
            </div>   
                 
           <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Civil Status</label>
                    <select class="form-control" style="width: 100%;" name="civil_status" onchange="showhideOtherSpecify(this.value)" id="civil_status">
                        <option value="<?php echo $emp_row['enumCivil_Status']; ?>"><?php echo $emp_row['enumCivil_Status']; ?></option> 
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
                      <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_of_birth" placeholder="Enter Date of Birth" value="<?php echo date('m/d/Y',strtotime($emp_row['Birth_Date'])); ?>">
              </div>              
          </div>             
          <div class="col-md-6">
              <div class="form-group">
                <label >Address (Brgy/City or Municipality)</label>   
                     <input type="text" class="form-control" id="extension" name="address" placeholder="Enter Address"  value="<?php echo strtoupper($emp_row['varAddress']); ?>">
               </div>              
          </div>


          <div class="col-md-6">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Department</label>
                    <select class="form-control" style="width: 100%;" name="department"  id="department">
                      <option selected="selected" value="<?php echo strtoupper($emp_row['intDepartment_ID']); ?>"><?php echo strtoupper($emp_row['varDepartment']); ?></option>
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

          <div class="col-md-4">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Position</label>
                    <select class="form-control" style="width: 100%;" name="position"  id="position">
                      <option selected="selected" value="<?php echo strtoupper($emp_row['intPosition_ID']); ?>"><?php echo strtoupper($emp_position); ?></option>
                       
                       <?php
                            $sql = "SELECT a.*, b.* FROM tbl_position a INNER JOIN tbl_salary_grade b ON a.intPosition_ID = b.intPosition_ID ";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                               $position = strtoupper($row['varPosition'] ." / ".$row['enumStep_Increment']);
                              ?>
                              <option value="<?php echo $row['intPosition_ID']; ?>"><?php echo  $position;  ?></option>

                        <?php } ?>
                      </select> 
              </div>
          </div>   
          <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Employment Date</label>   
                     <input type="text" class="form-control" id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="employment_date" placeholder="Enter Employement Date" value="<?php echo date('m/d/Y',strtotime($emp_row['Employment_Date'])); ?>" >
              </div>              
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Job Status</label>
                    <select class="form-control" style="width: 100%;" name="jobStatus"  id="jobStatus">
                     <option selected="selected" value="<?php echo $emp_row['enumJob_Status']; ?>"><?php echo $emp_row['enumJob_Status']; ?></option>
                      <option value="Job Contract">Job Contract</option>
                      <option value="Casual">Casual</option>
                      <option value="Regular">Regular</option>
                      <option value="Co-Terminus">Co-Terminus</option>                      
                      </select> 
              </div>
          </div>


          <div class="col-md-4">
              <div class="form-group">
                 <label >Work Schedule</label>                   
                <select class="form-control" style="width: 100%;" name="enumWork_Schedule"  id="enumWork_Schedule">    
                     <option value="<?php echo $emp_row['enumWork_Schedule']; ?>"><?php echo $emp_row['enumWork_Schedule']; ?></option>               
                     <option value="Flexible Work Time">Flexible Work Time</option>
                     <option value="Normal Work Time">Normal Work Time</option>                                                                                
                </select>
               </div>              
           </div>  

           <div class="col-md-4">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Day Off</label>
                    <select class="form-control" style="width: 100%;" name="Day_Off"  id="Day_Off">
                      <option selected="selected" value="<?php echo $emp_row['enumDay_Off']; ?>"><?php echo $emp_row['enumDay_Off']; ?></option>
                      <option value="Monday">Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thursday">Thursday</option>
                      <option value="Friday">Friday</option>
                      <option value="Saturday">Saturday</option>
                      <option value="Saturday-Sunday">Saturday-Sunday</option>
                      </select> 
              </div>
          </div>   
           <div class="col-md-4">
              <div class="form-group">
                 <label >UserLevel</label>                   
                <select class="form-control" style="width: 100%;" name="enumUserLevel"  id="enumUserLevel">
                      <option selected="selected" value="<?php echo $emp_row['enumUser_Level']; ?>"><?php echo $emp_row['enumUser_Level']; ?></option>
                     <option value="Employee">Employee</option>
                     <option value="HR Manager">HR Manager</option>
                     <option value="Admin Officer">Admin Officer</option>
                     <option value="Department Head">Department Head</option>
                     <option value="Super Admin">System Admin</option>                                                                     
                </select>
               </div>              
           </div> 

           <div class="col-md-12">
              <div class="modal-footer">
                  <button type="submit" name="update_employee_details" class="btn btn-primary">Submit</button>
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
  </body>
</html>