<?php
$arr = [12,32,12,243,43];

$first = $second = PHP_INT_MIN;

foreach ($arr as $num) {

      
   if($num > $first){
    $second = $first;
    $first = $num;

   }elseif($num > $second && $num !=$first){
      $second = $num;
   }
}

echo $second;