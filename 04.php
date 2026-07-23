<?php
//  remove duplicate 
$array  = [12,32,43,54,54,43,23,43];
$duplicate = [];

for ($i=0; $i < count($array); $i++) { 
    for ($j=$i+1; $j < count($array); $j++) { 
        if($array[$i] == $array[$j]){

        $isAlready = true;

        for ($k=0; $k < count($duplicate) ; $k++) { 
            if($duplicate[$k] == $array[$i]){
                $isAlready = false;
                break;
            }
        }

        if(!$isAlready){
            $duplicate[] = $array[$i];
        }
        break;
        }
    }
}
