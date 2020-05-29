<?php

    class Payment_Manager
    {
        public $name;
        public $cno;
        public $ed;
        public $cvv;
        public $fare;

        function validate($name,$cno,$ed,$cvv,$fare)
        {
            $this->name = $name;
            $this->cno = $cno;
            $this->ed = $ed;
            $this->cvv = $cvv;
            $this->fare = $fare;

            $conn = new mysqli('localhost','root');
            if(!$conn)
            {
                return false;
            }
            else
            {
                mysqli_select_db($conn,'tram');
                $stmt = "select amount from bank where cname='$this->name' and cno='$this->cno' and ed='$this->ed' and cvv='$this->cvv'";
                $result = mysqli_query($conn, $stmt);
                $row = mysqli_fetch_array($result);
                $num = mysqli_num_rows($result);

                if($num == 1)
                {
                    $newamount = (double)$row['amount']-(double)$fare;
                    if($newamount>1000.00)
                    {
                        mysqli_select_db($conn,'tram');
                        $stmt = "update bank set amount='$newamount' where cno='$this->cno'";
                        mysqli_query($conn,$stmt);
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                else
                {
                    return false;
                }
            }
        }
    }
?>