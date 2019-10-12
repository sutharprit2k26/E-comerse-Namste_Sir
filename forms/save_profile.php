<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
require '../database/db.php';

$field = $_REQUEST['field'];
$domain = $_REQUEST['domain'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$no = $_SESSION['no'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$sex = $_REQUEST['sex'];
$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$town = $_REQUEST['residence'];
$image = base64_encode(file_get_contents(addslashes($_FILES['pic']['tmp_name'])));
$pass = $_REQUEST['pass'];
$sql = "INSERT INTO employees (field,	domain,	fname,	lname,	number,
            email,	dob,	sex,	state,	city,	town, image,    password) 
        VALUES ('$field',	'$domain',	'$fname',	'$lname',	'$no',
            '$email',	'$dob',	'$sex',	'$state',	'$city',	'$town',	'$image',	'$pass')";
mysqli_query($con,$sql);


if (!mysqli_query($con,$sql))
{
 echo("Error description: " . mysqli_error($con));
}

$con->close();
if($domain=='singing')
{
    header("location:talent/singing.php");
}

?>