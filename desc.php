<?php
$array = array(1,32,44,23,43,54,34);

$n = count($array);

for($i=0;$i<$n;$i++){
    for($j=0;$j<$n-$i-1;$j++){
        if($array[$j] < $array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}

echo "<pre>";
print_r($array);
echo "</pre>";
?>