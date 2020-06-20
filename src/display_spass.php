<?php
//Implemented by Siddhartha Banerjee
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
                /*background-size: cover;*/
                width: 550px;
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
            table
            {
                margin : 40px;
                border-radius:10px;
            }
            #confirm{
                display: none;
                background-color: whitesmoke;
                border: 1px solid #aaa;
                position: fixed;
                width: 500px;
                height: 100px;
                left: 50%;
                margin-left: -250px;
                padding: 6px 8px 8px;
                box-sizing: border-box;
                text-align: center;
                border-radius: 10px;
                opacity: 0.8;
            }
            #confirm button
            {
                background-color: blue;
                display: inline-block;
                border-radius: 5px;
                border: 1px solid #aaa;
                padding: 5px;
                text-align: center;
                width: 80px;
                cursor: pointer;
            }
            #confirm .message {
                text-align: left;
            }
        </style>
    </head>
    <body style="text-align:center;" onload='functionConfirm("Do you like to give feedback?", function yes(){
        window.open("feedback_app.html")
    }, function no()
    {
        //alert("no")
    });'>
        <div id="confirm">
            <div style="text-align: center; padding-bottom: 20px;"class="message"></div>
            <button class="yes">Yes</button>
            <button class="no">No</button>
        </div>
        <div id ="h">
            <br>
            <h1>Your ticket details</h1><span id="r"><a href="Special_booking.html"><font style="color:white">Go Back</font></a></span>
        </div>
        <div id="fb">
        <table>
            <tr><td>Name</td><td><?php echo $_SESSION['cname'];?></td></tr>
            <tr><td>Booking Purpose</td><td><?php echo $_SESSION['bp'];?></td></tr>
            <tr><td>Fare Rs.(INR)</td><td><?php echo $_SESSION['fares'];?></td></tr>
            <tr><td>Date of Issue</td><td><?php echo $_SESSION['date'];?></td></tr>
            <tr><td>Trip Start Time</td><td><?php echo $_SESSION['stime'];?></td></tr>
            <tr><td>Trip End Time</td><td><?php echo $_SESSION['etime'];?></td></tr>
        </table>
        <h1>Wish You a Happy and Safe Journey</h1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            var d = new Date();
            document.getElementById("dt").innerHTML = d;
            function functionConfirm(msg, myYes, myNo)
            {
                var confirmBox = $("#confirm");
                confirmBox.find(".message").text(msg);
                confirmBox.find(".yes,.no").unbind().click(function(){
                    confirmBox.hide();
                });
                confirmBox.find(".yes").click(myYes);
                confirmBox.find(".no").click(myNo);
                confirmBox.show();
            }
        </script>
    </body>
</html>
