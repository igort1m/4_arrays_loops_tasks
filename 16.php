<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $v) {
    if ($v <9) {
        echo "$v,<br>";
    }
    if ($v == 9) {
        echo "$v<br>";
    }
}
