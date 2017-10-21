<?php
class RankTestCases extends TestCase {
private $exstr  = "Sophia,Jacob,Isabella,Mason,Emma,William,Willaim,Olivia,Olivai,Jayden,Ava,Noah,Naoh,Emily,Michael,Abigail,Ethan,Madison,"
  ."Alexander,Mia,Aiden,Chloe,Daniel,Elizabeth,Robert,Ella,Matthew,Addison,Elijah,Natalie,Joshua,Lily,Lyli,Liam,Grace,Andrew,Samantha,"
  ."James,Avery,David,Sofia,Benjamin,Aubrey,Logan,Lagon,xxxxx,yyyyy,zzzzz";
    private function dotest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testrankBasics() {
        $this->dotest(rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4), "Benjamin");
        $this->dotest(rank("Elijah,Chloe,Elizabeth,Matthew,Natalie,Jayden", [1, 3, 5, 5, 3, 6], 2), "Matthew");
        $this->dotest(rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 8), "Not enough participants");
        $this->dotest(rank("Lagon,Lily", [1, 5], 2), "Lagon");
    }
}
