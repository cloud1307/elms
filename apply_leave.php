<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>

<?php 
    if($userlevel=="Employee"){
    echo "<body class='hold-transition skin-green sidebar-mini'>";
    }elseif($userlevel=="Admin"){
    echo "<body class='hold-transition skin-red sidebar-mini'>";
    }elseif($userlevel=="HR Manager"){
    echo "<body class='hold-transition skin-purple sidebar-mini'>";
    }else{
    echo "<body class='hold-transition skin-yellow sidebar-mini'>";
    }
?>


<div class="wrapper">
	<?php include 'include/navbar.php'; ?>
  	<?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
	
    
    <section class="content-header">
      <h1>
        Apply Leave      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Apply Leave Form</a></li>
      
      </ol>
    </section>
 

    <!-- Main content -->
    <section class="content">
    <?php
         include 'modal/notification.php'            
    
      ?> 
      <div class="box">        
        <div class="box-body">
         <h3 class="box-title">Leave Application Information</h3>
      <form role="form" method="post" id="register_form" action="query/add_employee_query.php" enctype="multipart/form-data">
           
                 
           <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Inclusive Date From</label>   
                      <input type="text" class="form-control" id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="employment_date" placeholder="Enter Employement Date" >
              </div>              
          </div>
          
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Inclusive Date To</label>   
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
                <label  class="col-sm-3 control-label">Leave Type</label>
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
                <label  class="col-sm-3 control-label">Description</label>
                    <select class="form-control" style="width: 100%;" name="position"  id="position">
                      <option selected="selected" value="0">N/A</option>
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
          

           <div class="col-md-12">
              <div class="modal-footer">
                  <button type="submit" name="add_apply_leave" class="btn btn-primary">Submit</button>
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