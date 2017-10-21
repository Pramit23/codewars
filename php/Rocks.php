<?php

function rocks(int $n): int {
    $ret = 0;
    for ($i = 1; $i <= strlen($n); $i++) {
        if ($i == strlen($n)) {
            $ret += $i * ($n - str_repeat('9', $i-1));
        } else {
            $ret += $i * str_pad('9', $i, '0');
            var_dump($ret);
        }
    }
    return $ret;
}
