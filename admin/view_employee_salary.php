<?php

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Employee Salary</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title"> Search Employee </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto;">
                <table id="example1" class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Payable Amount</th>
                        <th>Payment</th>
                        <th>Tax</th>
                        <th>Action</th>


                    </tr>
                    </thead>

                     <tbody>
                        <?php
                  include 'config.php';

                if (isset($_POST['delete'])) {
                  $id = $_POST['id'];
                  $sql = "DELETE FROM add_employee_bill WHERE id='$id'";

          if (mysqli_query($con, $sql)) {
              echo "Record deleted successfully";
          } else {
              echo "Error deleting record: " . mysqli_error($con);
          }
                }
                  $sql_add_employee_bill = "select * from add_employee_bill" ;
                  $query_add_employee_bill= mysqli_query($con,$sql_add_employee_bill);
                  $total_amount = 0;
                  $total_payment = 0;
                  $total_due = 0;
                  while($add_employee_bill = mysqli_fetch_array($query_add_employee_bill)) {
                      $total_amount = $total_amount + $add_employee_bill['amount'];
                      $total_payment = $total_payment + $add_employee_bill['payment'];
                  ?>

                  <tr>
                   <td><?php
                    $sql_add_employee = "SELECT * from add_employee where id='".$add_employee_bill['name']."'" ;
                    $query_add_employee= mysqli_query($con,$sql_add_employee);
                    $row_employee = mysqli_fetch_array($query_add_employee);
                    echo $row_employee['name'];
                    ?></td>

                   <td><?php echo $row_employee['designation']; ?></td>

                   <td><?php echo $add_employee_bill['amount']; ?></td>

                   <td><?php echo $add_employee_bill['payment']; ?></td>

                   <td><?php echo $due = $add_employee_bill['amount']-$add_employee_bill['payment']; $total_due = $total_due + $due; ?></td>

                   <td>
                    <form method="post" action="">
                     <form method="post" action="">
                      <input type="hidden" name="id" value="<?php echo $add_employee_bill['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                <!-- <a href="gellary_view_edit.php?id=<?php echo $add_employee_bill['id']; ?>" class="btn btn-success">Edit</a> -->
                    </form>
                    </form>
                   </td>

              </tr>
             <?php } ?>
                    </tbody>

                    <tfoot>
                      <tr>
                        <th colspan="2">Total</th>
                        <th><?php echo  $total_amount; ?></th>
                        <th><?php echo  $total_payment; ?></th>
                        <th><?php echo  $total_due; ?></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Payable Amount</th>
                        <th>Payment</th>
                        <th>Tax</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
      <!-- /.row -->

      <!-- Main row -->

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
    })
</script>

 <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );

</script>
</body>
</html>
