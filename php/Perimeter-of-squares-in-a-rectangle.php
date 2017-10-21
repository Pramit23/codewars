<?php
function perimeter($n) {
    $fib = [1, 1];
    for($i = 2 ; $i <= $n ; $i++){
        array_push($fib, array_sum(array_slice($fib, -2, 2)));
    }
    return 4*array_sum($fib);
}

print_r(perimeter(1));