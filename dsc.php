<?php

$array = array(22,32,34,54,23,87,43);

$n = count($array);

for ($i=0; $i <= $n-1; $i++) { 

    for ($j=0; $j <= $n-$i-1 ; $j++) { 
        if($array[$j] < $array[$j+1] ){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}



print_r($array);