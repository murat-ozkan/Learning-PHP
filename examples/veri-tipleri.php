<?php

    $urunAdi = "Iphone 15";
    echo $urunAdi." : ".gettype($urunAdi);
    echo "<br>";

    $fiyat = 4000;
    echo $fiyat." : ".gettype($fiyat);
    echo "<br>";

    $kdvOrani = 0.18;
    echo $kdvOrani." : ".gettype($kdvOrani);
    echo "<br>";

    $satistaMi = false;
    echo $satistaMi."True or False : ".gettype($satistaMi);
    echo "<br>";

    // int($kdvOrani), double($fiyat). 
    // int(false) is 0.
?>