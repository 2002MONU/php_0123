<?php

function isPalindrome($string){
    
   $left  = 0;
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

$string = "Monukumar";

if(isPalindrome($string)){
    echo "Palindrome";
}else{
    echo "not";
}