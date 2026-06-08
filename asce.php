<?php

$array = [12, 1, 23, 24, 34, 53, 43, 23, 25, 4, 5, 65, 4, 3];

$n = count($array);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {

        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }

    }
}

print_r($array);