<?php
    //Implemented by Siddhartha Banerjee  
    //session_start();

    class passenger
    {
        public $name;
        public $pass;
        public $phone;
        public $email;

        /*function __construct($email,$pass)
        {
            $this->email = $email;
            $this->pass = $pass;
        }*/
        function setdetails($name,$phone,$email,$pass)
        {
            $this->phone = $phone;
            $this->name = $name;
            $this->email = $email;
            $this->pass = $pass;
        }
        function updatedetails()
        {
            $conn = new mysqli('localhost','root');
            if(!$conn)
            {
                echo "Fail";
                return false;
            }

            mysqli_select_db($conn, 'tram');

            $stmt = "insert into passenger(name, phone, email, password) values('$this->name','$this->phone','$this->email','$this->pass')";
            mysqli_query($conn, $stmt);

            return true;
            //echo "Registration done. Close this page and go back to login page and relogin";

        }
        function validatedetails($email,$pass)
        {
            $this->email = $email;
            $this->pass = $pass;
            $con = mysqli_connect('localhost','root');
            if(!$con)
            {
                echo "Error";
                return 0;
            }
            mysqli_select_db($con, 'tram');


            $q = "select * from passenger where email = '$this->email' && password = '$this->pass' ";

            $result = mysqli_query($con, $q);

            $num = mysqli_num_rows($result);

            return $num;
        }
    }
?>
