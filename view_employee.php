<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>


<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        View Employees List      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">View Employee</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      <?php
       include 'modal/notification.php' 
      ?>
      <div class="box">        
        <div class="box-body">
         
         <div class="row">
        <div class="col-xs-12">
        
            <div class="box-header with-border">
               <a href="add_employee.php"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Employee</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Employee Name</th>
                  <th>Username</th>
                  <th>Department</th>
                  <th>Position Title</th>                
                  <th>Employment Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT a.*,b.*,c.*,d.* FROM tbl_employee a 
                    INNER JOIN tbl_account d ON d.intEmployee_ID = a.intEmployee_ID
                    INNER JOIN tbl_position b ON a.intPosition_ID = b.intPosition_ID 
                    INNER JOIN tbl_department c ON c.intDepartment_ID = a.intDepartment_ID
                    
                    ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                    $emp_id = $row['intEmployee_ID'];
                     $employeename = strtoupper($row['varLastname'] . " ".$row['varExtension_Name']." ". $row['varFirstname']);                     

                      ?>
                        <tr>
                          <td><a href="update_employee_details.php<?php echo '?emp_id='.$emp_id; ?>"><?php echo $employeename ; ?> </a></td>
                          <td><?php echo $row['varUsername']; ?></td>
                          <td><?php echo $row['varDepartment'] ; ?></td>
                          <td><?php echo $row['varPosition'] ; ?></td>                                       
                          <td><?php echo $row['enumEmployment_Status'] ; ?>
                            <!-- <div class="btn-group">
                                <button type="button" class="btn btn-default"><?php echo $row['enumEmployment_Status'] ; ?></button>
                                <button type="button" class="btn btn-information dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">                         
                                  <li><a href="#" ><?php echo $row['enumEmployment_Status'] ; ?></a></li>
                                  <li><a href="#" >Active</a></li>
                                  <li><a href="#" >Retired</a></li>
                                  <li><a href="#" >Resigned</a></li>
                                  <li><a href="#" >Terminated</a></li>
                                </ul>
                          </div> -->



                          </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">                         
                                  <li><a href="#" >View Balance Leave</a></li>
                                  <li><a href="#" >View Leave Record</a></li>
                                  <li><a href="update_employee_details.php<?php echo '?emp_id='.$emp_id; ?>" >Edit</a></li>
                                  <li><a href="#" >Delete</a></li>
                                </ul>
                          </div>

                        </td>
                        </tr>
                      <?php
                    }
                  ?>
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
  </div> 
  <?php include 'include/scripts.php'; ?>
