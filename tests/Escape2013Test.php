<?php
 
class Escape2013Test extends PHPUnit_Framework_TestCase
{
    public function testEcho()
    {
        $a = new Ford\Escape\Escape2013();
    $a->info();
    $this->expectOutputString('This is Ford Escape2013!<br />');
    }
}