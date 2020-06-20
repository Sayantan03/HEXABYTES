<?php
//Implemented by Siddhartha Banerjee
//session_start();

class adminfunc
{
    public $cname;
    public $bp;
    public $date;
    public $stime;
    public $etime;
    public $fare;
    public $id;

    function insert($cname,$bp,$date,$stime,$etime,$fare)
    {
        $this->cname=$cname;
        $this->bp=$bp;
        $this->date=$date;
        $this->stime=$stime;
        $this->etime=$etime;
        $this->fare=$fare;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return 0;
        }
        else
        {
            mysqli_select_db($conn,'tram');
            $stmt = "insert into tramapprove(cname,bp,date1,stime,etime,fare) values('$this->cname','$this->bp','$this->date','$this->stime','$this->etime','$this->fare')";
            mysqli_query($conn,$stmt);
            $id = $conn->insert_id;
            $stm = "update lastid set id='$id'";
            mysqli_query($conn,$stm);
            return $id;
        }
    }
    function existID($id)
    {
        $this->id=(int)$id;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        else
        {
            mysqli_select_db($conn,'tram');
            $stmt = "select id from lastid";
            $result = mysqli_query($conn, $stmt);
            $row = mysqli_fetch_array($result);
            $lid = $row['id'];
            if($this->id > $lid)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }
    function validate($id)
    {
        $this->id=(int)$id;
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        else
        {
            mysqli_select_db($conn,'tram');
            $stmt = "select * from approve where id='$id'";
            $result = mysqli_query($conn,$stmt);
            $num = mysqli_num_rows($result);
            if($num==1)
            {
                $row = mysqli_fetch_array($result);
                $_SESSION['cname']=$row['cname'];
                $_SESSION['bp']=$row['bp'];
                $_SESSION['date']=$row['date1'];
                $_SESSION['stime']=$row['stime'];
                $_SESSION['etime']=$row['etime'];
                $_SESSION['fares']=$row['fare'];
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}
?>
