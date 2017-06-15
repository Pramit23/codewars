<?php

function tribonacci($signature, $n) {
    $c = count($signature);
    if($n < 3){
        return array_slice($signature, 0, $n);
    }

    while($c < $n){
        $newNumber = $signature[$c - 3] + $signature[$c - 2] + $signature[$c - 1 ];
        array_push($signature, $newNumber);
        $c++;
    }

    return $signature;
}
