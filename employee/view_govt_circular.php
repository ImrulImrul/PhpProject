
<?php

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Circular</title>
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
                <h2 class="box-title"> View Circular Information </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto;">
                <table id="example1" class="table">
                    <thead>
                    <tr>

                        <th>Title  </th>
                        <th>Description</th>
                        <th>Action</th>


                    </tr>
                    </thead>

                    <tbody>
                        <?php
                  include 'config.php';

                if (isset($_POST['delete'])) {
                  $id = $_POST['id'];
                  $sql = "DELETE FROM govt_circular WHERE id='$id'";

          if (mysqli_query($con, $sql)) {
              echo "Record deleted successfully";
          } else {
              echo "Error deleting record: " . mysqli_error($con);
          }
                }
                  $sql_govt_circular = "select * from govt_circular" ;
                  $query_govt_circular= mysqli_query($con,$sql_govt_circular);
                  while($govt_circular = mysqli_fetch_array($query_govt_circular)) {

                  ?>

                  <tr>


                   <td><?php echo $govt_circular['title']; ?></td>
                   <td><?php echo $govt_circular['description']; ?></td>



                   <td>
                    <form method="post" action="">
                     <form method="post" action="">
                      <input type="hidden" name="id" value="<?php echo $govt_circular['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">DELETE</button>

                    </form>
                    </form>
                   </td>

              </tr>
             <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>

                        <th>Title  </th>
                        <th>Description</th>
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
