
<?php
//Implemented by Subham Samanta
    class unreserved_ticket
    {
        public $date1;
        public $fare;
        public $category;
        public $source;
        public $destination;
        public $nop;
        /*function __construct($date1,$fare,$category,$source,$destination)
        {
            $this->date1 = $date1;
            $this->fare = $fare;
            $this->category = $category;
            $this->source = $source;
            $this->destination = $destination;
        }*/
        function updateTicketSold($date1,$fare,$category,$source,$destination,$nop)
        {
            $this->date1 = $date1;
            $this->fare = $fare;
            $this->category = $category;
            $this->source = $source;
            $this->destination = $destination;
            $this->nop = $nop;
            $conn = new mysqli('localhost','root');

            if(!$conn)
            {
                echo "Fail";
                return false;
            }

            mysqli_select_db($conn, 'tram');

            $stmt = "insert into unreserved_ticket(date, fare) values('$this->date1','$this->fare')";
            mysqli_query($conn, $stmt);
            return true;
        
        }
}
