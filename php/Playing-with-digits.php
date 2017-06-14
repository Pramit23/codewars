<?php

function digPow($n, $p) {
    $sum = 0;
    foreach (str_split($n) as $digit) {
        $sum += pow($digit, $p++);
    }
    return (($sum % $n)==0) ? ($sum / $n) : -1;
}

$result = digPow(89, 1);
var_dump($result);