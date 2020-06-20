<?php
//Implemented by Subham Samanta
session_start();
require('admin_user.php');

$eid = $_POST['eid'];
$pass = $_POST['pass'];

$ob = new admin_user();
$val = $ob->validate($eid,$pass);
//echo $val;

if($val=="Booking Manager")
{
    header('location:admin.php');
}
if($val=="Tram Pilot")
{
    header('location:server.html');
}
if($val=="Admin")
{
    /*$myObj->name = $_SESSION['EName'];
    $myJSON = json_encode($myObj);
    echo $myJSON;*/
    header('location:admin_control.html');
}
if($val=="Error")
{
    //header('location:admin_login.html');
    echo '<script>alert("Login Fails")
    window.location = "admin_login.html"</script>';
}
?>
