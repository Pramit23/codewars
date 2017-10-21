<?php
class DiophEquaTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
      $this->revTest(solequa(5), [[3, 1]]);
      $this->revTest(solequa(9005), [[4503, 2251], [903, 449]]); 
    }
}