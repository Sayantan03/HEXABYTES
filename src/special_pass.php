<?php
//Implemented by Siddhartha Banerjee
    //session_start();
    class special_pass
    {
        public $id;
        public $fare;

        /*function __construct($user,$bp,$fares,$date1)
        {
            $this->user = $user;
            $this->bp = $bp;
            $this->fares = $fares;
            $this->date1 = $date1;
        }*/
        function updateTicketSold($id,$fare)
        {
            $this->id=(int)$id;
            $this->fare = (string)$fare;
            $conn = new mysqli('localhost','root');

            if(!$conn)
            {
                echo "Fail";
                return false;
            }

            mysqli_select_db($conn, 'tram');

            $stmt = "insert into special_ticket(id, fare) values('$this->id','$this->fare')";
            mysqli_query($conn, $stmt);
            return true;

        }
    }
?>
