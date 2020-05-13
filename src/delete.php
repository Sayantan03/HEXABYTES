<?php

session_start();

$conn = new mysqli("localhost","root");
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$user = $_SESSION['user'];
$stmt = "delete from live_location where tramid='$user'";
mysqli_query($conn, $stmt);
header('location:server.html');

?>