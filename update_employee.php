<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>


<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
      My  Personal Data Sheet      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Employee Information</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      
      <div class="row">   
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#page1" data-toggle="tab">PAGE1</a></li>
              <li><a href="#page2" data-toggle="tab">PAGE2</a></li>
              <li><a href="#page3" data-toggle="tab">PAGE3</a></li>
              <li><a href="#page4" data-toggle="tab">PAGE4</a></li>
              <!-- <li><a href="#pds" data-toggle="tab">GENERATED PDS</a></li> -->
            </ul>
            <div class="tab-content">
             <div class="active tab-pane" id="page1">  
                  
                  <h3 class="box-title">I. Personal Information</h3>
                      <hr>
                        <div class="box-body ">
                          <div class="row">

                             

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Surname <span class="mb-0 text-primary">*</span></label>   
                                    <input  type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name" value="<?php echo strtoupper($emp_user['varLastname']); ?>"  required="">                                    
                                  <label for="exampleInputEmail1">First Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" value="<?php echo strtoupper($emp_user['varFirstname']); ?>"  required="">
                                </div>              
                              </div>

                               <div class="col-md-8">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle Name" value="<?php echo strtoupper($emp_user['varMiddlename']); ?>">
                                </div>              
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name Extension <i>(eg. Jr., Sr.)</i></label>   
                                    <input type="text" class="form-control" id="extension" name="extension" placeholder="Enter Extension Name" value="<?php echo strtoupper($emp_user['varExtension_Name']); ?>">
                                </div>              
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Date of Birth</label>   
                                    <input type="text" class="form-control" id="datepicker1" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_of_birth" placeholder="Enter Date of Birth" value="">
                                </div>              
                              </div>                          
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Place of Birth</label>   
                                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Enter Place of Birth" value="">              
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
                                  <label for="exampleInputEmail1">Citizenship</label>   
                                    <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Enter Citizenship" value="">
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
                                        <option value="Separated">Separated</option>
                                        <option value="Annulled">Annulled</option>
                                        <option value="Other Specify">Other Specify</option>                                        
                                    </select>
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Other</label>   
                                    <input type="text" class="form-control" id="strOtherStatus" name="strOtherStatus" value=""  disabled>              
                                </div>              
                              </div>

                                                       
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Height <i>(m)</i></label>
                                    <input type="number" step="0.01" class="form-control" id="height" min = "0" max="99999999" name="height" placeholder="Enter Height" value="">              
                                </div>              
                              </div> 

                               <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Weight <i>(kg)</i></label>   
                                    <input type="number" step="0.01" class="form-control" id="weight" min = "0" max="99999" name="weight" placeholder="Enter Weight" value="">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Blood Type</label>
                                    <input type="text" class="form-control" id="weight" name="blood_type" placeholder="Enter Blood Type" value="">              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">GSIS ID Number</label>   
                                     <input type="text" class="form-control" id="gsis_id" name="gsis_num" placeholder="Enter GSIS ID Number" value="">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">PAG-IBIG ID Number</label>
                                    <input type="text" class="form-control" id="pagibig" name="pagibig_num" placeholder="Enter Pag-ibig Number" value="">              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Philhealth Number</label>   
                                     <input type="text" class="form-control" id="gsis_id" name="philhealth_num" placeholder="Enter Philhealth Number" value="">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">SSS Number</label>
                                    <input type="text" class="form-control" id="sss" name="sss_num" placeholder="Enter SSS Number" value="">              
                                </div>              
                              </div>

                               <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">TIN Number</label>
                                    <input type="text" class="form-control" id="tin" name="tin_num" placeholder="Enter Tin Number" value="">   
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address<i>(if any)</i></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email_address" placeholder="Enter Email Address" value="">          
                                </div>              
                              </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Contact Number <i>(if any)</i></label>
                                    <input type="text" class="form-control"  name="contact_number"  placeholder="Enter Cellphone Number" value="" data-inputmask='"mask": "(9999) 9999-999"' data-mask >   
                                </div>              
                              </div>

                              <div class="col-md-6">                                
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Agency Employee Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="agency_num"  placeholder="Enter Agency Employee Number" value="">   
                                  </div>              
                                </div>

                              <div class="col-md-6 ">

                                  <div class="form-group">
                                     <label for="exampleInputPassword1">Residential Address</label>
                                      <textarea class="form-control"  rows="5"  name="resident_add" value=""></textarea>    
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Code</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="ra_zipcode"  placeholder="Enter Zipcode" value="">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999999999999" name="ra_telephone_num"  placeholder="Enter Telephone Number" value="">
                                  </div>  
                            </div>

                            <div class="col-md-6 " >

                                  <div class="form-group">
                                     <label for="exampleInputPassword1">Permanent Address</label>
                                      <textarea class="form-control"  rows="5"  name="permanent_add" value=""></textarea>    
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Code</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="pa_zipcode"  placeholder="Enter Zipcode" value="">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999999999999" name="pa_telephone_num"  placeholder="Enter Telephone Number" value="">
                                  </div>  
                            </div>
                                                
                        </div>         
                      </div>
                   <hr>

                   <h3 class="box-title">II. Family Background</h3>
                      <div class="box-body ">
                        <div class="row">

                            <hr>
                            
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Spouse's Surname</span></label>   
                                    <input type="text" class="form-control"  name="spouse_surname" placeholder="Enter Spouse's Surname" value="">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="spouse_firstname" placeholder="Enter Spouse First Name" value="">              
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="spouse_middlename" placeholder="Enter Spouse Middle Name" value="">              
                                </div>              
                              </div> 

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Occupation</label>   
                                    <input type="text" class="form-control"  name="spouse_occupation" placeholder="Enter Spouse Occupation" value="">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Employer/Bus. Name</label>   
                                    <input type="text" class="form-control"  name="spouse_employers" placeholder="Enter Employer/ Bus. Name" value="">
                                </div>                                                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Business Address</label>   
                                    <input type="text" class="form-control"  name="spouse_buss_add" placeholder="Enter Business Address" value="">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Telephone Number</label>   
                                    <input type="number" class="form-control"  name="spouse_buss_num" placeholder="Enter Telephone Number" value="">
                                </div>                                                 
                              </div>                                                  
                        </div>              
                      </div>
                <hr>

                    <div class="box-body ">
                        <div class="row">
                                                       
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Surname</span></label>   
                                    <input type="text" class="form-control"  name="fathers_surname" placeholder="Enter Father's Surname" value="">
                                </div>
            
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Name Extension <i>(eg. Jr., Sr.)</i></label>   
                                    <input type="text" class="form-control" id="fathers_extension_name" name="fathers_extension_name" placeholder="Enter Extension Name" value="">
                                </div>
                              </div>                              
                              <div class="col-md-12">                                  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="fathers_firstname" placeholder="Enter Spouse First Name" value="">              
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="fathers_middlename" placeholder="Enter Spouse Middle Name" value="">              
                                </div>            
                              </div>   
                        
                          <div class="col-md-12">                                
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Surname <i>(Mother's Maiden Name)</i></label>   
                                    <input type="text" class="form-control"  name="mothers_surname" placeholder="Enter Surname" value="">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="mothers_firstname" placeholder="Enter First Name" value="">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="mothers_middlename" placeholder="Enter Middle Name" value="">
                                </div>                                                 
                              </div>                                                                                      
                        </div>              
                      </div>


                  <hr>
                            

                  <div class="modal-footer">
                          <button type="submit" name="update" class="btn btn-primary pull-left">Update Info</button>                                          
                  </div>
                </form>


                <hr>

                   <h3 class="box-title">Name of Children</h3><i>(Write full name and list all</i>
                <hr>      
                      <div class="box-body  " >             
                     
                      </div>
                      <br>


                      
                   <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Name of Child</th>                  
                                        <th>Date of Birth</th>                                        
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                   
                                      <?php
                                          // $sqlChild = "SELECT * FROM tbl_child where emp_id = '".$_SESSION['id']."' ";
                                          // $query = $conn->query($sqlChild);
                                          // while($rows = $query->fetch_assoc()){
                                      
                                      ?>
                        
                                     <tr>
                                        <td></td>               
                                        <td></td>                                                    
                                        <td>
                                         
                                            <a href="#" data-toggle="modal"  class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>                                                                                                                              
                                            <a href="#del_child" data-toggle="modal" class="btn btn-danger btn-flat"><i class="fa fa-times"></i></a>
                                                                            
                                        </td>
                                      </tr>
                                          <?php //} ?>
                                      </tfoot>
                                    </table>
                                </div>                                                                                 
                              </div>
                        </div>         
                      </div> 
                    <hr>


                    <h3 class="box-title">III. Educational Background</h3>

                      <div class="box-body ">             
                                             
                      </div>


                <hr>

                    <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example2" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th colspan="2">Level</th>                  
                                        <th>Name of School</th>
                                        <th>Degree Type</th>
                                        <th>Degree Course</th>
                                        <th>Year Graduated</th>
                                        <th>Inclusive Dates</th>                                         
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                   

                                    <?php
                                      // $educ_result = mysqli_query($mysqli, "SELECT * FROM  tbl_educational_background where emp_id = '$id_session' ORDER BY to_date DESC"); 
                                      // while ($educ_row= mysqli_fetch_array ($educ_result) ){
                                      // $educ_id=$educ_row['educ_id'];
                                      
                                      ?>
                        
                                     <tr>
                                        <td ><input type="hidden" value="<?php echo  $educ_id; ?>"></td>
                                        <td></td>               
                                        <td></td>
                                        <td></td>               
                                        <td></td>
                                        <td></td>
                                        <td></td>                                                                                            
                                        <td>
                                            <!-- <a href="#" class="btn btn-success btn-flat"><i class="fa fa-plus"></i></a> -->
                                            <a href="#" data-toggle="modal" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_educ"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
                                          
                                           
                                        </td>
                                      </tr>
                                          <?php //} ?>
                                      </tfoot>
                                    </table>
                                </div>                                                                                 
                              </div>
                        </div>         
                      </div>


                </div> 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="page2">

                <h3 class="box-title">IV. Civil Service Eligibility</h3>

                <?php
                   // $civil_result = mysqli_query($mysqli, "SELECT * FROM  tbl_civil_service WHERE emp_id = '$emp_id' order by date_release DESC "); 
                   // while ($civil_row= mysqli_fetch_array ($civil_result) ){
                   // $civil_id=$civil_row['civil_id'];

                   //  if (!empty($emp_id)){
                                      
                ?>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Career Service/ RA 1080(Board/Bar) Under Special Laws/ CES/ CSEE</span></label>   
                                    <input type="text" class="form-control"  name="career_service" value="" placeholder="Enter Career Service">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Rating</label>   
                                    <input type="number" step="0.01" class="form-control" min = "0" max="9999" placeholder="Enter rating" value="" name="rating" >              
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Date Examination / Conferment <i>(mm/dd/yyyy)</i></label>   
                                    <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="date_exam" placeholder="Enter Date Examination">               
                                </div>              
                              </div> 

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Place of Examination / Conferment </label>   
                                    <input type="text" class="form-control"  name="place_exam" value=" " placeholder="Enter Place of Examination / Conferment" >
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">License Number <i>(if applicable)</i></label>   
                                    <input type="text" class="form-control"  name="license_num" value="" placeholder="Enter Employer/ Bus. Name" >
                                </div>                                                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Date Release <i>(mm/dd/yyyy)</i></label>   
                                    <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="date_release" placeholder="Enter Date Release">
                                </div>                                                 
                              </div>


                          <div class="modal-footer">
                           <a href="#del_civil_service<?php echo $civil_row['civil_id'];?>" data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                         </div>
                         <?php include('modal/modal_delete.php'); ?>
                         <hr>

                <?php //}}?>

                <!-- END of Civil service Field With Data -->


                <div class="box-body" id="civilService_field" >           
                      <!-- Civil service Field -->                        
                </div>
                 <div class="box-body "> 
                      <button type="button" class="btn btn-success" id="add_civilService">
                           Add Civil Service Eligibility
                      </button></br><br>
                  </div>

                

                     <hr>
                
                      <h3 class="box-title">V. Work Experience <i>(include private employment. Start from your current work)</i></h3>  

                       <?php
                               //        $work_result = mysqli_query($mysqli, "SELECT * FROM  tbl_work_experience where emp_id = '$emp_id' order by date_to"); 
                               //        while ($work_row= mysqli_fetch_array ($work_result) ){
                               //        $work_id=$work_row['work_id'];

                               // if (!empty($emp_id)){


                      ?>

                       <div class="col-md-6">
                                <div class="form-group"> 
                                    <label>From:<i> (mm/dd/yyyy)</i></label>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="date_from" placeholder="Enter Date From">
                                      </div>
                                </div>              
                              </div>

                              <div class="col-md-6"> 
                                <div class="form-group"> 
                                    <label>To:<i> (mm/dd/yyyy)</i></label>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="date_to" placeholder="Enter Date To">
                                      </div>
                                </div>               
                              </div> 

                           <!-- div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">On-going</label>   
                                    <select class="form-control" style="width: 100%;" name="inclusive_dates_remarks">
                                        <option value="">Select a State</option>                                    
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>                           
                                                               
                                    </select>
                                </div>              
                              </div> -->

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Position Title <i>(Write in full)</i></label>   
                                    <input type="text" class="form-control"  name="position_title" value="" placeholder="Enter Position Title" >
                                </div>                                                
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Department / Agency / Office / Company <i>(Write in full)</i></label>   
                                    <input type="text" class="form-control" name="company" value="" placeholder="Enter Department / Agency / Office / Company">
                                </div>                                                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Monthly Salary</label>   
                                    <input type="number" class="form-control" min="0" max="9999999" value="" name="monthly_salary" placeholder="Enter Monthly Salary" >
                                </div>                                                
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Salary Grade & Step Increment <i>(Format "00-0")</i></label>   
                                    <input type="text" class="form-control" name="salary_grade" data-inputmask='"mask": "(99-9)"' data-mask value="<?php echo $work_row['salary_grade']; ?>" placeholder="Enter Salary Grade & Step Increment">
                                </div>                                                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Status of Appointment</label>
                                    <select class="form-control" style="width: 100%;" name="status_of_appointment">
                                        <!-- <option value="<?php echo $work_row['status_of_appointment']; ?>"><?php echo $work_row['status_of_appointment']; ?></option>   -->
                                        <option value="Permanent">Permanent</option>
                                        <option value="Casual">Casual</option>
                                        <option value="Job Order">Job Order</option>
                                    </select>
                                </div>                                                
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Gov't Service <i>(Yes - No)</i></label>
                                    <select class="form-control" style="width: 100%;" name="gov_service">
                                        <!-- <option value="<?php echo $work_row['gov_service']; ?>"><?php echo $work_row['gov_service']; ?></option>                                     -->
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>                                                 
                              </div>

                        <div class="modal-footer">
                           <a href="#del_work<?php echo $work_row['work_id'];?>" data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                         </div>
                         <?php include('modal/modal_delete.php'); ?>

                         <hr>
                      <?php //}}?>
                <div class="box-body " id="workExperience_field">
                  <!-- Work experience Field -->
                </div> 
                 <div class="box-body "> 
                      <button type="button" class="btn btn-success" id="add_workExperience">
                           Add Work experience
                      </button></br><br>
                </div>
                

                


          




              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="page3">
                
                <h3 class="box-title">VI. Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization/s</h3>

                <?php
                                      // $vol_result = mysqli_query($mysqli, "SELECT * FROM  tbl_voluntary_work where emp_id = '$emp_id' order by vol_date_to  "); 
                                      // while ($vol_row= mysqli_fetch_array ($vol_result) ){
                                      // $vol_id=$vol_row['vol_id'];

                                      // if (!empty($emp_id)){
                                      
                ?>


                              <div class="col-md-6">
                                <div class="form-group"> 
                                    <label>From:</label>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                         <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" name="vol_date_from" data-mask name="exp_date_from" placeholder="Enter Date From">
                                      </div>
                                </div>              
                              </div>

                              <div class="col-md-6"> 
                                <div class="form-group"> 
                                    <label>To:</label>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" name="vol_date_to" data-mask name="exp_date_to" placeholder="Enter Date To">
                                      </div>
                                </div>              
                              </div>                             

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Name & Address of Organization <i>(Write in full)</i></label>   
                                    <input type="text" class="form-control"  name="Name & Address of Organization" value="" placeholder="Enter Name & Address of Organization" >
                                </div>                                                
                              </div>                              

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Number of Hours</label>   
                                    <input type="number" class="form-control" min="0" max="9999999" name="vol_num_hour" value="" placeholder="Enter Number of Hours" >
                                </div>                                                
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Position / Nature of Work</label>   
                                    <input type="text" class="form-control" name="vol_position" value="" placeholder="Enter Position / Nature of Work">
                                </div>                                                 
                              </div>

                          <div class="modal-footer">
                           <a href="#del_vol" data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                         </div>
                         <?php include('modal/modal_delete.php'); ?>

                         <hr>

                <?php //}}?>

                <div class="box-body " id="volunteerWork_field">             
                      <!--Voluntary Work Field-->
                </div>
                 <div class="box-body "> 
                  <button type="button" class="btn btn-success" id="add_volunteerWork">
                              Add Volunteer Work
                  </button></br><br>
                </div>
               
                    

                      <!-- II. Training Programs <i>(Start fromthe most recent training.) -->
                <h3 class="box-title">VII. Training Programs <i>(Start fromthe most recent training.)</i></h3>

                <?php
                      //                 $prog_result = mysqli_query($mysqli, "SELECT * FROM  tbl_training_program where emp_id = '$emp_id' order by sem_date_to  "); 
                      //                 while ($prog_row= mysqli_fetch_array ($prog_result) ){
                      //                 $prog_id=$prog_row['prog_id'];
                      // if (!empty($emp_id)){
                                      
                 ?>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">From</label>   
                                    <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="sem_date_from" placeholder="Enter Date From">
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">To</label>   
                                    <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="" data-mask name="sem_date_to" placeholder="Enter Date To">
                                </div>              
                              </div>                             

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Tite of Seminar/Conference/Workshop/Short Courses <i>(Write in full)</i></label>   
                                    <input type="text" class="form-control"  name="seminar_title" value="" placeholder="Enter Tite of Seminar/Conference/Workshop/Short Courses" >
                                </div>                                                
                              </div>                              

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Number of Hours</label>   
                                    <input type="number" class="form-control" min="0" max="9999999" name="sem_num_hour" value="" placeholder="Enter Number of Hours" >
                                </div>                                                
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Conducted/ Sponsored By</label>   
                                    <input type="text" class="form-control" name="sem_sponsored_by" value="" placeholder="Enter Conducted/ Sponsored">
                                </div>                                                 
                              </div>

                          <div class="modal-footer">
                           <a href="#del_prog<?php echo $prog_row['prog_id'];?>" data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                         </div>
                         <?php include('modal/modal_delete.php'); ?>
                         <hr>

                 <?php //}}?>
                <div class="box-body " id="trainingProgram_field">             
                       <!-- training Program -->
                </div>
                 <div class="box-body "> 
                    <button type="button" class="btn btn-success" id="add_trainingProgram">
                       Add Training Program
                    </button></br><br>
                </div>


               

                <!-- Other Information -->

                <h3 class="box-title">VIII. Other Information</h3>

                <?php
                      //                 $other_result = mysqli_query($mysqli, "SELECT * FROM  tbl_other_info where emp_id = '$emp_id' order by other_id DESC "); 
                      //                 while ($other_row= mysqli_fetch_array ($other_result) ){
                      //                 $other_id=$other_row['other_id'];
                      // if (!empty($emp_id)){
                ?>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Special Skills / Hobbies</label>   
                             <input type="text" class="form-control"  name="special_skill" value="" placeholder="Enter Special Skills / Hobbies" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Non-Academic Distinctions /Recognition: <i>(Write in full)</i></label>   
                             <input type="text" class="form-control"  name="distinction" value="" placeholder="Enter Non-Academic Distinctions /Recognition" >
                      </div>
                    </div>
                    <div class="col-md-4">               
                      <div class="form-group">
                           <label for="exampleInputEmail1">Membership in Association/Organization <i>(Write in full)</i></label>   
                              <input type="text" class="form-control"  name="association" value="" placeholder="Enter Membership in Association/Organization" >
                      </div>
                    </div>

                    <div class="modal-footer">
                           <a href="#del_other<?php echo $other_row['other_id'];?>"  data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                         </div>
                         <?php include('modal/modal_delete.php'); ?>
                         <hr>

                <?php //}}?>
                <div class="box-body " id="otherInformation_field">             
                       <!-- other information field -->
                </div>
              <div class="box-body "> 
                <button type="button" class="btn btn-success" id="add_otherInformation">
                           Add Other Information
                </button></br><br>
              </div>
                
                <!--  End Training Programs <i>(Start fromthe most recent training.) -->     
              </div>

              <div class="tab-pane" id="page4">

              <h4 class="box-title">Are you related by consanguinity or affinity to any of the following:</h4>
               
                <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   a. Within the third degree (for National Government Employees):
                                   appointing authority, recommending authority, chief of office/bureau/department or person who
                                   has immediate supervision over you in the Office, Bureau or Department where you will be
                                   appointed?
                                  </p>                                   
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q1" id="optionsRadios1" value="No" checked="checked"  />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q1" id="optionsRadios2" value="Yes"  />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q1_remarks" class="form-control"  name="q1_remarks" value="" placeholder="Details" disabled="disabled">                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>  

                  <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   b. Within the fourth degree (for Local Government Employees):
                                   appointing authority or recommending authority  where you will be
                                   appointed?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q2" id="optionsRadios1" value="No"  />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q2" id="optionsRadios2" value="Yes" />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q2_remarks" class="form-control"  name="q2_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>
                
                <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   a. Have you ever been formally charged?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q3" id="optionsRadios1" value="No"  />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q3" id="optionsRadios2" value="Yes"  />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q3_remarks" class="form-control"  name="q3_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

              <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   b. Have you ever been guilty of any administrative offense?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q4" id="optionsRadios1" value="No"  />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q4" id="optionsRadios2" value="Yes"  />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q4_remarks" class="form-control"  name="q4_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulation by any court or tribunal?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"  placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q5" id="optionsRadios1" value="No" checked />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q5" id="optionsRadios2" value="Yes" />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q5_remarks" class="form-control"  name="q5_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been separated from the service in any of the following modes: resignation retirement, dropped from the rolls, dismissal, termination, end of term, 
                                      finished contract, AWOL or phased out, in the public or private sector?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q6" id="optionsRadios1" value="No" />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q6" id="optionsRadios2" value="Yes" />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q6_remarks" class="form-control"  name="q6_remarks" " placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been separated a candidate in a national or local election (except Barangay election)?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q7" id="optionsRadios1" value="No" />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q7" id="optionsRadios2" value="Yes" />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q7_remarks" class="form-control"  name="q7_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                    <h4 class="box-title">Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277);<br> and (c) Solo Parents Welfare Act of 2000
                                      (RA 8972), please answer the following items:</h4>
                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    a. Are you a member of any indigenous group?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q8" id="optionsRadios1" value="No" />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q8" id="optionsRadios2" value="Yes" />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q8_remarks" class="form-control"  name="q8_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    b. Are you differently abled?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q9" id="optionsRadios1" value="No" />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q9" id="optionsRadios2" value="Yes"/>
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q9_remarks" class="form-control"  name="q9_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    c. Are you a solo parent?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q10" id="optionsRadios1" value="No" checked />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q10" id="optionsRadios2" value="Yes"/>
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q10_remarks" class="form-control"  name="q10_remarks" value="" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                   <h3 class="box-title">References </h3><i>(Person not related by consanguity or afinity to applicant / appointee)</i>
                   <br><br>
                    



                   <div class="col-md-4">
                       <div class="form-group">
                           <label for="exampleInputEmail1">Name (Write in full)</label>   
                              <input type="text" class="form-control"  name="reference_name" value="" placeholder="Enter Name" required>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                           <label for="exampleInputEmail1">Address</label>   
                              <input type="text" class="form-control"  name="reference_address" value="" placeholder="Enter Address" required>
                       </div>
                    </div>
                    <div class="col-md-4">                                       
                       <div class="form-group">
                          <label for="exampleInputEmail1">Cellphone Number</label>   
                              <input type="text" class="form-control"  name="reference_number" value="" placeholder="Enter Cellphone Numbewr" data-inputmask='"mask": "(9999) 9999-999"' data-mask required>
                        </div>
                    </div>

                    <div class="modal-footer">
                           <a href="#del_ref<?php echo $ref_row['ref_id'];?>" data-toggle="modal"  class="btn btn-danger pull-left btn_remove_child">Remove</a>
                    </div>
                    <?php include('modal/modal_delete.php'); ?>

                   <?php //}} ?>
                   <div class="box-body " id="reference_field">             
                       <!-- Reference Field -->
                  </div>


                  <?php 

                  //if ($num_rows4=='3'){
                  ?>
                <div class="box-body">
                  <?php //include('modal/modal_ref_notif.php'); ?>
                </br><br>
                </div>

                <?php //}else{?>
                 <div class="box-body">
                  <button type="button" class="btn btn-success" id="add_reference">
                           Add Reference
                  </button></br><br>
                </div>

                <?php //}?>


                   <hr>
                   <h3 class="box-title">Community Tax Certificate</h3>
                      <div class="box-body ">
                        <div class="row">                            
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Community Tax Cerificate Number</label>   
                                    <input type="number" class="form-control" min = "0" max="999999999999999999999" value="" name="cert_num" placeholder="Enter Community Tax Cerificate Number">
                                </div>                                             
                              </div>                              

                              <div class="col-md-4">                                
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Issued AT</label>   
                                    <input type="text" class="form-control"  name="cert_issued" value="" placeholder="Enter Issued AT" >
                                </div>                                                                                
                              </div>

                              <div class="col-md-4"> 
                                   <label for="exampleInputEmail1">Issued Date on<i>(mm/dd/yyyy)</i></label>
                                <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control"  id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="" name="cert_date" placeholder="Enter Issued Date">
                                      </div>
                                  </div>                                                                                 
                              </div>                                                                                 
                        </div>               
      
               <hr>
            

                

                <div class="modal-footer">
                          <button type="submit" name="update" id="update" class="btn btn-primary pull-left">Update Info</button>                                          
                </div>
            
            </form>            


              </div>

                <div class="tab-pane" id="pds">               


                <!-- for content -->

              

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




    </section>
    <!-- /.content -->
    </div> 
  
    <?php include 'include/footer.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>
