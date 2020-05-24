<?php

session_start();
require('Location_Manager.php');

$user = $_SESSION['user'];

$ob = new Location_Manager();
$val = $ob->delete($user);
/*$conn = new mysqli("localhost","root");
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$user = $_SESSION['user'];
$stmt = "delete from live_location where tramid='$user'";
mysqli_query($conn, $stmt);*/
if($val)
{    
    header('location:server.html');
}
else
{
    echo "Link Failure";
}
?>
