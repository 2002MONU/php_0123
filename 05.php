<?php
$array = [21,32,43,43,45,67,67,87];

$duplicate = [];
for ($i=0; $i < count($array); $i++) { 
    for ($j=$i+1; $j < count($array); $j++) { 
         if($array[$i] == $array[$j]){ 
            $isAlready = false;

            for ($k=0; $k < count($duplicate); $k++) { 
                if($duplicate[$k] == $array[$i]){
                    $isAlready = true;
                    break;
                }
            }

            if(!$isAlready){
                $duplicate[]  = $array[$i];
            }
            break;
        }
    }
}

print_r($duplicate);