<?php

$array = array(12, 21, 12, 23, 43, 43, 44, 555, 66, 5, 44, 43, 2, 21, 21);

$count = count($array);
$unique = [];



for ($i = 0; $i < $count; $i++) {
    $isDuplicate = false;

    for ($j = 0; $j < count($unique); $j++) {
        if ($array[$i] === $unique[$j]) {
            $isDuplicate = true;
            break;
        }
    }

    if (!$isDuplicate) {
        $unique[] = $array[$i];
        
    }
}

print_r($unique);