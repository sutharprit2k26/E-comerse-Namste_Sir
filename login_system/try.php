<?php
session_start();
ob_start();
error_reporting(0);
$no = $_SESSION['no'];
echo $no;
?>