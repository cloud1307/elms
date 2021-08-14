<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
	<?php include 'include/navbar.php'; ?>
  	<?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
	
    
    <section class="content-header">
      <h1>
        Add New Employee      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Add Employee</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      <div class="box">        
        <div class="box-body">
         <h3 class="box-title">New Employee Information</h3>

      <form role="form" method="post" id="register_form" action="query/add_employee_query.php" enctype="multipart/form-data">
       

       <?php 

       $maxID = mysqli_query($conn,"SELECT * FROM tbl_employee ORDER BY `intEmployee_ID` DESC LIMIT 1");
        $maxIDrow = mysqli_fetch_array($maxID);
       // $maxID "SELECT max(intEmployee_Num) FROM tbl_employee" ;
      //  $maxIDrow = mysqli_num_rows($maxID);

        $maxIDnumber = $maxIDrow['intEmployee_ID'] +1;



        ?>
           <input type="hidden" class="form-control"  name="employee_id" value="<?php echo $maxIDnumber; ?>" required="">


          <div class="col-md-12">
              <div class="form-group">
                <label >Employee ID<span class="mb-0 text-primary">*</span></label>
                <input type="text" class="form-control"  name="employee_number" placeholder="Enter Employee ID" required="">
             </div>              
         </div>

         <div class="col-md-12">
              <div class="form-group">
                <label >Last name<span class="mb-0 text-primary">*</span></label>   
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name" required="">
                <label >First Name <span class="mb-0 text-primary">*</span></label> 
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" required="">  
              </div>              
         </div>

         <div class="col-md-4">
              <div class="form-group">
                <label >Middle Name </label>   
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle Name">
              </div>              
          </div>

          <div class="col-md-4">
              <div class="form-group">
                <label >Name Extension (eg. Jr., Sr.)</label>   
                    <input type="text" class="form-control" id="extension" name="extension" placeholder="Enter Extension Name">
               </div>              
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label >Gender</label>
                <br>
                <div class="col-md-6">
                    
                       <label>
                         <input type="radio" name="gender" id="optionsRadios1" value="Male" >
                            Male
                      </label>                                
                 </div>
                  <div class="col-md-6">
                    
                       <label>
                         <input type="radio" name="gender" id="optionsRadios2" value="Female" >
                            Female
                        </label>                                
                 </div>
              </div>              
            </div>   
                 
           <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Civil Status</label>
                     <select class="form-control" style="width: 100%;" name="civil_status"  id="civil_status">
                        <option value="">Select a State</option>  
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
                      <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_of_birth" placeholder="Enter Date of Birth" >
              </div>              
          </div>             
          <div class="col-md-6">
              <div class="form-group">
                <label >Address (Brgy/City or Municipality)</label>   
                    <input type="text" class="form-control" id="extension" name="address" placeholder="Enter Address">
               </div>              
          </div>


          <div class="col-md-6">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Department</label>
                    <select class="form-control" style="width: 100%;" name="department"  id="department">
                      <option selected="selected" value="0">N/A</option>
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
                      <option selected="selected" value="0">N/A</option>
                       <?php
                            $sql = "SELECT * FROM tbl_position";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                              $position = strtoupper($row['varPosition'] ." / ".$row['enumStep_Increment']);
                              ?>
                              <option value="<?php echo $row['intPosition_ID']; ?>"><?php echo  $position;  ?></option>

                        <?php } ?>
                      </select> 
              </div>
          </div>   
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Employment Date</label>   
                      <input type="text" class="form-control" id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="employment_date" placeholder="Enter Employement Date" >
              </div>              
          </div>
          <div class="col-md-4">
              <div class="form-group">
                 <label >Work Schedule</label>                   
                <select class="form-control" style="width: 100%;" name="enumscheduletype"  id="enumscheduletype">                    
                     <option value="Flexible Work Time">Flexible Work Time</option>
                     <option value="Normal Work Time">Normal Work Time</option>                                                                                
                </select>
               </div>              
           </div>  

           <div class="col-md-4">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Day Off</label>
                    <select class="form-control" style="width: 100%;" name="dayoff"  id="dayoff">
                      <option selected="selected" value="0">N/A</option>
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
                 <label ">UserLevel</label>                   
                <select class="form-control" style="width: 100%;" name="enumUserLevel"  id="enumUserLevel">
                     <option value="">Select a State</option>                                    
                     <option value="Employee">Employee</option>
                     <option value="HR Manager">HR Manager</option>
                     <option value="Admin Officer">Admin Officer</option>
                     <option value="Department Head">Department Head</option>
                     <!-- <option value="Super Admin">System Admin</option>                                                                      -->
                </select>
               </div>              
           </div>

           <div class="col-md-12">
              <div class="modal-footer">
                  <button type="submit" name="add_employee" class="btn btn-primary">Submit</button>
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