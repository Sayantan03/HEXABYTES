<?php

session_start();
require('admin_control.php');

$tramid = $_POST['tid'];

$ob = new admin_control();

$num = $ob->deletedb($tramid);
if($num)
{
    echo '<script>alert("Tram details deleted Successfully")
    window.location = "showtramdetails.php"
    </script>';
}
else
{
    echo '<script>alert("Deletion Fails. Please try again")
    window.location = "deletetable.html"
    </script>';
}