<?php
session_start();
ob_start();
error_reporting(0);
#user enter otp
$otp = $_REQUEST['otp'];
#original otp
$original_otp = $_SESSION['otp'];
#here we match condition and if correct show profile form else redirest back
$flag=1;
if($otp==$original_otp && isset($_SESSION['no'])){
    $msg =  "<b>Otp match successfull fill personal infomation</b>";
}
else{
    header("location: ../login_system/sendotp.php");
    $_SESSION['otp_msg'] = "Enter otp is wrong";
    $flag=0;
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
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .require{
            color:red;
        }
    .reg_form{
        padding: 50px 200px 50px 200px;
    }
    @media only screen and (max-width: 600px) {
        .reg_form{
            padding: 0px 0px 0px 0px;
        }
    }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container" style="padding: 50px 200px 50px 200px;" class="text-center" >
            <!-- up left bottom right-->
            <div id="alert" class="alert alert-danger"><?php if(isset($msg)) echo $msg;?></div>
            <form action="save_profile.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Dream <span class="require">*</span></label>
                    <div class="input-group">
                        <select name="field" class="form-control" id="field"></select>
                        <select name="domain" class="form-control" id="domain" required>
                            <option value="" selected disabled hidden><b>Select Field</b>
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Name <span class="require">*</span></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Mobile number <span class="require">*</span></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="number" value="<?php if(isset($_SESSION['no'])){ echo $_SESSION['no'];} else echo "session destroy";?>" class="form-control" required disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="email" name="email" placeholder="It's not mandatory to give " class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label>Date of birth</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input type="date" name="dob" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender <span class="require">*</span></label>
                    <div class="input-group">
                        <input type="radio" name="sex" value="male" checked> Male<br>
                        <input type="radio" name="sex" value="female"> Female<br>
                        <input type="radio" name="sex" value="other"> Other
                    </div>
                </div>

                <div class="form-group">
                        <label>Address <span class="require">*</span></label>
                        <div class="input-group">
                                <select name ="state" class="form-control" onchange="print_city('state', this.selectedIndex);" id="sts"></select>
                                <select name="city" class="form-control"  id ="state" ></select>
                                <input type="text" name="residence" placeholder="your local residence area" class="form-control"> 
                        </div>
                    </div>

                <div class="form-group">
                        <label>Profile picture <span class="require">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                            <input type="file" name="pic" class="form-control" required>
                        </div>
                    </div>

                

                <div class="form-group">
                    <label for="pwd">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="enter valid password" required>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            // Countries
            var field_arr = new Array("Field Category", "Talent/art", "Passion/work");

            $.each(field_arr, function (i, item) {
                $('#field').append($('<option>', {
                    value: i,
                    text: item,
                }, '</option>'));
            });

            // domains
            var d_a = new Array();
            d_a[0] = "Select Field";
            d_a[1] = "singing|photography";
            d_a[2] = "pandit|labour|driver";




            $('#field').change(function () {
                var c = $(this).val();
                var domain_arr = d_a[c].split("|");
                $('#domain').empty();
                if (c == 0) {
                    $('#domain').append($('<option>', {
                        value: '0',
                        text: 'Select Field',
                    }, '</option>'));
                } else {
                    $.each(domain_arr, function (i, item_domain) {
                        $('#domain').append($('<option>', {
                            value: item_domain,
                            text: item_domain,
                        }, '</option>'));
                    });
                }

            });

            $('#domain').change(function () {
                var s = $(this).val();
                if (s == 'Select Field') {
                    $('#city').empty();
                    $('#city').append($('<option>', {
                        value: '0',
                        text: 'Select City',
                    }, '</option>'));
                }
                var city_arr = c_a[s].split("|");
                $('#city').empty();

                $.each(city_arr, function (j, item_city) {
                    $('#city').append($('<option>', {
                        value: item_city,
                        text: item_city,
                    }, '</option>'));
                });


            });
        });
    </script>
    <script src="Indian-States-Cities-Database/cities.js"></script>
    <script language="javascript">print_state("sts");</script>
</body>

</html>