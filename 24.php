<?php
$number = 442158755745;
$countarr = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY);
print_r(array_count_values ($countarr));