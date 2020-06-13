<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registered Page</title>
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
      .active {
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
          /*background-color: honeydew;*/
          background-color: grey;
          width: 400px;
          margin-left: 100px;
          position: relative;
          bottom: 10px;
          padding: 10px;
          padding-left: 10px;
          border-radius: 7% ;
          color:black;
          opacity: 0.9;
          text-align: center;
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
      a:link
      {
          text-decoration: none;
         /* color:black;*/
      }
      #sp
      {
          border-spacing: 50px 0;
      }
      #bd
      {
          background-image: url('handsketch_1.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          z-index: 0;
      }
      table
      {
          column-gap: 40px;
      }
      div.absolute 
      {
          position: absolute;
          bottom: 0%;
          right: 2%;
          width: 100%;
          /*height: 50px;*/
          /*border: 3px solid #73AD21;*/
      }
      h2
      {
        float : right;
      }
      h1
      {
        float: left;
      }
    </style>
  </head>
  <body onload="getLocation()">
  <div class="icon-bar">
      <img id ="logo" src="log1.PNG" width="250px" height="80px">
      <div id="car"><img src="logo1.PNG" width="150px" height="80px"></div>
      <br>
    </div>
    <div id="bd">
      <h1 style="color: whitesmoke">Welcome <?php echo $_SESSION['user']; ?></h1>
      <h2><a href="delete.php"><font style="color: whitesmoke">Stop Trip</font></a></h2>
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
      <div id="fb">
        <h3 style="color: whitesmoke">Your tram location</h3>
        <form id="myForm" action="update.php" method="POST">
          <input style="text-align: center;" type="text" id="lat" name="lat"><br>
          <input style="text-align: center;" type="text" id="lon" name="lon"><br>
          <!--<input type="submit" id="btn" value="Update" class="button" onmouseover="myFunction()">-->
        </form>
        <br>
        <br>
        </div>
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
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
          
        }
      }
      function showPosition(position) {
          document.getElementById('lat').value=position.coords.latitude;
          document.getElementById('lon').value=position.coords.longitude;
          setInterval(function(){ location.reload();},10000);
      }
      /*function myFunction()
      {
        document.getElementById("btn").click();
      }*/

      var auto_refresh = setInterval(function() { submitform(); },10000);
      function submitform()
      {
          //alert('Submitted');
          document.getElementById("myForm").submit();
      }
    </script>

  </body>
</html>
