<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        View Department List      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">View Department</a></li>
      
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
               <a href="#modal-department" data-toggle="modal"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Department</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Department</th>  
                  <th>Department ShortName</th>           
                  <th>Department Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    // $sql = "SELECT a.*, b.*, c.*  FROM tbl_department a INNER JOIN tbl_employee b  ON a.intDepartment_ID = b.intDepartment_ID 
                    // INNER JOIN tbl_account c ON c.intEmployee_ID = b.intEmployee_ID  WHERE enumUser_Level = 'Department Head' ";
                  $sql = "SELECT *  FROM tbl_department WHERE enumStatus = 'Active' ";
                    $query3 = $conn->query($sql);
                    while($deptrow = $query3->fetch_assoc()){

                      // $employeename = strtoupper($row['varLastname'] . " ". $row['varFirstname']);

                      // if ($employeename == " ") {
                      //   $employeename = "N/A";
                      // }else{
                      //   $employeename ;
                      // }
                     

                      ?>
                        <tr>
                          <td><?php echo $deptrow['varDepartment']; ?></td>
                          <td><?php echo $deptrow['varDepartment_Shortname'] ; ?></td>
                          <td><?php echo $deptrow['enumStatus'] ; ?></td>
                          <!-- <td><?php echo $row['enumEmployment_Status'] ; ?></td> -->
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#edit-modal-department<?php echo $deptrow['intDepartment_ID']; ?>" data-toggle="modal" >Edit</a></li>
                                  <li><a href="#delete-modal-department<?php echo $deptrow['intDepartment_ID']; ?>" data-toggle="modal" >Delete</a></li>
                                </ul>
                          </div>
                        </td>
                        </tr>
                        <?php include 'modal/modal_update.php' ?>
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
    <?php include ('modal/modal_add.php') ?>
  </div> 
  <?php include 'include/scripts.php'; ?>