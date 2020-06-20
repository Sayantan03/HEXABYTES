<?php
//Implemented by Siddhartha Banerjee
class Location_Manager
{
    public $tramid;
    public $latitude;
    public $longitude;

    function validId($tramid)
    {
        $this->tramid = $tramid;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn, 'tram');
        $stmt = "select * from tramdetails where tramid='$this->tramid'";
        $result = mysqli_query($conn, $stmt);
        $num = mysqli_num_rows($result);
        if($num==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function insert($tramid,$latitude,$longitude)
    {
        $this->tramid = $tramid;
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn, 'tram');
        $stmt = "insert into live_location(tramid,latitude,longitude) values('$this->tramid','$this->latitude','$this->longitude')";
        mysqli_query($conn, $stmt);
        return true;
    }

    function update($tramid,$latitude,$longitude)
    {
        $this->tramid = $tramid;
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        $conn = new mysqli("localhost","root");
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn, 'tram');
        $stmt = "update live_location set latitude='$this->latitude',longitude='$this->longitude' where tramid='$this->tramid'";
        mysqli_query($conn, $stmt);
        return true;
    }

    function delete($tramid)
    {
        $this->tramid = $tramid;
        $conn = new mysqli("localhost","root");
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn, 'tram');
        $stmt = "delete from live_location where tramid='$this->tramid'";
        mysqli_query($conn, $stmt);
        return true;
    }
}
?>
