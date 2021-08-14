
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($emp_user['photo'])) ? 'images/'.$emp_user['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        
        </div>
        <div class="pull-left info">
          <p><?php echo strtoupper($emp_user['varUsername']); ?></p>
          <a><i class="fa fa-circle text-success"></i><?php echo strtoupper($emp_user['enumUser_Level']); ?></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-o"></i>
            <span>Personal Information</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="update_account.php"><i class="fa fa-circle-o"></i> Edit Data</a></li>
            <li><a href="view_employee_profile.php"><i class="fa fa-circle-o"></i> Profile</a></li>
            
          </ul>
               <li>
            <a href="employee_leave_application_form.php" >
            <i class="fa fa-files-o"></i> <span>Apply Leave</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
      <?php  if ($userlevel=="Admin Officer" || $userlevel == "Department Head") { ?>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Leave Application</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
            
            <li><a href="view_leave_application.php"><i class="fa fa-circle-o"></i> View Leave Application</a></li>   
          </ul>
        </li>

        <?php }else if($userlevel=="System Admin" || $userlevel=="HR Manager"){ ?>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Leave Application</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="view_leave_type.php"><i class="fa fa-circle-o"></i> Leave Type</a></li>
            <li><a href="view_leave_application.php"><i class="fa fa-circle-o"></i> View Pending Application</a></li>
            <li><a href="view_leave_earn.php"><i class="fa fa-circle-o"></i> Leave Earn</a></li>     
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view_employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
            <li><a href="view_department.php"><i class="fa fa-circle-o"></i> Department</a></li>
            <li><a href="view_position.php"><i class="fa fa-circle-o"></i> Position</a></li> 
          </ul>
        </li> 
        <!-- <li><a href="#"><i class="fa fa-file-text"></i> Deductions</a></li>         -->
        <!-- <li class="header">PRINTABLES</li> -->
        <li><a href="view_holiday.php"><i class="fa fa-files-o"></i> <span>Holiday</span></a></li>
        <!-- <li><a href="view_workschedule.php"><i class="fa fa-clock-o"></i> <span>Schedule</span></a></li> -->

      <?php }?>
      </ul>       
    </section>
   
   
   
  </aside>


