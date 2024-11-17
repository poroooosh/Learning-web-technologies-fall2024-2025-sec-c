<?php

echo "Enter the first number: ";
$num1 = trim(fgets(STDIN));

echo "Enter the second number: ";
$num2 = trim(fgets(STDIN));

echo "Enter the third number: ";
$num3 = trim(fgets(STDIN));


if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
    
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: $num1\n";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: $num2\n";
    } else {
        echo "The largest number is: $num3\n";
    }
} else {
    echo "Invalid input!\n";
}
?>
