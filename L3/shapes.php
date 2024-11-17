<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo " \n";
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
