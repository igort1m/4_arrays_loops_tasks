<?php
$arr = array("green"=>"зеленый", "red"=>"красный", "blue"=>"голубой");
foreach ($arr as $x=> $v) {
    $en[] = $x;
    $ru[] = $v;
}
print_r ($en);
echo '<br>';
print_r ($ru);