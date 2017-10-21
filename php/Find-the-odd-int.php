<?php
function findIt(array $seq)
{
    $hashMap = [];
    foreach($seq as $val){
        if(array_key_exists($val, $hashMap)){
            $hashMap[$val]++;    
        }else{
            $hashMap[$val] = 1;
        }
    }

    foreach($hashMap as $key => $val){
        if( $val%2 == 1){
            return $key;
        }
    }

    return null;
}


print_r(findIt([1,1,2,-2,5,2,4,4,-1,-2,5]));