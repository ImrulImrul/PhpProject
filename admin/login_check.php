<?php 
  session_start();
  $error = "";
  if(isset($_POST['user_login'])){
    $user_name = $_POST['user_name'];
    $user_password = md5($_POST['user_password']);
    $sql_for_user_login = "SELECT user_name,user_password from admin where user_name = '$user_name' limit 1";
    $query_for_user_login = mysqli_query($con, $sql_for_user_login);
    $user_row = mysqli_fetch_array($query_for_user_login);
    if($user_row['user_name'] != $user_name){
      $error = "Wrong User Name";
    }
    else{
      if($user_row['user_password'] != $user_password){
        $error = "Wrong Password";
      }
      else{
        $_SESSION['user_name'] = $user_row['user_name'];
        header("Location: index.php");
      }
    }
  }
?>