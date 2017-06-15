<?php

function tribonacci($signature, $n) {

    for($i = $n - 3 ; $i > 0 ; $i--){
        $signature[] = array_sum(array_slice($signature, -3));
    }
    return array_slice($signature, 0, $n);

}
