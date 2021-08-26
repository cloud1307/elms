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
      
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
            
            <div class="box-body">
              <table  class="table table-bordered">
                <thead>
                  <th>Inclusive Date From</th>
                  <th>Inclusive Date To</th>
                  <th>Designation</th>
                  <th>Status</th> 
                  <th>Office Station</th>
                  <th>L/V Abs W/O Pay</th>
                  <th>Separation Cause Date</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  
                        <tr>                          
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>  

                          
                        </tr>
                       
                  
                </tbody>
              </table>
            </div> 
            <div class="box-header with-border">
               <a href="#modal-leave-type" data-toggle="modal"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Leave Type</a>
            </div> 

          </div>
          
        </div>
        <br><br><br>

      <div class="row">
        <div class="col-xs-12">        
            
            <div class="box-body">
              <table  id="example1" class="table table-bordered">
                <thead>
                  <th>Inclusive Date From</th>
                  <th>Inclusive Date To</th>
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
                            <td><?php echo $row['inclusive_DateFrom']; ?></td>
                            <td><?php echo $row['inclusive_DateTo']; ?></td>
                            <td><?php echo $row['varPosition']; ?></td>
                            <td><?php echo $row['enumJobStatus']; ?></td>
                            <td><?php echo $row['varDepartment']; ?></td>
                            <td><?php echo $row['varW/o_Pay']; ?></td>
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
