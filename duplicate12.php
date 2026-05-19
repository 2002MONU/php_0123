<?php

$array = array(12,12,32,43,45,87);

$n = count($array);
$duplicate = [];

for ($i = 0; $i < $n; $i++) { 
    $isDuplicate = false;

    for ($j = 0; $j < count($duplicate); $j++) {
        if ($duplicate[$j] === $array[$i]) {
            $isDuplicate = true;
            break;
        }
    }

    if (!$isDuplicate) {
        $duplicate[] = $array[$i];
    }
}

print_r($duplicate);
?>