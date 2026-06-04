<?php

$array = [12, 21, 12, 2, 12, 11, 11, 43, 344];
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
