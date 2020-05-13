<?php

    //session_start();
    class special_pass
    {
        public $user;
        public $bp;
        public $fares;
        public $date1;

        /*function __construct($user,$bp,$fares,$date1)
        {
            $this->user = $user;
            $this->bp = $bp;
            $this->fares = $fares;
            $this->date1 = $date1;
        }*/
        function updateTicketSold($user,$bp,$fares,$date1)
        {
            $this->user = $user;
            $this->bp = $bp;
            $this->fares = $fares;
            $this->date1 = $date1;
            $conn = new mysqli('localhost','root');

            if(!$conn)
            {
                echo "Fail";
                return false;
            }

            mysqli_select_db($conn, 'tram');

            $stmt = "insert into special_ticket(name, purposeofthebooking, fare, date) values('$this->user','$this->bp','$this->fares','$this->date1')";
            mysqli_query($conn, $stmt);
            return true;

        }
    }
?>