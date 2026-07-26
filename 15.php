<?php

function isPalindrome($string){
    $left = 0;
    $right = strlen($string)-1;
    while($left < $right){
        if($string[$left] != $string[$right]){
            return false;
        }

        $left++;
        $right--;
    }
    return true;
}

$string = "moom";

if(isPalindrome($string)){
    echo 'its palindrome';
}else{
    echo "is not palindrome";
}