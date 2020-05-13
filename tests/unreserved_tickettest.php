<?php

require_once("unreserved_ticket.php");
use PHPUNIT\Framework\Testcase;

class unreserved_tickettest extends Testcase
{   
    public function setUp(){}
    public function tearDown(){}

    public function testupdateTicketSold()
    {    
        $ut = new unreserved_ticket();
        $date1 = "2020-12-12";
        $fare = "20";
        $category = "AC";
        $source = "Esplanade";
        $destination = "Khidirpore";
        $nop="1";

        $val = $ut->updateTicketSold($date1, $fare, $category, $source, $destination,$nop);

        $this->assertTrue($val != false);
    }
}