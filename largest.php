<?php

$array = [12,23,34,90,54,65,76];

$largest = $array[0];

foreach($array as $num){
    if($num > $largest){
        $largest = $num;
    }
}

echo $largest;