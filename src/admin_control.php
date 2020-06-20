<?php
//Implemented by Subham Samanta
class admin_control
{
    public $tramid;
    public $source;
    public $destination;
    public $starttime;
    public $endtime;
    public $category;

    function validateId($tramid)
    {
        $this->tramid = $tramid;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn,'tram');
        $stmt = "select * from tramdetails where tramid='$this->tramid'";
        $result = mysqli_query($conn,$stmt);
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

    function updatedb($tramid,$source,$destination,$starttime,$endtime,$category)
    {
        $this->tramid = $tramid;
        $this->source = $source;
        $this->destination = $destination;
        $this->starttime = $starttime;
        $this->endtime = $endtime;
        $this->category = $category;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn,'tram');
        $stmt = "UPDATE tramdetails SET source='$this->source',destination='$this->destination',starttime='$this->starttime',endtime='$this->endtime',category='$this->category' where tramid='$this->tramid'";
        mysqli_query($conn,$stmt);
        return true;
    }
    function insertdb($tramid,$source,$destination,$starttime,$endtime,$category)
    {
        $this->tramid = $tramid;
        $this->source = $source;
        $this->destination = $destination;
        $this->starttime = $starttime;
        $this->endtime = $endtime;
        $this->category = $category;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn,'tram');
        $stmt = "insert into tramdetails(tramid,source,destination,starttime,endtime,category) values '$this->tramid','$this->source','$this->destination','$this->starttime','$this->endtime','$this->category'";
        mysqli_query($conn,$stmt);
        return true;
    }
    function deletedb($tramid)
    {
        $this->tramid = $tramid;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn,'tram');
        $stmt = "delete from tramdetails where tramid='$this->tramid'";
        mysqli_query($conn,$stmt);
        return true;
    }
    function searchdb($source,$destination)
    {
        $this->source=$source;
        $this->destination=$destination;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return 0;
        }
        mysqli_select_db($conn,'tram');
        $stmt = "select * from tramdetails where source='$this->source' and destination='$this->destination'";
        $result = mysqli_query($conn,$stmt);
        return $result;
    }
}
