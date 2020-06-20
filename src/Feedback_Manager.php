<?php
//Implemented by Siddhartha Banerjee
class Feedback_Manager
{
    public $tourtype;
    public $tramdetails;
    public $rating;
    public $q1;
    public $q2;

    function insert($tourtype,$tramdetails,$rating,$q1,$q2)
    {
        $this->tourtype=$tourtype;
        $this->tramdetails=$tramdetails;
        $this->rating = (int)$rating;
        $this->q1 = $q1;
        $this->q2 = $q2;

        $conn = new mysqli('localhost','root');
        if(!$conn)
        {
            return false;
        }
        mysqli_select_db($conn, 'tram');
        $stmt = "insert into feedback(tourtype,tramdetails,rating,q1,q2) values('$this->tourtype','$this->tramdetails','$this->rating','$this->q1','$this->q2')";
        mysqli_query($conn, $stmt);
        return true;
    }
}
