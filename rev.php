<?php

$string = "HANNAH";

$reversed = ""; // no space here

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

echo "Reversed string: $reversed <br>";

if ($string == $reversed) {
    echo "This is a palindrome: $string";
} else {
    echo "This is not a palindrome: $string";
}

?>