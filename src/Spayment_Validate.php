<?php
//Implemented by Siddhartha Banerjee
session_start();
require('Payment_Manager.php');

$name = $_POST['cname'];
$cno = $_POST['cno'];
$ed = $_POST['ed'];
$cvv = $_POST['cvv'];
$fare = $_SESSION['fares'];

$ed = (string)$ed;
$fare = (double)$fare;
$ob = new Payment_Manager();
$val = $ob->validate($name,$cno,$ed,$cvv,$fare);

if($val)
{
    header('location:print_sticket.php');
}
else
{
    echo '<script>alert("Payment Failure")
    window.location = "Special_Booking.html"
    </script>';
}

?>
