<?php
//Implemented by Siddhartha Banerjee
session_start();
require('Feedback_Manager.php');

$tt = $_POST['tt'];
if($tt=="Normal Booking")
{
    $td=(string)$_POST['TramType'].",".(string)$_POST['route'];
}
if($tt=="Special Booking")
{
    $td=$_POST['BookingPurpose'];
}
$rating = $_POST['rate'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];

/*echo $tt;
echo $td;
echo $rating;
echo $q1;
echo $q2;*/

$ob = new Feedback_Manager();
$val = $ob->insert($tt,$td,$rating,$q1,$q2);

if($val)
{
    header('location:Feedback_Response.html');
}
else
{
    echo "Link Failure";
}
/*$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$rating = $_POST['rate'];
$suggestion = $_POST['myText'];

$stmt = "insert into feedback(rating, suggestion) values('$rating','$suggestion')";
mysqli_query($conn, $stmt);*/

?>
