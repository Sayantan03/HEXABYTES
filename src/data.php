<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$user = $_POST['user'];
$lat = $_POST['lat'];
$long = $_POST['lon'];

$stmt = "insert into live_location(tramid,latitude,longitude) values('$user','$lat','$long')";
mysqli_query($conn, $stmt);
$_SESSION['user']=$user;
echo $user;
header('location:response.php');

?>