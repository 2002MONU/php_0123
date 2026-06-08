<?php

$array = [12,3,22,12,43];

$max= $array[0];

foreach ($array as $key => $value) {
    if($value>$max) {
        $max=$value;
    }
}

    echo $max;

    $number = [1,32,43,43];

    $min = $number[0];

    for($i = 0;$i < count($number);$i++) {
        if($number[$i]<$min) {
            $min=$number[$i];
        }
    }

    echo $min;