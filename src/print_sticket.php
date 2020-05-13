<?php

session_start();
require("special_pass.php");

$user=$_SESSION['user'];
$bp=$_SESSION['bp'];
$fares=$_SESSION['fares'];
$date1=$_SESSION['date1'];

$sp = new special_pass();
$val = $sp->updateTicketSold($user,$bp,$fares,$date1);

if($val)
{
    header("location:display_spass.php");
}
else
{
    echo ("Error");
}

?>
