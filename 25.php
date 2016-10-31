<?php
$arr = array();
for ($i=0; $i<=10; $i++) {
    $arr[] = rand(0, 1000);
}
echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr);
$max = max($arr);

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo "<pre>";
print_r($arr);
echo "<pre>";