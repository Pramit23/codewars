<?php

class SquarePerimeterCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(perimeter(5), 80);
        $this->revTest(perimeter(7), 216);
        $this->revTest(perimeter(70), 3226062132197568);
    }
}