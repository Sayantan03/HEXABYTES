<?php

    session_start();

    $user = $_POST['user'];
    $bp = $_POST['bp'];
    $date1 = $_POST['date1'];
    $stime1 = $_POST['stime1'];
    $etime1 = $_POST['etime1'];
    
    if($bp == "Kolkata Darshan")
    {
        $fares = "20,000.00";
    }
    elseif($bp == "Marriage Anniverssary")
    {
        $fares = "20,000.00";
    }
    elseif($bp == "Pujo Parikhama")
    {
        $fares = "30,000.00";
    }
    elseif($bp == "Birthday Party")
    {
        $fares = "35,000.00";
    }

    $_SESSION['user']=$user;
    $_SESSION['bp']=$bp;
    $_SESSION['fares']=$fares;
    $_SESSION['date1']=$date1;
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
            <h1>Your Fare(Rs.):: <?php echo $_SESSION['fares'];?></h1>
            <h1>Enter your Payment Details</h1>
            <form action="print_sticket.php" method="POST">
                <table style="margin-left:auto;margin-right:auto;">
                    <tr><td>Name on Card</td><td><input type="text" required></td></tr>
                    <tr><td>Card Number</td><td><input type="text" id="cno" minlength="16" maxlength="16" pattern="[0-9]{16}" required></td></tr>
                    <tr><td>Expiry Date</td><td><input type="date" required></td></tr>
                    <tr><td>CVV</td><td><input type="text" id="cvv" minlength="3" maxlength="3" pattern="[0-9]{3}" required></td></tr>
                </table>
                <input type="submit" value="Proceed to Pay">
            </form>
        <div>
        <!--<script>
            function validate()
            {
                var cn = document.getElementbyId("cno");
                var cvv = document.getElementbyId("cvv");

                if(cn.toString().length == "16" && cvv.toString().length == "3")
                {
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