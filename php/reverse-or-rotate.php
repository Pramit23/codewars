<?php
function revRot($s, $sz) {

    if($s == null || $sz <=0)
        return "";

    $chunks = str_split($s);
    $length = (int)(count($chunks)/$sz)*$sz;
    $chunks = array_slice($chunks, 0, $length);
    $chunks = array_chunk($chunks, $sz);
    $result = "";

    foreach ($chunks as $chunk) {
        $sum = array_sum($chunk);
        $value = $sum%2==0 ? array_reverse($chunk) : rotate($chunk);
        $result .= implode("",$value);
    }

    return $result;
}

function rotate($chunk){
    array_push($chunk, $chunk[0]);
    array_shift($chunk);

    return $chunk;
}