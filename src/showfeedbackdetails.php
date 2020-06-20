<?php
//Implemented by Subham Samanta
session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Link Failure";
}
mysqli_select_db($conn,'tram');
$stmt = "select * from feedback";
$result = mysqli_query($conn,$stmt);

?>

<html>
    <head>
        <title>Passenger Feedback Details</title>
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
                margin-left: 12%;
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
        <h1><u>Passenger Feedback Details</u></h1><span id="r"><a href="admin_control.html">Go Back to Home Page</a></span>
        <?php
            $sum = 0;
            $c = 0;
            echo "<table>";
            echo "<tr><th>Tour Type</th><th>Tram Details</th><th>Rating(out of 5)</th><th>Answer 1</th><th>Answer 2</th></tr>";
            while($row = mysqli_fetch_array($result))
            {
                $sum = $sum + (int)$row['rating'];
                $c = $c + 1;
                echo "<tr>";
                echo "<td>".$row['tourtype']."</td>";
                echo "<td>".$row['tramdetails']."</td>";
                echo "<td>".$row['rating']."</td>";
                echo "<td>".$row['q1']."</td>";
                echo "<td>".$row['q2']."</td>";
                echo "</tr>";
            }
            $avg = $sum/$c;
            echo "</table>";
        ?>
        <br><button class="button" type="button" onclick="showavg()">Click to get average rating till date</button><br>
        <h4><span id="sh"></span><span id="s"></span></h4>
        <script>
            function showavg()
            {
                //alert("OK");
                document.getElementById('sh').innerHTML="Average Rating(Out of 5):-> ";
                document.getElementById('s').innerHTML="<?php echo number_format("$avg",2);?>";
            }
        </script>
    </body>
</html>
