<?php 
include 'config.php';
$id = $_GET['e_id'];
$sql_add_employee = "SELECT * from add_employee where id = '$id'" ;
$query_add_employee= mysqli_query($con,$sql_add_employee);
$add_employee = mysqli_fetch_array($query_add_employee); 
echo $add_employee['salary'];
 ?>