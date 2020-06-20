<?php
//Implemented by Siddhartha Banerjee
session_start();
require('Location_Manager.php');

$user = $_SESSION['user'];
$lat = $_POST['lat'];
$long = $_POST['lon'];

$ob = new Location_Manager();
$val = $ob->update($user,$lat,$long);
/*$conn = new mysqli("localhost","root");
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$user = $_SESSION['user'];
$lat = $_POST['lat'];
$long = $_POST['lon'];
echo $user;
echo $lat;
echo $long;
$stmt = "update live_location set latitude='$lat',longitude='$long' where tramid='$user'";
mysqli_query($conn, $stmt);*/
if($val)
{
    header('location:response.php');
}
else
{
    echo "Link Failure";
}

?>
