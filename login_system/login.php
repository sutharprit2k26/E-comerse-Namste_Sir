<?php
ob_start();
error_reporting(0);
session_start();
require '../database/db.php';
$no  = $_REQUEST['no'];
$pass = $_REQUEST['pass'];

$sql = "SELECT * FROM employees NATURAL JOIN passion_labour WHERE number = '$no' ";
$res=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($res);
$nums=mysqli_num_rows($res);
if($nums>0)
{
    if($pass == $arr['password']){
        $_SESSION['login'] = 1;
        /* personal information  */
        $_SESSION['fname'] = $arr['fname'];
        $_SESSION['lname'] = $arr['lname'];
        $_SESSION['no'] = $arr['number'];
        $_SESSION['email'] = $arr['email'];
        $_SESSION['dob'] = $arr['dob'];
        $_SESSION['sex'] = $arr['sex'];
        $_SESSION['state'] = $arr['state'];
        $_SESSION['city'] = $arr['city'];
        $_SESSION['town'] = $arr['town'];
        $_SESSION['image'] = $arr['image'];
        /* field information  */
        $_SESSION['type'] = $arr['type'];
        $_SESSION['exp'] = $arr['exp'];
        $_SESSION['price'] = $arr['price'];
        $_SESSION['img1'] = $arr['img1'];

        #create all required session of you own table field
        $_SESSION['fname']=$arr['fname'];
        #then redirect to page ex. index homepage page
        echo 'login sucessfully = '.$arr['fname'];
        switch ($arr['field']) {
            case 1:
                switch($arr['domain']){
                    case "singing":
                        header("Refresh:2; url=../employees_portfolio/talent/singing_portfolio.php");
                        break;
                    case "photography":
                        header("Refresh:2; url=../employees_portfolio/talent/photography_portfolio.php");
                        break;
                    default:
                        echo "talent domain select wrong";
                }
                break;
            case 2:
                switch($arr['domain']){
                    case "pandit":
                        header("Refresh:2; url=../employees_portfolio/passion/pandit_portfolio.php");
                        break;
                    case "labour":
                        header("Refresh:2; url=../employees_portfolio/passion/labour_portfolio.php");
                        break;
                    default:
                        echo "talent domain select wrong";
                }
                break;
            default:
                break;
        }
    }
    else{
        #redirect page to login page
        echo 'password not match = '.$arr['fname'];
        header("Refresh:5; url=../index.php");
    }
}
else
{
    #redirect page to signup page
	echo 'account not found';
}