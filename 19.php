<?php
$array = [12,12,23,43,21,123,232,3];
$duplicate = [];

for($i=0;$i<count($array);$i++){
    for($j=$i+1;$j< count($array);$j++){
        if($array[$i] == $array[$j]){
            $isAlready = false;

            for($k=0;$k<count($duplicate);$k++){
                if($array[$k]  == $array[$i]){
                    $isAlready = true;
                    break;
                }
            }

            if(!$isAlready){
                $duplicate[] = $array[$i];
            }
        }
    }
}

print_r($duplicate);
