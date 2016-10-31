<?php
$x = "";
for ($i = 1; $i <= 9; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $x .= $i;
    }
    echo $x."<br>";
    $x = "";
//    $j = 0;
}
