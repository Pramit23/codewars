<?php

function solution(array $numbers): int 
{
    while(($max = max($numbers)) !== ($min=min($numbers))){
        $value = $max - $min;
        $position = array_search($max, $numbers);
        $numbers[$position] = $value;
    }

    return array_sum($numbers);
}

echo solution([3, 31, 113, 499, 1009, 1987, 9973, 10007, 104759, 1299899, 15487469]);