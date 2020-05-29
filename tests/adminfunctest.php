<?php

require_once('adminfunc.php');
use PHPUNIT\Framework\Testcase;

class adminfunctest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testinsert()
    {
        $ob = new adminfunc();
        $cname = "Abc Xyz";
        $bp = "Kolkata Darshan";
        $date = "01-06-2020";
        $stime = "14:00";
        $etime = "20:00";
        $fare = "30000";

        $val = $ob->insert($cname,$bp,$date,$stime,$etime,$fare);
        $this->assertTrue($val != 0);
    }

    public function testvalidate()
    {
        $ob1 = new adminfunc();
        $id = (int)"2";

        $num = $ob1->validate($id);

        $this->assertTrue($num != false);
    }
}