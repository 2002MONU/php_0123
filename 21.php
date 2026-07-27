<?php

$str = 'pineapple';

$result = [];

for($i=0;$i< strlen($str);$i++){
    if(isset($result[$str[$i]])){
        $result[$str[$i]]++;
    }else{
        $result[$str[$i]]  = 1;
    }
}

print_r($result);