<?php

session_start();

$id = $_POST['id1'];
$id = (int)$id;

$conn = new mysqli('localhost','root');

if(!$conn)
{
    echo "Link Failure";
}
else
{
    mysqli_select_db($conn,'tram');
    $stmt = "insert into approve select * from tramapprove where id='$id'";
    mysqli_query($conn,$stmt);

    $stmt = "select * from tramapprove where id='$id'";
    $result = mysqli_query($conn,$stmt);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        $row = mysqli_fetch_array($result);
        $bp = $row['bp'];
        $date = $row['date1'];
        $stime = $row['stime'];
        $etime = $row['etime'];

        $stmt = "delete from tramapprove where bp='$bp' and date1='$date' and stime='$stime' and etime='$etime'";
        mysqli_query($conn,$stmt);

        echo "Approve for the date::$date for $bp is done.";
    }
    else
    {
        echo '<script>alert("No such Booking ID exists.Please check again")
        window.location = "admin.php"</script>';
    }
}
?>
<html>
    <body style="background-color:skyblue;">
        <br><a href="admin.php">Click here to check other pending approval</a>
    </body>
</html>
