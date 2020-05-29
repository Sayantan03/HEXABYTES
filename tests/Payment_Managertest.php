<?php

require_once('Payment_Manager.php');
use PHPUNIT\Framework\Testcase;

class Payment_Managertest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testvalidate()
    {
        $ob = new Payment_Manager();
        $name = "SHUBHAM DEBNATH";
        $cno = "1122334455667788";
        $ed = "03-2021";
        $cvv = "990";
        $fare = "20000";

        $val = $ob->validate($name,$cno,$ed,$cvv,$fare);
        $this->assertTrue($val != false);
    }

}
?>