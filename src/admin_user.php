<?php

class admin_user
{
    public $id;
    public $aname;
    public $dob;
    public $bg;
    public $phone;
    public $mail;
    public $pass;
    public $job;
    function insert($aname,$dob,$bg,$phone,$mail,$pass,$job)
    {
        $this->aname=$aname;
        $this->dob=$dob;
        $this->bg=$bg;
        $this->phone=$phone;
        $this->mail=$mail;
        $this->pass=$pass;
        $this->job=$job;

        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return 0;
        }
        else
        {
            mysqli_select_db($conn,'tram');
            $stmt = "insert into admin_details(aname,dob,bg,phone,mail,pass,job) values('$this->aname','$this->dob','$this->bg','$this->phone','$this->mail','$this->pass','$this->job')";
            mysqli_query($conn,$stmt);
            $id = $conn->insert_id;
            return $id;
        }
    }
    function validate($id,$pass)
    {
        $this->id = $id;
        $this->pass = $pass;
        
        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return "Error";
        }
        else
        {
            mysqli_select_db($conn,'tram');
            $stmt = "select * from admin_details where id='$this->id' and pass='$this->pass'";
            $result = mysqli_query($conn,$stmt);
            $row = mysqli_fetch_array($result);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                $_SESSION['EName'] = $row['aname'];
                return $row['job'];
            }
            else
            {
                return "Error";
            }
        }
    }
    
}

/*$myObj->name = $_SESSION['Ename'];
$myJSON = json_encode($myObj);
echo $myJSON;*/
//echo $_SESSION['EName'];

?>
