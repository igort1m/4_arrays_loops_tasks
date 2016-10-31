<?php
$number = "343ere3555";
$sum = 0;
if (is_int($number) == TRUE) {
    do {
        $sum += $number % 10;
    } while ($number = (int)$number / 10);
    echo $sum;
}
else echo "Не является целым числом!";