<?php

    session_start();
    require("passenger.php");

    $fname = $_POST['fname'];
    $phone = $_POST['phno'];
    $mail = $_POST['emailid'];
    $pass = $_POST['pwd'];

    $p = new passenger();
    $p->setdetails($fname,$phone,$mail,$pass);
    $valid = $p->updatedetails();
    if($valid)
    {
        echo "Registration done. Close this page and go back to login page and relogin";
    }
    else
    {
        echo "Registration Fail";
    }
?>