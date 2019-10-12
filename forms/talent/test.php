<?php
session_start();
ob_start();
error_reporting(0);
 
require '../../database/db.php';

$no =  $_SESSION['no'];
echo $no;

$sql="SELECT * FROM employees WHERE number = '$no'";

$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

$emp = $row['employee_id'];
echo $emp;
?>