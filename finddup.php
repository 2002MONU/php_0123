<?php

$array = [12,32,45,65,78,87,87,78];

$count = count($array);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$j] == $array[$i]) {
            print_r($array[$i]);
            break;
        }
    }
}