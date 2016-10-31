<?php
$arr=array();
for ($i = 0; $i <= 3; $i++) {
    $arr[$i] = rand(1, 100);
}
echo "<pre>";
print_r($arr);
echo "<pre>";
$pr = 1;
$summ = 0;
foreach($arr as $value) {
    if ($value % 2 == 0)
        $pr *= $value;
    else $summ += $value;
}
echo 'Произведение всех четных чисел в массиве: '. $pr. "<br>";
echo "Сумма непарных и больше нуля = $summ";
