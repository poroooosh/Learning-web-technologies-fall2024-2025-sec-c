<?php

echo "Enter the size of the array: ";
$size = (int)fgets(STDIN);


$array = [];


echo "Enter the array elements:\n";
for ($i = 0; $i < $size; $i++) {
    echo "Element " . ($i + 1) . ": ";
    $array[] = trim(fgets(STDIN));  
}


echo "Enter the element to search: ";
$searchElement = trim(fgets(STDIN));


$found = false;
for ($i = 0; $i < $size; $i++) {
    if ($array[$i] == $searchElement) {
        $found = true;
        break;
    }
}


if ($found) {
    echo "Element '$searchElement' found at index $i.\n";
} else {
    echo "Element '$searchElement' not found in the array.\n";
}
?>
