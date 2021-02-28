<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
	<?php include 'include/navbar.php'; ?>
  	<?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
	
    
    <section class="content-header">
      <h1>
        Application Leave Form      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Leave Form</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      <div class="box">        
        <div class="box-body">
         <h3 class="box-title">Application Leave </h3>
      <form role="form" method="post" id="register_form" action="query/add_query.php" enctype="multipart/form-data">
         
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
                                    <select class="form-control" style="width: 100%;" name="leave_process"  id="leave_process">
                                            <option value="">Select a State</option>
                                            <?php if($userlevel =="Department Head") {?>  
                                            <option value="1">Forward to Hr Manager</option>
                                          <?php } else if($userlevel =="HR Manager"){ ?>
                                            <option value="2">Forward to Admin Officer </option>
                                            <option value="3">For Computation</option>
                                            <?php }elseif($userlevel =="Admin Officer") {?>
                                              <option value="3">For Computation</option>
                                              <?php }?>                                                             
                                    </select>
                                   </div>
                               </div> 
                          <?php }?> 

           

              <div class="modal-footer">
                  <button type="submit" name="add_leave_application" class="btn btn-primary">Submit</button>
                  <a href="index.php" class="btn btn-default ">Cancel</a>
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
