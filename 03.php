<?php
$array = [2,2,43,43,4,55,543,2];

$duplicate = [];
for ($i=0; $i < count($array); $i++) { 
     for($j = $i+1;$j < count($array);$j++){
        if($array[$i] == $array[$j]){
        $isalreayd = false;
        for($k=0; $k < count($duplicate); $k++) { 
            if($duplicate[$k] == $array[$i]){
                $isalreayd = true;
                break;
            }
        }

        if(!$isalreayd){
            $duplicate[] = $array[$i];
        }
        break;
     }
}
}
print_r($duplicate);


