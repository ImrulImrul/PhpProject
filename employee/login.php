<?php
  include 'config.php';
  include 'login_check.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../icon.png" sizes="16x16" />

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee !</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page container">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Employee</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="text-center">Login</p>
    <form action="" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User Name" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="user_login">Log In</button>
        </div>
        <p>
      Not yet a member? <a href="register.php">Registration Here</a>
    </p>
      </div>
      <div class="row">
        <div class="form-group has-feedback">
          <span class="text-danger"><?php echo $error; ?></span>
        </div>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>


