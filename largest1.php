<?php

$number  = [21,43,45,56,665,32,23];

$largest = $number[0];

for($i = 0;$i < count($number);$i++){
    if($number[$i] > $largest){
        $largest = $number[$i];
    }
}

echo $largest;