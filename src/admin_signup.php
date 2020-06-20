<?php
//Implemented by Subham Samanta
session_start();
require('admin_user.php');

$name = $_POST['aname'];
$dob = $_POST['dob'];
$bg = $_POST['bg'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$job = $_POST['job'];

$ob = new admin_user();

$val = $ob->insert($name,$dob,$bg,$phone,$mail,$pass,$job);

if($val>0)
{
    echo nl2br("Your employee id is::$val.\nPlease use it while login and the set password.\nClose this tab and login");
}
else
{
    echo "Link Failure";
}
?>
