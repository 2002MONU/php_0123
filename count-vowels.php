<?php

  function vowelCount($string){
  	$vowels = "aeiouAEIOU";
  	$count=0;

  	$lenght = 0;

  	while(isset($string[$lenght])){
  		$lenght++;

  	}

     for($i=0;$i<$lenght;$i++){
     	if(strpos($vowels,$string[$i]) !== false){
     		$count++;
     	}
     }

     return $count;
  }


  $inputString = "Sunil";

  $voewslCounts = vowelCount($inputString);

  echo $voewslCounts;
?>