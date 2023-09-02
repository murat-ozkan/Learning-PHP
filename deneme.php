<?php


function yazdir($isim, $number)
{

    for ($i = 0; $i <= $number; $i++) {
        echo $isim . "<br>";
    }
}

yazdir("murat", 10);

"<br>";
# 2- Dikdörgenin alan ve çevresini hesaplayan fonksiyonu yazınız.

function rectangleArea($a, $b)
{
    $alan = $a * $b;
    echo "Bu dikdörtgenin alanı $alan olarak bulunmuştur." . "<br>";
}

rectangleArea(30, 5);



# 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız. 

"<br>";
"<br>";
function yaziTura()
{
    $sayi = rand(1, 2);
    echo $sayi . "<br>";
    if ($sayi == 1) {
        echo "Tura geldi.";
    } else {
        echo "Yazi geldi.";
    }
}

yaziTura();

"<br>";
"<br>";

function tamBolenler($sayi)
{
    $bolenler = array();

    for ($i = 1; $i < $sayi; $i++) {
        if ($sayi % $i == 0) {
            array_push($bolenler, $i);
        }
    }
    return $bolenler;
}

print_r(tamBolenler(30));
