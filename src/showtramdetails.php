<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Link Failure";
}
mysqli_select_db($conn,'tram');
$stmt = "select * from tramdetails";
$result = mysqli_query($conn,$stmt);

?>

<html>
    <head>
        <title>Tram Details</title>
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
            #l
            {
                float : left;
            }
            #c
            {
                float : center;
                padding: 60px;
            }
            table
            {
                margin-top: 8%;
                margin-left: 22%;
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
        <h1><u>All Tram Details</u></h1>
        <!--<span id="l"><a href="updatetable.html">Update Table</a></span>
        <span id="c"><a href="inserttable.html">Insert New Tram</a></span>
        <span id="c"><a href="deletetable.html">Delete Tram Details</a></span>
        <span id="c"><a href="searchtable.html">Search by Source and Destination</a></span>-->
        <span id="r"><a href="admin_control.html">Go Back to Home Page</a></span>
        <?php
            echo "<table>";
            echo "<tr><th>Tram Id</th><th>Source</th><th>Destination</th><th>Start Time</th><th>End Time</th><th>Tram Category</th></tr>";
            while($row = mysqli_fetch_array($result))
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
    </body>
</html>