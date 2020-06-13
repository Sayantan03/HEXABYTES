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

$val = $ob->validateId($tramid);

if($val)
{
    $num = $ob->updatedb($tramid,$source,$destination,$stime,$etime,$cat);
    if($num)
    {
        echo '<script>alert("Updated Successfully")
        window.location = "showtramdetails.php"
        </script>';
    }
    else
    {
        echo '<script>alert("Updation Fails. Please try again")
        window.location = "updatetable.html"
        </script>';
    }
}
else
{
    echo '<script>alert("TramId doesnot exist")
    window.location = "showtramdetails.php"
    </script>';
}