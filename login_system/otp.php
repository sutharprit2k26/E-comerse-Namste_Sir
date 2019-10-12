<?php
ob_start();
error_reporting(0);
session_start();
$number = $_REQUEST['number'];
$_SESSION['number']=$number;
echo $_SESSION['number'];

?>

<!DOCTYPE html>
<html lang="en">

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
       
							<div style="display:none" id="signup-alert" class="alert alert-danger"></div>

							<form action="otp.php" methof="POST" id="signupform" class="form-horizontal">

								<div  class="form-group">
										<label>Verify number: </label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"
													aria-hidden="true"></i></span>
											<input type="text" name="otp" class="form-control" value=""
												placeholder="enter otp here" />
											<button type="submit" name="verify_otp" id="btn-verify"
												class="btn btn-info ml-auto">Verify Otp
											</button>
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