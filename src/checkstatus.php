<?php

session_start();
require('adminfunc.php');

$id = $_POST['id1'];
$id = (int)$id;

$ob = new adminfunc();
$exist = $ob->existId($id);
if(!$exist)
{
    echo '<script>alert("Flushed Booking ID")
    window.location = "check_status.html"</script>';
}
else
{
    $val = $ob->validate($id);
    if($val)
    {
        $_SESSION['id'] = $id;

        $conn = new mysqli('localhost','root');
        mysqli_select_db($conn,'tram');
        $stmt = "select * from special_ticket where id='$id'";
        $result = mysqli_query($conn,$stmt);
        $num = mysqli_num_rows($result);
        if($num>0)
        {
            header('location:display_spass.php');
        }
        else
        {
            echo '<script>alert("Booking Confirmed")
            window.location = "Spayment_Gateway.php"</script>';
        }
    }
    else
    {
        echo "Booking not Confirmed";
    }
}
?>
