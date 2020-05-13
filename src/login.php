<?php

    session_start();
    require("passenger.php");

    $user = $_POST['uid'];
    $pass = $_POST['pwd'];

    $p = new passenger();
    $num = $p->validatedetails($user, $pass);

    if($num == 1)
    {
        //$_SESSION['userid'] = $user;
        //echo $user;
        header('location:Special_booking.html');
    }
    else
    {
        header('location:login.html');
    }
?>