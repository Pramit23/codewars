<?php

function productFib($prod) {
    $sum = 0;
    $i = 1;
    while($sum < $prod){
        $result = twoFibs($i);
        $sum = $result[0] * $result[1];
        $i++;
    }
    return [$result[0], $result[1], ($sum == $prod)];
}

function twoFibs($num){
    $result = [0, 1];
    $num += 1;
    
    for($i = 0 ; $i < $num-2 ; $i++){
        $result[] = array_sum(array_slice($result, -2, 2));
    }
    
    return array_slice($result, -2, 2);
}