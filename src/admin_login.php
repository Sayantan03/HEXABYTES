<?php

session_start();
require('admin_user.php');

$eid = $_POST['eid'];
$pass = $_POST['pass'];

$ob = new admin_user();
$val = $ob->validate($eid,$pass);

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
    //header('location:admin_control.html');
    echo "Admin Function not available. Sorry for the inconvinience.";
}
else
{
    echo '<script>alert("Login Error.Please Check Employee Id and Password")
    window.location = "admin_login.html"
    </script>';
}

?>