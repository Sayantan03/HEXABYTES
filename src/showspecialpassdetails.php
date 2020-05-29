<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Link Failure";
}
mysqli_select_db($conn,'tram');
$stmt = "select * from approve where id in (select id from special_ticket)";
$result = mysqli_query($conn,$stmt);

?>

<html>
    <head>
        <title>Special Pass Details</title>
        <style>
            body
            {
                margin: 0px;
                text-align: center;
            }
            #r
            {
                float : right;
            }
            table
            {
                margin-top: 8%;
                margin-left: 18%;
                padding: 40px;
                border: 1px solid;
                border-radius: 10px;
            }
            td,th
            {
                border: 1px solid;
                color: black;
                font-weight: bold;
                text-align: center;
                font-size : 20px;
            }
        </style>
    </head>
    <body>
        <h1><u>Special Booking Details</u></h1><span id="r"><a href="admin_control.html">Go Back to Home Page</a></span>
        <?php
            echo "<table>";
            echo "<tr><th>Ticket Id</th><th>Passenger Name</th><th>Booking Purpose</th><th>Booking Date</th><th>Start Time</th><th>End Time</th><th>Fare(Rs.)</th>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['cname']."</td>";
                echo "<td>".$row['bp']."</td>";
                echo "<td>".$row['date1']."</td>";
                echo "<td>".$row['stime']."</td>";
                echo "<td>".$row['etime']."</td>";
                echo "<td>".$row['fare']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>