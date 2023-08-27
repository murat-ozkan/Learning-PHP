<?php

    $maasAli = 20000;
    $maasMehmet = 25000;
    $maasVolkan = 30000;

    $vergiOrani1= 0.27;
    $vergiOrani2 = 0.35;
    
    echo $maasAli - ($maasAli * $vergiOrani1);
    echo "<br>";
    echo $maasMehmet - ($maasMehmet * $vergiOrani1);
    echo "<br>";
    echo $maasVolkan - ($maasVolkan * $vergiOrani2);
?>