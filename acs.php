<?php

$array = array(1,2,2,4,3,56,7,76);

$count = count($array);

for($i=0;$i<=$count-1;$i++){
    for($j=0;$j<=$count-$i-1;$j++){
        if($array[$j] > $array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}

print_r($array);