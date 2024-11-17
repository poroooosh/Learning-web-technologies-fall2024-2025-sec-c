<?php


$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];


for ($i = 0; $i < count($array); $i++) {
    
    for ($j = 0; $j < count($array[$i]); $j++) {
        
        echo $array[$i][$j] . " ";
    }
   
    echo "\n";
}

echo"\n";


for ($i = 3; $i >= 1; $i--) { 
    for ($j = 1; $j <= $i; $j++) {  
        echo "$j ";
    }
    echo "\n"; 
}

echo"\n";

$letters = "ABCDEF";
$index = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$index++] . " ";
    }
    echo "\n";
}

?>
