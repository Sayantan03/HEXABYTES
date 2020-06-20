<?php
//Implemented by Subham Samanta
    session_start();

    $date1 = $_POST['date1'];
    $fare = $_POST['fareprint'];
    $category = $_POST['category'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $nop = $_POST['nop'];
    
    //echo $fare;

    $_SESSION['date1'] = $date1;
    $_SESSION['fare'] = $fare;
    $_SESSION['category'] = $category;
    $_SESSION['source'] = $source;
    $_SESSION['destination'] = $destination;
    $_SESSION['nop'] = $nop;

?>

<!Doctype html>
<html>
    <head>
        <title>Payment</title>
        <style>
            #m
            {
                padding-top: 60px;
                background-color:#ff9900;
                text-align:center;
                padding-bottom: 60px;
            }
            #fb
            {
                z-index: 1;
                /*background-color: honeydew;*/
                background-color: #ff9900;
                width: 320px;
                margin-left: 100px;
                margin-top: 200px;
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
            #c
            {
                text-align: center;
            }
            body
            {
                background-image: url('bgp3.jpg');
            }
        </style>
    </head>
    <body>
        <div id="fb">
            <h1>Enter your Payment Details</h1>
            <h2>Your amount is::<?php echo $fare;?></h2>
            <form action="Payment_Validate.php" method="POST">
                <table style="margin-left:auto;margin-right:auto;">
                    <tr><td>Name on Card</td><td><input type="text" name="cname" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" title="Invalid Name" required></td></tr>
                    <tr><td>Card Number</td><td><input type="text" name="cno" id="cno" maxlength="16" minlength="16" pattern="[0-9]{16}" title="Invalid Credentials" required></td></tr>
                    <tr><td>Expiry Date</td><td><input type="month" name="ed" title="Invalid Credentials" required></td></tr>
                    <tr><td>CVV</td><td><input type="text" name="cvv" id="cvv" maxlength="3" minlength="3" pattern="[0-9]{3}" title="Invalid Credentials" required></td></tr>
                </table>
                <input type="submit" value="Proceed to Pay">
            </form>
        <div>
        <!--<script>
            function myvalidate()
            {
                var cn = document.getElementbyId("cno");
                var cvv = document.getElementbyId("cvv");
                var cnl = cn.tostring().length;
                if(cnl === "16" /*&& cvv.length == "3"*/)
                {
                    alert("Payment Successful.Proceeding to Ticket Page");
                    return true;
                }
                else
                {
                    alert("Wrong Card Number or CVV");
                    return false;
                }
            }
        </script>-->
    </body>
</html>
