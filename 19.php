<?php
$arr = array ("Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс");
$weekend = 5;
foreach ($arr as $key => $value) {
    if ($key == $weekend or $key == $weekend +1) {
        echo "<i>$value</i><br>";
    } else {
        echo $value."<br>";
    }
}
