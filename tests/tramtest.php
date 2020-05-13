<?php

require_once("tram.php");
use PHPUNIT\Framework\Testcase;

class tramtest extends Testcase
{
    public function testdisplaytram()
    {
        $ob = new tram();

        $source = "Esplanade";
        $destination = "Khidirpore";
        $exptram = array("12301","12313","12353","12367");

        $resultSet = $ob->displaytram($source, $destination);
        $tram = $resultSet->fetch_assoc();

        $val = array_diff($exptram,$tram);

        $this->assertTrue($val != false);
    }
}
?>