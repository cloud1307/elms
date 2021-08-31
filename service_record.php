<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>


<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        Add Service Record      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Employee Service Record</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 

      <?php 
        include 'modal/notification.php'; 
       
        $emp_id=$_GET['emp_number'];

        $sqlData =mysqli_query($conn,"SELECT a.*, b.*, c.* FROM tbl_employee a 
                      INNER JOIN tbl_department b ON b.intDepartment_ID = a.intDepartment_ID
                      INNER JOIN tbl_position c ON c.intPosition_ID = a.intPosition_ID
                      WHERE a.intEmployee_ID = '$emp_id' ");

          $datarow=mysqli_fetch_array($sqlData);

          $EmployeeName = $datarow['varLastname'] .", ". $datarow['varFirstname']. " ".$datarow['varMiddlename'];


      ?>

      
      <div class="box">        
        <div class="box-body">
          <div class="box-body breadcrumb">            
            <div class="row invoice-info">
             
              <div class="col-sm-12 invoice-col">
                <div class="col-md-6">
                  <input type="hidden" class="form-control" id="emp_id" name="emp_id" value="<?php echo $datarow['intEmployee_ID']; ?>" >
                  <div class="form-group">
                       <label >Employee Number</label><br>
                       <?php echo $datarow['intEmployee_number']; ?>
                  </div>
                  <div class="form-group">
                       <label >Employee Number</label><br>
                       <?php echo $EmployeeName; ?>
                  </div>

                </div>
             
                <div class="col-md-6">
                  <div class="form-group">
                       <label >Birthday</label><br>
                       <?php echo date('F j, Y',strtotime($datarow['Birth_Date'])); ?>
                  </div>
                  <div class="form-group">
                       <label >Place of Birth</label><br>
                       <?php //echo $EmployeeName; ?>
                  </div>

                </div>

              </div>
          <br><br>
        <div class="box-body">

           
        </div>
          <div class="col-md-6">
              <div class="form-group">
                <label >Inclusive Date From<span class="mb-0 text-primary"> (MM-DD-YYYY)*</span></label>
                <input type="text" class="form-control" id="datepicker6" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask id="date_from[]" name="date_from[]" placeholder="Select Inclusive Date From" required="">
             </div>              
         </div>
          <div class="col-md-6">
              <div class="form-group">
                <label >Inclusive Date To<span class="mb-0 text-primary"> (MM-DD-YYYY)*</span></label>
                <input type="text" class="form-control" id="datepicker5" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_to[]" placeholder="Select Inclusive Date To" required="">
             </div>              
         </div>

         <div class="col-md-4">
              <div class="form-group">
                <label  class="col-sm-3 control-label">Position</label>
                    <select class="form-control select2" style="width: 100%;" name="designation[]"  id="designation">
                      <option selected="selected" value="0">N/A</option>
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
                <label  class="col-sm-3 control-label">Department</label>
                    <select class="form-control" style="width: 100%;" name="office"  id="office">
                      <option selected="selected" value="0">N/A</option>
                       <?php
                            $sql = "SELECT * FROM tbl_department WHERE enumStatus = 'Active' ";
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
                <label  class="col-sm-3 control-label">Job Status</label>
                    <select class="form-control" style="width: 100%;" name="job_status"  id="job_status">                      
                      <option value="Job Contract">Job Contract</option>
                      <option value="Casual">Casual</option>
                      <option value="Regular">Regular</option>
                      <option value="Co-Terminus">Co-Terminus</option>                      
                    </select> 
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label >L/V ABS Without Pay</label>
                <input type="text" class="form-control" id="withoutpay" name="withoutpay" placeholder="Enter L/V Without Pay">
             </div>              
         </div>

          <div class="col-md-6">
              <div class="form-group">
                <label >Separation Cause Date<span class="mb-0 text-primary"> (MM-DD-YYYY)</span></label>
                <input type="text" class="form-control" id="datepicker5" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="separation_date"  id="separation_date" placeholder="Select Inclusive Date To">
             </div>              
         </div>




         <!-- <div class="row">
          <div class="col-xs-12">            
            <div class="box-body table-responsive">
              <table  class="table table-bordered" id="crud_table">
                <thead>
                  <th>Inclusive Date From<br>(MM-DD-YYYY)</th>
                  <th>Inclusive Date To<br>(MM-DD-YYYY)</th>
                  <th>Designation</th>
                  <th>Status</th> 
                  <th>Office Station</th>
                  <th>L/V Abs W/O Pay</th>
                  <th>Separation Cause Date<br>(MM-DD-YYYY)</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  
                        <tr>                          
                            <td contenteditable="true" class="date_from"></td>
                            <td contenteditable="true" class="date_to"></td>
                            <td contenteditable="true" class="designation"></td>
                            <td contenteditable="true" class="job_status"> 
                              <select class="form-control job_status" style="width: 100%;" name="jobStatus[]"  id="jobStatus">                      
                                    <option value="Job Contract">Job Contract</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Co-Terminus">Co-Terminus</option>                      
                            </select></td>
                            <td contenteditable="true" class="office"></td>
                            <td contenteditable="true" class="withoutpay"></td>
                            <td contenteditable="true" class="separation_date"></td>
                            <td ></td>  

                          
                        </tr>
                       
                  
                </tbody>
              </table><br> 
              
            </div> -->

            <div align="right">
                   <button type="button" name="add" id="add" class="btn btn-success ">Add Record</button>
              </div>
            <div class="box-header with-border" align="center">

              <button type="button" name="save" id="save" class="btn btn-primary">Save Service Record</button>
                
            </div> 

          </div>
          
        </div>
        <br><br>


      <div class="row">
        <div class="col-xs-12">        
            
            <div class="box-body">
              <table  id="example1" class="table table-bordered">
                <thead>
                  <th>Inclusive Date From - Date To</th>                 
                  <th>Designation</th>
                  <th>Status</th> 
                  <th>Office Station</th>
                  <th>L/V Abs W/O Pay</th>
                  <th>Separation Cause Date</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php 
                      $emp_number = $_GET['emp_number'];
                      

                      $sql = "SELECT a.*, b.*, c.*, d.intPosition_ID, d.varPosition FROM tbl_service_record a INNER JOIN tbl_employee b ON a.intEmployee_ID = b.intEmployee_ID 
                      INNER JOIN tbl_department c ON c.intDepartment_ID = a.intDepartment_ID
                      RIGHT JOIN tbl_position d ON d.intPosition_ID = a.intPosition_ID
                       WHERE a.intEmployee_ID = '$emp_number' ";
                       $query = $conn->query($sql);
                       while($row = $query->fetch_assoc()){


                  ?>
                  
                        <tr>                          
                            <td><?php echo $row['inclusive_DateFrom']." - ". $row['inclusive_DateTo']; ?></td>                            
                            <td><?php echo $row['varPosition']; ?></td>
                            <td><?php echo $row['enumJobStatus']; ?></td>
                            <td><?php echo $row['varDepartment']; ?></td>
                            <td><?php echo $row['varAwol']; ?></td>
                            <td><?php echo $row['varSeparation_Date']; ?></td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#" >Edit</a></li>
                                  <li><a href="#" >Delete</a></li>
                                </ul>
                          </div>
                              
                            </td>  

                          
                        </tr>
                       <?php } ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>




      

        </div>
      </div>
    </section>
    <!-- /.content -->


    </div> 
  
    <?php include 'include/footer.php'; ?>
    <?php include ('modal/modal_add.php') ?>
  </div> 
  <?php include 'include/scripts.php'; ?>


<script type="text/javascript">
$(document).ready(function(){
 var count = 1;
  $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
    html_code += "<td contenteditable='true' class='date_from'></td>";
    html_code += "<td contenteditable='true' class='date_to'></td>";
    html_code += "<td contenteditable='true' class='designation'></td>";
    html_code += "<td contenteditable='true' class='job_status'></td>";
    html_code += "<td contenteditable='true' class='office'></td>";
    html_code += "<td contenteditable='true' class='withoutpay'></td>";
    html_code += "<td contenteditable='true' class='separation_date'></td>";
    html_code += "<td><button type='button'  name='remove' data-row='row"+count+"' class='btn btn-danger remove'>Remove</button></td>";
    html_code += "</tr>";
    $('#crud_table').append(html_code);
  });

  $(document).on('click','.remove', function(){
    var delete_row = $(this).data("row");
    $('#' + delete_row).remove();
    });

  $('#save').click(function(){
    
    //var emp_id = [];
    var date_from = [];
    var date_to = [];
    var designation = [];
    var job_status = [];
    var office = [];
    var withoutpay = [];
    var separation_date = [];
    //var emp_id = [];
    var emp_id = $('#emp_id').val();

       
   //   $('.emp_id').each(function(){
   // emp_id.push($(this).val());
   //    });
    $('.date_from').each(function(){
   date_from.push($(this).text());
      });   
    $('.date_to').each(function(){
   date_to.push($(this).text());
    });
    $('.designation').each(function(){
   designation.push($(this).text());
    });
    $('.job_status').each(function(){
   job_status.push($(this).text());
    });
    $('.office').each(function(){
   office.push($(this).text());
    });
    $('.withoutpay').each(function(){
   withoutpay.push($(this).text());
   });
    $('.separation_date').each(function(){
   separation_date.push($(this).text());
    });

    $.ajax({
   url:"ajax.php",
   method:"POST",
   data : {date_from:date_from, date_to:date_to, designation:designation, job_status:job_status, office:office, withoutpay:withoutpay, separation_date:separation_date, emp_id:emp_id},
    success: function(data){
      alert(data);
      $("td[contentEditable='true']").text("");
      for (var i = 2; i <= count; i++) {
        $('tr#'+i+'').remove();
      }
      fetch_item_data();
    }
  });
});

function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
}); 
  

</script>
