<?php

 $string = "Monu Kumar";

 $reversed = "";

 $length = 0;

 while(isset($string[$length])){
 	$length++;
 }

 for($i = $length -1;$i>=0;$i--){
 	$reversed .= $string[$i];
 }

 echo $reversed;

?>