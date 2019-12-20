
<?php

include 'config.php';
$message = "";
if (isset($_POST['add_new'])) {
$title = $_POST['title'];
$description = $_POST['description'];
 
  
 //echo"'$drname', '$pname', '$phonenum','$amount'";
$sql_govt_circular = "INSERT INTO govt_circular(title,description)
VALUES ('$title','$description')";
// echo $sql;
$query_govt_circular = mysqli_query($con,$sql_govt_circular);
if ($query_govt_circular) {

 

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
  <title>Govt Circular</title>
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
      <h1>
Govt Circular
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""></li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row" >
      	<div class="col-md-10 col-md-offset-1">
           <span><?php if (!empty($message)) {
            echo $message;
            $message = "";
            } ?></span>
    
 


        <form class="form-horizontal" method="post" enctype="multipart/form-data">

            <div class="form-group">


 <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-8">
     <input type="text" name="title" class="form-control" id="name" >
    </div>
    </div>
 

     <div class="form-group row">
                    <label for="email">Description</label>
                    <textarea id="editor1" name="description" rows="80" cols="80">

                    </textarea>
                  </div>

            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                  <div class="" class="form-control"  > 
                    <button class="btn btn-primary" name="add_new">Submit</button>
                  </div>
                </div>
            </div>
   

            </form>
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
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>


 