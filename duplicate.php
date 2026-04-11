<?php

$array = array(12, 14, 12, 12, 14, 40, 50, 50);
$unique = array();

for ($i = 0; $i < count($array); $i++) {
    $isDuplicate = false;

    for ($j = 0; $j < count($unique); $j++) {
        if ($array[$i] == $unique[$j]) {
            $isDuplicate = true;   // fixed spelling
            break;
        }
    }

    if (!$isDuplicate) {
        $unique[] = $array[$i];   // fixed array insert
    }
}

print_r($unique);

?>
