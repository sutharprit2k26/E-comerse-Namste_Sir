<?php
session_start();
ob_start();
error_reporting(0);
require '../database/db.php';
$no = $_REQUEST['no'];
$_SESSION['no'] = $no;
$sql="SELECT * FROM employees WHERE number = '$no'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$nums=mysqli_num_rows($res);
$msg = 0;
$flag = 1;
if($nums>0)
{
	$msg = "This no is registered login with name = <b>".$row['fname']."</b>";
}
else
{
	$msg = "Enter Otp send on your mobile phone";
	$flag =0;
	/*here we send otp*/
	function generatePIN($digits = 4){
		$i = 0; //counter
		$pin = ""; //our default pin is blank.
		while($i < $digits){
			//generate a random number between 0 and 9.
			$pin .= mt_rand(0, 9);
			$i++;
		}
		return $pin;
	}
	 
	//If I want a 4-digit PIN code.
	$_SESSION['otp'] = generatePIN();

session_write_close();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>NamasteSir</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="NamasteSir project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
</head>

<body>


<div class="container-fluid">
        <div class="container" style="padding: 50px 200px 50px 200px;" class="text-center" >
       
							<div id="alert" class="alert alert-danger"><?php if(isset($_SESSION['otp_msg'])) echo "<b>".$_SESSION['otp_msg']."</b>, "; if(isset($msg)) echo $msg;?></div>

							<form method="POST" action="../forms/form_profile.php" id="signupform" class="form-horizontal">


								<div  class="form-group">										
										<div class="input-group">																						
											<?php 
											#when mobile no is not register with namstesir show verfiy else show go back
											if($flag==0){
												echo "<span class=\"input-group-addon\"><i class=\"fa fa-user\"
													aria-hidden=\"true\"></i></span>";
												echo "<input type=\"text\" name=\"otp\" value=".$_SESSION['otp']." class=\"form-control\"
												placeholder=\"enter otp here\" />";
											
												echo "<button type=\"submit\" >Verify otp </button>";
											}
											else{ 
												echo "<a  href=\"../index.php\" class=\"btn btn-info\">Go back</a>";
											}
											?>
										</div>
									</div>

							</form>
						</div>
					</div>


<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
</body>
</html>