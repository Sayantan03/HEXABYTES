<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Link Failure";
}
mysqli_select_db($conn,'tram');
$stmt = "select * from unreserved_ticket";
$result = mysqli_query($conn,$stmt);

?>

<html>
    <head>
        <title>Unreserved Ticket Details</title>
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
                margin-left: 35%;
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
        <h1><u>Unreserved Ticket Details</u></h1><span id="r"><a href="admin_control.html">Go Back to Home Page</a></span>
        <?php
            echo "<table>";
            echo "<tr><th>Ticket Id</th><th>Ticket Sold Date</th><th>Fare(Rs.)</th>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['fare']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>