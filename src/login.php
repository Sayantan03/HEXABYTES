<?php
//Implemented by Siddhartha Banerjee
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
        //header('location:Special_booking.html');
        echo '<script>alert("Login Successful!")
        window.location = "Special_booking.html"
        </script>';
    }
    else
    {
        //header('location:login.html');
        echo '<script>alert("Login Error.Please check mailid or password!")
        window.location = "login.html"
        </script>';
    }
?>
