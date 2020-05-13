<?php

    //session_start();
    class tram
    {
        public $source;
        public $destination;

        /*function __construct()
        {
            
        }*/
        function displaytram($source,$destination)
        {
            $this->source = $source;
            $this->destination = $destination;
            
            $mysqli = new mysqli("localhost", "root", "", "tram");
            
            if($mysqli->connect_error) {
                exit('Could not connect');
            }

            $resultSet = $mysqli->query("select tramid from tramdetails where destination = '$this->destination'");
            return $resultSet;
        }
        /*function showtramdetails()
        {
            $mysqli = new mysqli("localhost", "root", "", "tram");

            if($mysqli->connect_error) {
                exit('Could not connect');
            }

            $resultSet = $mysqli->query("select * from tramdetails");
            return $resultSet;
        }*/
    }
?>