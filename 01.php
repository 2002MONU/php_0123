<?php

// remove duplicate
$array = [2,2,43,43,4,55,543,2];

$unique = [];

for ($i=0; $i < count($array); $i++) { 
    $isDuplicate = false;

    for ($j=0; $j < count($unique) ; $j++) { 
        if($array[$i] == $unique[$j]){
            $isDuplicate = true;
            break;
        }
    }

    if(!$isDuplicate){
        $unique[] = $array[$i];
    }
}

print_r($unique);