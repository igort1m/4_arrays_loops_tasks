<?php
$example=array(1, 20, 15, 17, 24, 35);
$result=0;
foreach($example as $key=>$v){
    $result += $v;
}
echo 'Сумма = '.$result;