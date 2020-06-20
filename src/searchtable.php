<?php
//Implemented by Subham Samanta
session_start();
require('admin_control.php');

$source = $_POST['src'];
$destination = $_POST['des'];

$ob = new admin_control();

$result = $ob->searchdb($source,$destination);

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
            #r
            {
                padding-top:10px;
                float: right;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <h1><u>Searched Tram Details</u><span id="r"><a href="searchtable.html" style="text-decoration:none;">Back</a></span></h1> 
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
