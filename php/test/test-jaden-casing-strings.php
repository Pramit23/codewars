<?php
// PHPUnit Test Examples:
class JadenTestCases extends TestCase
{
    public function testJadenCase() {
       $str = "How can mirrors be real if our eyes aren't real";
       $this->assertEquals(toJadenCase($str), "How Can Mirrors Be Real If Our Eyes Aren't Real");
    }
}