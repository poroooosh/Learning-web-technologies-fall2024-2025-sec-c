<?php

echo "Enter the amount: ";
$amount = trim(fgets(STDIN));


if (is_numeric($amount)) {
    $vat = $amount * 0.15;
    echo "The VAT (15%) on $amount is: $vat\n";
} else {
    echo "Invalid input!\n";
}
?>
