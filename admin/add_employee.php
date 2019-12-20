
<?php

include 'config.php';
$message = "";
if (isset($_POST['add_new'])) {
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$salary = $_POST['salary'];





$sql_add_resident = "INSERT INTO add_employee(name,phone_no,designation,description,salary)
VALUES ('$name','$phone_number','$designation','$description','$salary')";
// echo $sql;
$query_add_resident = mysqli_query($con,$sql_add_resident);
if ($query_add_resident) {

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
  <title>Add Employee Profile</title>
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
                <h1 class="text-center text-green"> Add Employee Profile</h1>
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

                <label for="title"  class="col-sm-2 control-label" name="cetegory"> Name</label>

                <div class="col-sm-4">
                        <input class="form-control" type="text" name="name" placeholder="Enter Your Name Here">
                </div>

<!--             </div>

            <div class="form-group"> -->

                  <label for="title"  class="col-sm-2 control-label" name="cetegory"> Phone Number   </label>

                  <div class="col-sm-4">
                        <input class="form-control" type="text" name="phone_number" placeholder="Enter Your Phone Number Here ">
                  </div>



</div>



 <div class="form-group">

                <label for="title"  class="col-sm-2 control-label" name="cetegory"> Post</label>

                <div class="col-sm-4">
                        <input class="form-control" type="text" name="designation" placeholder="Enter Your Designation  Here">
                </div>


              <label for="title"  class="col-sm-2 control-label" name="cetegory"> Description</label>

                <div class="col-sm-4">
                        <input class="form-control" type="text" name="description" placeholder="Enter Your Description  Here">
                </div>




        </div>
         <div class="form-group">


                  <label for="title"  class="col-sm-2 control-label" name="cetegory"> Salary   </label>

                  <div class="col-sm-4">
                        <input class="form-control" type="text" name="salary" placeholder="Enter Your Salary Here ">
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
function card_name(str) {
        var xhttp;
        if (str == "") {
          document.getElementById("get_card_name").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("get_card_name").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "onClick.php?supplierName="+str, true);
        xhttp.send();

      }
</script>
</body>
</html>
