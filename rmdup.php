<?php

$array = [12, 1, 23, 24, 34, 53, 43, 23, 25, 4, 5, 65, 4, 3,3,3,3];

$unique = [];

for( $i = 0; $i < count($array); $i++ ){
    $isDuplicate = false;

    for($j =0 ;$j < count($unique);$j++ ){
        if($unique[$j] == $array[$i]){
            $isDuplicate = true;
            break;
        }
    }

    if( !$isDuplicate ){
        $unique[] = $array[$i];
    }
}

print_r($unique);