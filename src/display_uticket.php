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
        <h1>Your ticket details</h1><span id="r"><a href="Unreserved_Ticket.html">Go Back</a></span>
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
