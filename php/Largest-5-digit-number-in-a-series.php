<?php

function solution(string $s): int
{
    
    $numbers = [];
    $maxLoop = strlen($s) - 5;
    
    for ($i = 0; $i<=$maxLoop; $i++) {
        $numbers[] = (int)substr($s, $i, 5);
    }
    
    
    return max($numbers);
}
