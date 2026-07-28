<?php

$arr  = [1,2,3,5];
$n =5;

for($i=1;$i<=$n;$i++){
    $found = false;

    foreach($arr as $num){
        if($num == $i){
            $found = true;
            break;
        }
    }
    if(!$found){
        echo $i;
        break;
    }
}