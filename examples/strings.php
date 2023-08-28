<?php

    $ad = "çınar";
    $soyad = "ozkan";
    $yas = 7;

    // $mesaj = "My name is ".$ad.' '.$soyad." and ".$yas." years old.";
    $mesaj = "my name is $ad $soyad and $yas years old.";

    echo $mesaj."<br>";
    echo $mesaj[0]."<br>";  // M
    echo $mesaj[5]."<br>";  // m

    // string fonksiyonları
    echo strlen($mesaj)."<br>";
    echo str_word_count($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo strtoupper($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>";
    echo str_replace(["çınar","6"],["sadık","39"],$mesaj);

?>