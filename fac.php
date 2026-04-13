<?php

function factorial($n){
	if($n<=1){
	return 1;
	}else{
	return $n*factorial($n-1);
	}
}

$n = 6;

$result = factorial($n);

echo "factorial of $n is $result";

?>