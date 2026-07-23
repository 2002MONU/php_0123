<?php
// find duplicate
$array = [2,2,43,43,4,55,543,2];

$duplicate = [];

for ($i=0; $i < count($array) ; $i++) { 
    for ($j=$i+1; $j < count($array) ; $j++) { 
        if($array[$i]  == $array[$j]){



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