<?php
$id=$_GET['q'];
//$id=1;
$conn = new mysqli('localhost','root');
if(!$conn)
{
  echo "Failure";
}
mysqli_select_db($conn,'tram');
$stmt = "select * from live_location where tramid = '$id'";
$result = mysqli_query($conn,$stmt);
$row = mysqli_fetch_array($result);
/*echo $row['tramid'].",".$row['latitude'].",".$row['longitude'];
$tramid = (double)$row['tramid'];*/
$latitude = (double)$row['latitude'];
$longitude = (double)$row['longitude'];

$tramid = (double)$id;
/*$latitude = (double)"22.543434";
$longitude = (double)"88.329278";
/*$breaklat = (double)"22.563037";
$breaklon = (double)"88.358578";
$alatitude = (double)"22.565008";
$alongitude = (double)"88.350045";*/

$s = 0;
$loc=array
(
array("ESPLANADE TRAM DEPORT",22.564996,88.350093),
array("VICTORIA",22.552446,88.343748),
array("FORT WILLIAM GATE NO.3",22.54788,88.336595),
array("HASTING",22.543434,88.329278),
array("KHIDIRPORE CROSSING",22.541466,88.326147),
array("FANCY MARKET",22.540102,88.323992),
array("BABU BAZAR",22.53874,88.319267),
array("KHIDIRPORE TRAM DEPORT",22.538682,88.317652)
);
if($tramid % 2 == 0)
{
  $loc=array_reverse($loc);
  //print_r($loc);
  $s = -1;
}
$l=0;
for($x=0;$x<=7;$x++)
{
    $difflat=$loc[$x][1]-$latitude;
    $difflon=$loc[$x][2]-$longitude;
    $diff=$difflat+$difflon;
    if($tramid % 2 == 0)
    {
      if($diff > 0)
      {
        $l=$x + 1;
        break;
      }
    }
    else
    {
      if($diff < 0)
      {
        $s = -1;
        $l=$x + 1;
        break;
      }
      if($diff = 0)
      {
        $l=$x + 1;
        break;
      }
    }
    /*if(($loc[$x][1]-$latitude)>0 && ($loc[$x][2]-$longitude)>0)
    {

    }*/
}
  /*$long1 = deg2rad($longitude); 
  $long2 = deg2rad($alongitude); 
  $lat1 = deg2rad($latitude); 
  $lat2 = deg2rad($alatitude); 
    
  $dlong = $long2 - $long1; 
  $dlati = $lat1 - $lat2;
  $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);   
  $result = 2 * asin(sqrt($val));  
  $radius = 3958.756; 
  $aresult = $result * $radius;

  $diff = 5.4 - $aresult;*/
  $per = (($l+$s)/8)*100;
  /*echo $aresult."km away from destination<br>";*/
  echo "<progress value ='".$per."' max='100'%>".$per."% </progress>";
  echo "<div id='w'><span id='l'>".$loc[0][0]."</span><span id='r'>".$loc[7][0]."</span></div><br><br>";
  echo "<br><span id='w'>Crossed Station::</span>";
  for($x=0;$x<($l+$s);$x++)
  {
    echo "<br><span id='w'>".$loc[$x][0]."</span><br>";
  }
  echo "<br><span id='w'>Approching Station::<br>".$loc[($l+$s)][0]."</span><br>";
  echo "<br><span id='w'>Left Station::</span>";
  for($x=($l+$s)+1;$x<8;$x++)
  {
    echo "<br><span id='w'>".$loc[$x][0]."</span><br>";
  }
  //echo "<br>".$per;
?>
