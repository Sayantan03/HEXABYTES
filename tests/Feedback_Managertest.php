<?php

require_once('Feedback_Manager.php');
use PHPUNIT\Framework\Testcase;

class Feedback_Managertest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testinsert()
    {
        $ob = new Feedback_Manager();
        $tourtype = "Special Booking";
        $tramdetails = "Kolkata Darshan";
        $rating = "5";
        $q1 = "AbcXyz";
        $q2 = "XyzAbc";
        
        $val = $ob->insert($tourtype,$tramdetails,$rating,$q1,$q2);
        $this->assertTrue($val != false);
    }

}