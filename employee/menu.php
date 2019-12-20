 <?php
    session_start();
    if (empty($_SESSION['username'])) {
      header("Location: login.php");
    }
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Employee </b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Employee</b></span>
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
             <span class="hidden-xs"><?php echo $_SESSION['username'];  ?></span>
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
            <i class="fa fa-dashboard"></i> <span>Employee</span>
          </a>
        </li>

        <li class="treeview">

            <li><a href="view_notice_board.php"><i class="c"></i> View Notice Board</a></li>
            <li><a href="view_govt_circular.php"><i class="fa fa-circle-o"></i> View Govt Circular</a></li>
            <li><a href="view_letter_box.php"><i class="fa fa-circle-o"></i> View Letter Box</a></li>
            <li><a href="view_employee.php"><i class="fa fa-circle-o"></i> View Employee Profile </a></li>
            <li><a href="view_employee_salary.php"><i class="fa fa-circle-o"></i> View Employee Salery </a></li>
            <li class="">
                     <a href="#">
                       <i class="fa fa-circle-o"></i>
                       <span>Day of Statement  </span>
                       <span class="">
                         <i class=""></i>
                       </span>
                     </a>


        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
