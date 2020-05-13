<?php

require_once("special_pass.php");
use PHPUNIT\Framework\Testcase;

class special_passtest extends TestCase
{
    public function setUp(){}
    public function tearDown(){}

    public function testupdateTicketSold()
    {
        $ob = new special_pass();
        $user = "xyz abc";
        $bp = "Kolkata Darshan";
        $fares = "20000";
        $date1 = "2020-12-12";

        $val = $ob->updateTicketSold($user,$bp,$fares,$date1);

        $this->assertTrue($val != false);
    }
}