<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        View List of Work Schedule </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">View Work Schedule</a></li>
      
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
               <a href="#modal-schedule" data-toggle="modal"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Work Schedule</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>          
                  <th>Inclusive Time From</th>
                  <th>Inclusive Time To</th>
                  <th>Schedule Type</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *  FROM tbl_work_schedule";
                    $query1 = $conn->query($sql);
                    while($rowsched = $query1->fetch_assoc()){
                                      
                    
                      ?>
                        <tr>                       
                          <td><?php echo date('h:i A', strtotime($rowsched['Inclusive_Time_From'])) ; ?></td>
                          <td><?php echo date('h:i A', strtotime($rowsched['Inclusive_Time_To'])) ; ?></td>
                          <td><?php echo $rowsched['enumSchedule_Type'] ; ?></td>                            
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">                         
                                  <li><a href="#edit-modal-schedule<?php echo $rowsched['intWorkSched_ID']; ?>" data-toggle="modal" >Edit</a></li>
                                  <li><a href="#delete-modal-schedule<?php echo $rowsched['intWorkSched_ID']; ?>" data-toggle="modal" >Delete</a></li>

                                </ul>
                                  
                          </div>

                        </td>
                        </tr>
                        <?php include 'modal/modal_update.php' ;?>
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
   <?php include 'modal/modal_add.php' ;?>
       
  </div> 
  <?php include 'include/scripts.php'; ?>