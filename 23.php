<?php
$arr = [12,23,23,24,2,12,1];

$first = $second = PHP_INT_MIN;

foreach($arr as $num){
    if($num > $first){
        $second = $first;
        $first= $num;
    }elseif($num > $second && $num!= $first){
        $second = $num;
    }
}

echo $second;