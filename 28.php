<?php

function countVowels($string){
    $count = 0;
    $vowels = 'aeiouAEIOU';

    for($i=0;$i< strlen($string);$i++){
        if(strpos($vowels,$string[$i])  !== false){
             $count++;
        }
    }

    return $count;
}

echo countVowels('Monukyar');

