<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Link Failure";
}
else
{
    mysqli_select_db($conn,'tram');
    $stmt = "select * from tramapprove";
    $result = mysqli_query($conn,$stmt);
}
?>
<html>
    <head>
        <title>Admin</title>
        <style>
            #l
            {
                float: right; 
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
    <body style="background-color:skyblue;">
        <h1>Welcome <?php echo $_SESSION['EName'];?><span id="l"><a href="admin_login.html">Logout</a></span></h1>
        <h2>Your Pending Request</h2>
        <?php
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Passenger Name</th><th>Booking Purpose</th><th>Date</th><th>Start Time</th><th>End Time</th></tr>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr><td>";
                echo $row['id'];
                echo "</td>";
                echo "<td>";
                echo $row['cname'];
                echo "</td>";
                echo "<td>";
                echo $row['bp'];
                echo "</td>";
                echo "<td>";
                echo $row['date1'];
                echo "</td>";
                echo "<td>";
                echo $row['stime'];
                echo "</td>";
                echo "<td>";
                echo $row['etime'];
                echo "</td></tr>";
            }
            echo "</table>";
        ?>
        <h4>Please type the booking id that is to be approved</h4>
        <form action = "approve.php" method="POST">
            <input type="text" id="id1" name="id1" placeholder="Booking Id" required><br><br>
            <input class="button" type="submit" value="Approve Booking">
        </form>
    </body>
</html>
<?php
    header("refresh: 60");
?>
