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
                margin-top: 5%;
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
            .button
            {
                background-color: blue;
                color: whitesmoke;
                padding: 15px 32px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
        <h1><u>Unreserved Ticket Details</u></h1><span id="r"><a href="admin_control.html">Go Back to Home Page</a></span>
        <?php
            $sum = 0.00;
            echo "<table>";
            echo "<tr><th>Ticket Id</th><th>Ticket Sold Date</th><th>Fare(Rs.)</th>";
            while($row = mysqli_fetch_array($result))
            {
                $sum = $sum + (double)$row['fare'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['fare']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <br><button class="button" type="button" onclick="showtotal()">Click to get total fare till date</button><br>
        <h4><span id="sh"></span><span id="s"></span></h4>
        <script>
            function showtotal()
            {
                //alert("OK");
                document.getElementById('sh').innerHTML="RS::";
                document.getElementById('s').innerHTML="<?php echo "$sum";?>.00";
            }
        </script>
    </body>
</html>
