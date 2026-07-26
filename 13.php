<?php
/// counts vowels

function countVowels($string){
    $vowels = "aeiouAEIOU";
   $count =0;

    for($i=0;$i< strlen($string);$i++){
        if(strpos($vowels,$string[$i]) !== false){
            $count++;
        }
    }

    return $count;
}

echo countVowels("Monu Kumar");