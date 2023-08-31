<?php

    $a = 10;
    $b = 20;
    $c = 5;

    $sonuc = ($a * $b) - ($a + $b + $c);
    echo $sonuc;
    echo "</br>";

    $sonuc = ($a + $b + $c) % 3;
    echo $sonuc;
    echo "</br>";

    $sonuc = $b ** $c;
    echo $sonuc;
    echo "</br>";

    $sonuc = ($a <= 100 and $a >= 50);
    echo var_dump($sonuc);
    echo "</br>";

    $sonuc = ($a > 0 and $a % 2 == 0);
    echo var_dump($sonuc);
    echo "</br>";

?>