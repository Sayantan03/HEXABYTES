<?php
    session_start();
?>
<!Doctype html>
<html>
    <head>
        <title>Print_Ticket</title>
        <style>
            table, tr, td{
                border: 1px solid black;
                width 50%;
                text-align:center;
                margin-left:10px;
                font-size:30px;
                color:white;
            }
            #h
            {
                background-color: blue;
                height:120px;
            }
            h1
            {
                color:white;
            }
            body
            {
                margin:0px;
            }
            #b
            {
                background-image: url('bgp4.jpg');
            }
            #fb
            {
                z-index: 1;
                /*background-color: honeydew;*/
                background-image: url('bgp4.jpg');
                width: 400px;
                margin-left: 100px;
                margin-top: 120px;
                margin-right: 100px;
                margin-bottom: 100px;
                position: relative;
                bottom: 10px;
                padding: 10px;
                padding-left: 10px;
                border-radius: 7% ;
                color:black;
                opacity: 0.9;
                text-align: center;
            }
            body
            {
                background-color:honeydew;
            }
            #r
            {
                float:right;
            }
        </style>
    </head>
    <body style="text-align:center;">
        <div id ="h">
            <br>
            <h1>Your ticket details</h1><span id="r"><a href="Special_booking.html"><font style="color:white">Go Back</font></a></span>
        </div>
        <div id="fb">
        <table>
            <tr><td>Name</td><td><?php echo $_SESSION['user'];?></td></tr>
            <tr><td>Booking Purpose</td><td><?php echo $_SESSION['bp'];?></td></tr>
            <tr><td>Fare Rs.(INR)</td><td><?php echo $_SESSION['fares'];?></td></tr>
            <tr><td>Date of Issue</td><td><?php echo $_SESSION['date1'];?></td></tr>
        </table>
        <h1>Wish You a Happy and Safe Journey</h1>
    </body>
</html>