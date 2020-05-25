<?php

session_start();
require("special_pass.php");

$fare = $_SESSION['fares'];
$id = $_SESSION['id'];

$sp = new special_pass();
$val = $sp->updateTicketSold($id,$fares);

if($val)
{
    header("location:display_spass.php");
}
else
{
    echo ("Error");
}

?>
