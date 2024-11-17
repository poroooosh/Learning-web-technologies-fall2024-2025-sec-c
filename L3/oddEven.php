<?php

echo "Enter a number: ";


$number = trim(fgets(STDIN));


if (is_numeric($number)) {
    if ($number % 2 == 0) {
        echo "$number is Even\n";
    } else {
        echo "$number is Odd\n";
    }
} else {
    echo "Invalid input!\n";
}
?>
