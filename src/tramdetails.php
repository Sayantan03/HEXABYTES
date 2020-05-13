<?php

    session_start();
    
    $mysqli = new mysqli("localhost", "root", "", "tram");

    if($mysqli->connect_error) 
    {
        exit('Could not connect');
    }
    
    $resultSet = $mysqli->query("select * from tramdetails");
            

?>
<html>
    <head>
        <title>Tram Details</title>
        <style>
            table{
                border : 1px solid;
                margin-top: 120px;
                margin-left:320px;
                text-align:center;
                margin-bottom:120px;
            }
            td
            {
                border : 1px solid;
            }
        </style>
    </head>
    <body>
        <br>
        <br>
        <h1 style="text-align:center">TODAY'S TRAM SCHEDULE</h1>
        <?php
            echo "<table>";
            echo "<tr>";
            echo "<td>Tram Id</td>";
            echo "<td>Source</td>";
            echo "<td>Destination</td>";
            echo "<td>Expected Departure Time</td>";
            echo "<td>Expected Arrival Time</td>";
            echo "<td>Tram Category</td>";
            echo "</tr>";
            while($row = $resultSet->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['tramid']."</td>";
                echo "<td>".$row['source']."</td>";
                echo "<td>".$row['destination']."</td>";
                echo "<td>".$row['starttime']."</td>";
                echo "<td>".$row['endtime']."</td>";
                echo "<td>".$row['category']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
       <h4 style="text-align:center">It is expected schedule to know actual schedule click <a href="live.html">track tram</a> option</h4> 
    </body>
</html>