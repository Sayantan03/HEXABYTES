<?php
    session_start();
?>
<!Doctype html>
<html>
    <head>
        <title>Print_Ticket</title>
        <style>
            table,td,tr{
                border: 1px solid black;
                margin-left:320px;
                font-size:20px;
                margin-top:80px
            }
            #r{
                float:right;
            }
        </style>
    </head>
    <body style="text-align:center;">
        <h1>Your ticket details</h1><span id="r"><a href="Welcome_Page.html">Go Back</a></span>
        <h2>(Please Take a Screenshot and Carry it while travelling)</h2>
        <br>
        <table>
            <tr><td>Source</td><td><?php echo $_SESSION['source'];?></td></tr>
            <tr><td>Destination</td><td><?php echo $_SESSION['destination'];?></td></tr>
            <tr><td>Category</td><td><?php echo $_SESSION['category'];?></td></tr>
            <tr><td>Number of Passenger</td><td><?php echo $_SESSION['nop'];?></td></tr>
            <tr><td>Fare Rs.(INR)</td><td><?php echo $_SESSION['fare'];?></td></tr>
            <tr><td>Date of Traveling</td><td><?php echo $_SESSION['date1'];?></td></tr>
            <tr><td>Date & Time of Issue</td><td><span id="dt"></span></td></tr>
        </table>
        <h3>Have a nice and safe Journey!</h3>
        <script>
            var d = new Date();
            document.getElementById("dt").innerHTML = d;
        </script>
    </body>
</html>