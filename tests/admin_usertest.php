<?php

require_once('admin_user.php');
use PHPUNIT\Framework\Testcase;

class admin_usertest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testinsert()
    {
        $ob = new admin_user();
        $aname = "ABC";
        $dob = "09-05-1997";
        $bg = "A+";
        $phone = "9876543210";
        $mail = "abc@gmail.com";
        $pass = "123456789"
        $job = "Tram Pilot";

        $val = $ob->insert($aname,$dob,$bg,$phone,$mail,$pass,$job);
        $this->assertTrue($val != 0);
    }

    public function testvalidate()
    {
        $ob1 = new admin_user();
        $id = "1";
        $pass = "1234";

        $num = $ob1->validate($id, $pass);

        $this->assertTrue($num != 0);
    }
}