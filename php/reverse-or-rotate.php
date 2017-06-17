<?php
function revRot($s, $sz) {

    if($s == null || $sz <=0)
        return "";

    $chunks = str_split($s);
    $chunks = array_chunk($chunks, $sz);
    $result = "";

    foreach ($chunks as $chunk) {

        if(count($chunk) < $sz)
            continue;

        $sum = array_sum($chunk);

        if( $sum%2==0 ){
            $value = array_reverse($chunk);
        }else{
            $last = array_shift($chunk);
            array_push($chunk, $last);
            $value = $chunk;
        }

        $result .= implode("",$value);
    }

    return $result;
}