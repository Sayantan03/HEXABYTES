<?php
//Implemented by Siddhartha Banerjee
session_start();

$rate = (int)$_POST['p'];
$ques1 = $_POST['q1'];
$ques2 = $_POST['q2'];
$sug =$_POST['q3'];

/*echo $rate;
echo $ques1;
echo $ques2;
echo $sug;*/

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo('<script>alert("Link Failure")
    window.location = "feedback_app.html"');
}
mysqli_select_db($conn,'tram');
$stmt = "insert into feedback_app(rate,ticketpurchaseproblem,userfriendly,suggestion) values('$rate','$ques1','$ques2','$sug')";
mysqli_query($conn,$stmt);
?>
<html>
    <head>
        <title>Feedback Response</title>
        <style>
            body
            {
                text-align: center;
            }
            #bg
            {
                margin:10%;
                padding: 5%;
                border: 1px solid;
                opacity: 0.9;
                border-radius: 10px;
                background-color: blue;
                color: whitesmoke;
            }
            .button
            {
                background-color: whitesmoke;
                color: blue;
                padding: 15px 32px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 15px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="bg">
        <h1>Thank You For Giving the Feedback.</h1>
        <h1>We are glad to serve you</h1>
        <h1>We wish you a happy, safe and confortable journey</h1>
        <h1>We will be happy to serve you again</h1>
        <h1><button type="button" class="button" onclick="closewin()">Close Tab</button>
        </div>
        <script>
            function closewin()
            {
                window.close();
            }
        </script>
    </body>
</html>
