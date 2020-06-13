<?php

session_start();
require('admin_control.php');

$tramid = $_POST['tid'];
$source = $_POST['src'];
$destination = $_POST['des'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$cat = $_POST['cat'];

$ob = new admin_control();

$num = $ob->insertdb($tramid,$source,$destination,$stime,$etime,$cat);
if($num)
{
    echo '<script>alert("Tram details inserted Successfully")
    window.location = "showtramdetails.php"
    </script>';
}
else
{
    echo '<script>alert("Insertion Fails. Please try again")
    window.location = "inserttable.html"
    </script>';
}