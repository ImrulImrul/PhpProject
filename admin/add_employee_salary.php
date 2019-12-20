
<?php

include 'config.php';
$message = "";
if (isset($_POST['add_new'])) {
$name = $_POST['employee_name'];
$designation = $_POST['designation'];
$amount = $_POST['amount'];
$payment = $_POST['payment'];




 //echo"'$drname', '$pname', '$phonenum','$amount'";
$sql_add_employee_bill= "INSERT INTO add_employee_bill(name,designation,amount,payment
)
VALUES ('$name','$designation','$amount','$payment')";
// echo $sql;
$query_add_employee_bill = mysqli_query($con,$sql_add_employee_bill);
if ($query_add_employee_bill) {



  $message = '<div class="alert alert-success">
  <strong>Success!</strong> New record created successfully !
</div>';
}else{
  $message = '<div class="alert alert-danger">
  <strong>Success!</strong> Faild !
</div>';
}
}
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="../icon.png" sizes="16x16" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Employee Salary</title>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-header">
                <h2 class="box-title">  </h2>
            </div>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""></li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="box">
        <div class="box-header">
                <h1 class="text-center text-green"> Add Employee Salary </h1>
            </div>
      <div class="row" >
        <div class="col-md-10 col-md-offset-1">
    <!-- <span><?php echo $productMessage; ?></span> -->

      <span><?php if (!empty($message)) {
            echo $message;
            $message = "";
            } ?></span>


        <form class="form-horizontal" method="post" enctype="multipart/form-data">




 <div class="form-group">

                <label for="title"  class="col-sm-2 control-label" name="cetegory">Employee Name</label>

                <div class="col-sm-4">
                  <select class="form-control" name="employee_name" id="employee_name" onchange="emp_salary();emp_name();">
                    <option value="">Select employee name</option>
                  <?php
                     $sql_add_employee = "select * from add_employee" ;
                  $query_add_employee= mysqli_query($con,$sql_add_employee);
                  while($add_employee = mysqli_fetch_array($query_add_employee)) {

                    ?>
                    <option value="<?php echo $add_employee['id']; ?>"><?php echo $add_employee['name']; ?></option>

                <?php } ?>
                  </select>
                </div>

<!--             </div>

            <div class="form-group"> -->

                  <label for="title"  class="col-sm-2 control-label" name="cetegory"> Post   </label>

                  <div class="col-sm-4">
                        <input class="form-control" type="text" name="designation" id="designation">
                  </div>




</div>



 <div class="form-group">

             <label for="title"  class="col-sm-2 control-label" name="cetegory"> Salary </label>

                  <div class="col-sm-4">
                        <input class="form-control" type="text" name="amount" id="salary">
                  </div>


                <label for="title"  class="col-sm-2 control-label" name="cetegory"> Payment</label>

                <div class="col-sm-4">
                        <input class="form-control" type="text" name="payment" placeholder="Enter Your Payment  Here">
                </div>





</div>




                 <div class="col-md-offset-5">
                      <br>
                 <input type="submit" name="add_new" class="btn btn-success"value="Submit">

              </div>


            </form>

      </div>
  </div>
  <div class="box-header">
                <h2 class="box-title"> </h2>
            </div>
</div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script >
  function emp_salary(){
        var employee_name = $('#employee_name').val();
          $.ajax({
              type:"GET",
              url: "get_salary.php",
              cache: false,
              data:{
                  e_id:employee_name
              },
              success: function(result){
                // alert(result);
                document.getElementById('salary').value = result;
              },
              error:function(){
                alert('error');
              }
          });
    }
    function emp_name(){
        var employee_name = $('#employee_name').val();
          $.ajax({
              type:"GET",
              url: "get_name.php",
              cache: false,
              data:{
                  e_id:employee_name
              },
              success: function(result){
                // alert(result);
                document.getElementById('designation').value = result;
              },
              error:function(){
                alert('error');
              }
          });
    }
</script>
</body>
</html>
