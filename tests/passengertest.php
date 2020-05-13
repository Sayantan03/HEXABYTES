<?php

require_once('passenger.php');
use PHPUNIT\Framework\Testcase;

class passengertest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testupdatedetails()
    {
        $ob = new passenger();
        $fname = "xyz abc";
        $phone = "9231457862";
        $mail = "xyz@gmail.com";
        $pass = "password@123";

        $ob->setdetails($fname,$phone,$mail,$pass);
        $val = $ob->updatedetails();

        $this->assertTrue($val != false);
    }

    public function testvalidatedetails()
    {
        $ob1 = new passenger();
        $mail="abc12@gmail.com"; 
        $pass = "Abcde@234";

        $num = $ob1->validatedetails($mail, $pass);

        $this->assertTrue($num == 1);
    }
}