<?php 
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: index.php");
  }
  $error = "";
  if(isset($_POST['user_login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql_for_user_login = "SELECT username,password from employees where username = '$username' limit 1";
    $query_for_user_login = mysqli_query($con, $sql_for_user_login);
    $user_row = mysqli_fetch_array($query_for_user_login);
    if($user_row['username'] != $username){
      $error = "Wrong User Name";
    }
    else{
      if($user_row['password'] != $password){
        $error = "Wrong Password";
      }
      else{
        $_SESSION['username'] = $user_row['username'];
        header("Location: index.php");
      }
    }
  }
?>