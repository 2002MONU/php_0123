<?php

function isPalindrome($string){
    $left  = 0;
    $right = strlen($string)-1;

    while($left < $right){
        if($string[$left] != $string[$right])
            {
                return false;
            }
            $left++;
            $right--;
    }

    return true;
}

$string = "Monulumar";

if(isPalindrome($string)){
    echo " yes it is palindrome";
}else{
    echo " yes it not is palindrome";
}