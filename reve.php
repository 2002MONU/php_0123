<?php

$string = 'mom';

$length = strlen($string);

$rev = '';

while(isset($string[$length])){
    $length++;
}

for($i=$length-1;$i>=0;$i--){
    $rev .=$string[$i];
}

if($rev === $string){
    echo $string. '' .'its is a paldidrom';
}else{
    echo $string. '' .'its is not a paldidrom';
}
echo $rev;