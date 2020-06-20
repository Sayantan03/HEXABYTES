<?php
//Implemented by Siddhartha Banerjee
session_start();
require('adminfunc.php');

$cname=$_POST['user'];
$bp=$_POST['bp'];
$date=$_POST['date1'];
$stime=$_POST['stime1'];
$etime=$_POST['etime1'];
$fare=$_POST['fare'];

$fare=(string)$fare;

//$_SESSION['cname']=$cname;
//$_SESSION['bp']=$bp;
//$_SESSION['date']=$date;
//$_SESSION['stime']=$stime;
//$_SESSION['etime']=$etime;
//$_SESSION['fares']=$fare;

$ob = new adminfunc();

$conn = new mysqli('localhost','root');

if(!$conn)
{
    echo "Error";
}
else
{
    mysqli_select_db($conn, 'tram');
    //$stmt = "insert into tramapprove(cname,bp,date1,stime,etime) values('$cname','$bp','$date','$stime','$etime')";
    $stmt = "select * from approve where bp='$bp' and date1='$date' and stime='$stime' and etime='$etime'";
    $result=mysqli_query($conn,$stmt);
    $num = mysqli_num_rows($result);
    //echo $num;
    if($num>0)
        echo "Booking on that time is already filled. Try some other time or date.";
    else
    {
        $val = $ob->insert($cname,$bp,$date,$stime,$etime,$fare);
        //$val = 0;
        echo nl2br("Your booking is pending. Please check it with your booking id tommorow.\nYour booking id::$val");
    }
}
?>
<html>
    <head>
        <title>Booking Approval</title>
        <style>
            body
            {
                margin: 0px;
                background-color: skyblue;
                text-align: center;
                padding-top: 20%;
                font-size: 40px;
                font-weight: bold;
                color: white;
            }
        </style>
    </head>
</html>
