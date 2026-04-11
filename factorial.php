<?php

 function factorial($num){
 if($num < 0){
    echo "Factorial is not defined for negative numbers.";
 }
  $fact =1;
   for($i=1;$i<=$num ;$i++){
       $fact *=$i;
   }
   return $fact;
 }



  $number  = 5;

  echo "Factorial of $number is: " . factorial($number);



?>