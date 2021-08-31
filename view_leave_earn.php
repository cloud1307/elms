<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>



<div class="wrapper">
  <?php include 'include/navbar.php'; ?>
    <?php include 'include/menubar.php'; ?>

<div class="content-wrapper">
  
    
    <section class="content-header">
      <h1>
        View List of Leave Earn    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">View Leave Earn</a></li>
      
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
        
        <?php  if ($userlevel == "HR Manager"){ ?>
             <div class="box-header with-border">
               <a href="#modal-employee-earn-leave" data-toggle="modal"  class="btn btn-primary  btn-flat"><i class="fa fa-plus"></i> Apply Earn Leave</a>
            </div>

            <?php }?> 
            <div class="box-body">
              <table id="dataleave" class="table table-bordered">
                <thead>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                  <th>Earn ID</th>          
                  <th>Date Update</th>
                  <th>Leave Type Earn</th>                                 
                  
                  <th>Action</th>
                </thead>
                <tbody>
                
                  <?php
                    $sqlEarn = "SELECT * FROM tbl_earn_leave ";
                    $queryEarn = $conn->query($sqlEarn);
                    while($leaveEarnRow = $queryEarn->fetch_assoc()){                                                        

                      ?>
                        <tr> 
                             <td><input type="checkbox" name="intEarn_ID" value="<?php echo  $leaveEarnRow['intEarn_ID']; ?>">
                            <td><?php echo $leaveEarnRow['intEarn_ID']; ?></td>
                            <td><?php echo $leaveEarnRow['Date_UpdateEarn'] ; ?></td>                         
                            <td><?php echo $leaveEarnRow['Credit_Earn']; ?></td>
                              

                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">                         
                                  <li><a href="#edit-modal-leave<?php echo $leaveEarnRow['intEarn_ID']; ?>" data-toggle="modal" >Edit</a></li>
                                  <li><a href="#delete-modal-leave<?php echo $leaveEarnRow['intEarn_ID']; ?>" data-toggle="modal" >Delete</a></li>
                                </ul>
                          </div> 
                          </td>
                        </tr>
                        <?php include 'modal/modal_update.php'; ?>
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
    <?php include ('modal/modal_add.php'); ?>
  </div> 
  <?php include 'include/scripts.php'; ?>