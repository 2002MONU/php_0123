<?php

$array = [12,23,34345,4546];
$sum = 0;
for($i=0;$i< count($array);$i++){
    $sum +=$array[$i];
}

print($sum);