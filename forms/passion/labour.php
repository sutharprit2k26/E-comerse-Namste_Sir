<?php
ob_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 
require '../../database/db.php';
$no =  $_SESSION['no'];

$sql="SELECT * FROM employees WHERE number = '$no'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$emp = $row['employee_id'];
$type = $_REQUEST['type'];
$exp = $_REQUEST['exp'];
$price = $_REQUEST['price'];

$p1 = base64_encode(file_get_contents(addslashes($_FILES['pic1']['tmp_name'])));
$p2 = base64_encode(file_get_contents(addslashes($_FILES['pic2']['tmp_name'])));
$p3 = base64_encode(file_get_contents(addslashes($_FILES['pic3']['tmp_name'])));
$p4 = base64_encode(file_get_contents(addslashes($_FILES['pic4']['tmp_name'])));
$p5 = base64_encode(file_get_contents(addslashes($_FILES['pic5']['tmp_name'])));
$p6 = base64_encode(file_get_contents(addslashes($_FILES['pic6']['tmp_name'])));

$sql = "INSERT INTO passion_labour (employee_id,type,exp,price,img1,img2,img3,img4,img5,img6)
 VALUES ('$emp','$type','$exp','$price','$p1','$p2','$p3','$p4','$p5','$p6')";

if (!mysqli_query($con,$sql))
{
 echo("Error description: " . mysqli_error($con));
}

mysqli_close($con);
echo "your account created";
header("Refresh:2; url=../../employees_portfolio/passion/labour_portfolio.php");
} 
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NamasteSir</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="NamasteSir project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
    <link href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>
        
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="container" style="padding: 50px 200px 50px 200px;" class="text-center" >
            <!-- up left bottom right-->
            <form  method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Type of labour:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="type" class="form-control" placeholder="type your role as labour">                
                    </div>
                </div>

                <div class="form-group">
                    <label>Experience:</label>
                    <div class="input-group">
                    <select name="exp" class="form-control">
							<option value='1'>1 year</option>
							<option value='2'>2 year</option>
							<option value='3'>3 year</option>
						</select>
                    </div>
                </div>


                <div class="form-group">
                    <label>Price:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="number" name="price" class="form-control" placeholder="min price for one event or leave blank">
                    </div>
                </div>

                <div class="form-group">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic1" class="form-control">
                        <input type="button" value="add more" onClick="$('#image2').show();" class="ml-auto"> 
                    </div>
                </div>

                <div class="form-group" style="display:none" id="image2">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic2" class="form-control">
                        <input type="button" value="add more" onClick="$('#image3').show();" class="ml-auto"> 
                    </div>
                </div>

                <div class="form-group" style="display:none" id="image3">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic3" class="form-control">
                        <input type="button" value="add more" onClick="$('#image4').show();" class="ml-auto"> 
                    </div>
                </div>

                <div class="form-group" style="display:none" id="image4">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic4" class="form-control">
                        <input type="button" value="add more" onClick="$('#image5').show();" class="ml-auto"> 
                    </div>
                </div>

                <div class="form-group" style="display:none" id="image5">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic5" class="form-control">
                        <input type="button" value="add more" onClick="$('#image6').show();" class="ml-auto"> 
                    </div>
                </div>

                <div class="form-group" style="display:none" id="image6">
                    <label>picture:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                        <input type="file" name="pic6" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>

    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../styles/bootstrap4/popper.js"></script>
</body>

</html>