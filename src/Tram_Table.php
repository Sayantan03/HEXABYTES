<?php

    session_start();
    require("tram.php");

    $src=$_POST['src'];
    $des=$_POST['des'];

    $t = new tram();
    $resultSet = $t->displaytram($src,$des);
?>
    <title>Tram Selection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {margin:0;}
        .icon-bar 
        {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }
        .icon-bar a 
        {
            float: left;
            width: 16%;
            text-align: center;
            padding: 12px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
        }
        .icon-bar a:hover 
        {
            background-color: #000;
        }
        .active 
        {
            background-color: blue;
        }
        #car
        {
            float:right;
            padding-right: 0px;
            padding-left: 10px;
            padding-bottom: 0px;
            padding-top: 10px;
            /*font-size:150%;
            size: 20cm;
            font-family:Sans-Serif;
            color:white;
            text-shadow: 2px 2px 4px #000000;*/
        }
        #logo
        {
            float: left;
            margin-top: 15px ;
            padding-right: 10px;
            border-top-right-radius: 50%;
            border-bottom-right-radius: 50%;
        }
        #fb
        {
            z-index: 1;
            background-image: url('bgp4.jpeg');
            background-repeat: no-repeat;
            background-size: 800px 240px;
            width: 400px;
            margin-left: 60px;
            position: relative;
            bottom: 10px;
            padding: 10px;
            padding-left: 10px;
            color:black;
            opacity: 0.9;
            text-align: center;
            border-radius: 10px;
        }
        #ic
        {
            padding-left: 400px;
            padding-top: 25px;
            text-align: center;
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
        #sp
        {
            border-spacing: 50px 0;
        }
        #bd
        {
            background-image: url('bgp2.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            z-index: 0;
            padding-left: 30px;
            padding-right: 30px;
        }
        progress[value] {
            width: 100%;
            height: 20px;
        }
        #l
        {
            float: left;
        }
        #r
        {
            float: right;
        }
        #c
        {
            padding-left: 80px;
        }
    </style>
    <div class="icon-bar">
        <img id ="logo" src="log1.PNG" width="250px" height="80px">
        <div id="car"><img src="logo1.PNG" width="150px" height="80px"></div>
    </div>
    <div id="bd">
        <br>
        <br>
        <h2><span id="l">WHERE IS MY TRAM!!!!</span></h2><span id="r"><a href="Track_Tram.html">Go Back</a></span>
        <br>
        <h3>Please select the Tram Number</h3>
        <div id="c">
        <select name ='tram' onchange='fetchTramLocationDetails(this.value)'>
        <option value = ''>Select</option>
        <?php 
            while($row = $resultSet->fetch_assoc())
            {
                $tramid = $row['tramid'];
                echo "<option value = '$tramid'>$tramid</option>";
            }
        ?>
        </select>
        </div>
        <br>
        <br>
        <div id="txtHint">Tram info will be listed here...</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <script>
        function fetchTramLocationDetails(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "test (2).php?q="+str, true);
            xhttp.send();
        }
    </script>
