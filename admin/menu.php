 <?php
    session_start();
    if (empty($_SESSION['user_name'])) {
      header("Location: login.php");
    }
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EMP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>EMP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="index.php">
             <span class="hidden-xs"><?php echo $_SESSION['user_name']; ?></span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="logout.php" class="btn btn-flat"><i class="fa fa-sign-out"></i>Sign Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class=" menu">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Admin</span>
          </a>



 <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Notice Annoucement </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="notice_board.php"><i class="fa fa-circle-o"></i> Post </a></li>
            <li><a href="view_notice_board.php"><i class="fa fa-circle-o"></i> View Notice</a></li>
          </ul>
        </li>

 <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Employee Attendeance  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Attendeance </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View Attendeance</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Latest Govt Circular </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="govt_circular.php"><i class="fa fa-circle-o"></i>Govt Circular Post </a></li>
            <li><a href="view_govt_circular.php"><i class="fa fa-circle-o"></i> View Govt Circular</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Letter Box </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="letter_box.php"><i class="fa fa-circle-o"></i>Letter Box Post </a></li>
            <li><a href="view_letter_box.php"><i class="fa fa-circle-o"></i> View Letter Box</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Employee Profile </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_employee.php"><i class="fa fa-circle-o"></i> Add Employee Profile </a></li>
            <li><a href="view_employee.php"><i class="fa fa-circle-o"></i> View Employee Profile</a></li>
          </ul>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Update Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_employee_salary.php"><i class="fa fa-circle-o"></i>Add Employee Salary</a></li>
            <li><a href="view_employee_salary.php"><i class="fa fa-circle-o"></i>View Employee Salary</a></li>
          </ul>
        </li>

           <li><a href="view_employee_salary.php"><i class="fa fa-circle-o"></i>Employee Search</a></li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
