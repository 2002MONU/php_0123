<?php
$string = "monu";

$rev = '';

for ($i=strlen($string)-1; $i >= 0 ; $i--) { 
    $rev .=$string[$i];
}

echo $rev;