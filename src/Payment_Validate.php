<?php
//Implemented by Subham Samanta

session_start();
require('Payment_Manager.php');

$name = $_POST['cname'];
$cno = $_POST['cno'];
$ed = $_POST['ed'];
$cvv = $_POST['cvv'];
$fare = $_SESSION['fare'];

$ed = (string)$ed;
$fare = (double)$fare;
$ob = new Payment_Manager();
$val = $ob->validate($name,$cno,$ed,$cvv,$fare);

if($val)
{
    header('location:print_uticket.php');
}
else
{
    echo '<script>alert("Payment Failure")
    window.location = "Unreserved_Ticket.html"
    </script>';
}

?>
