<?php
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    function testHello()
    {
        $this->assertEquals('bar', 'bar');
    }
    function testLogin2() 
    {
        $this->assertEquals('xxx', 'xxx');
    }
    function testHello_Failed()
    {
        $this->assertEquals('bar', 'bars');
    }
}
?>