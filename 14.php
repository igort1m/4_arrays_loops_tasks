<?php
z$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $v){
    if ($v == 2 || $v == 3 || $v == 4){
        echo "Есть!";
        break;
    } else {
        echo "Нет!";
        break;
    }
}
