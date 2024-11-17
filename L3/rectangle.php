<?php

echo "Enter the length of the rectangle: ";
$length = trim(fgets(STDIN));

echo "Enter the width of the rectangle: ";
$width = trim(fgets(STDIN));


if (is_numeric($length) && is_numeric($width)) {
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area of the rectangle: $area\n";
    echo "Perimeter of the rectangle: $perimeter\n";
} else {
    echo "Invalid input!\n";
}
?>
