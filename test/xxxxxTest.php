<?php
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    function testHello()
    {
        /** 這是斷言，就像是 IF 中的等於，左邊必須等於右邊的值，否則就讓 PHPUnit 報錯 */
        $this->assertEquals('bar', 'bar');
    }
}
?>