<?php
//Implemented by Siddhartha Banerjee
session_start();
require('Location_Manager.php');

$user = $_POST['user'];
$lat = $_POST['lat'];
$long = $_POST['lon'];


$ob = new Location_Manager();

$check = $ob->validId($user);

if(!$check)
{
    echo'<script>alert("No such tramid exist")
    window.location="server.html"</script>';
}
else
{
    $val = $ob->insert($user,$lat,$long);
    /*$conn = new mysqli('localhost','root');
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
    echo $user;*/
    if($val)
    {
        $_SESSION['user']=$user;
        header('location:response.php');
    }
    else
    {
        echo "Link Failure";
    }
}

?>
