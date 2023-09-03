<?php
echo $_POST["isim"];
echo "<br>";
//<pre> etiketi, metni düzenli bir biçimde göstermek için kullanılır ve HTML tarafından önceden biçimlendirilmiş metni gösterir. Bu nedenle, print_r çıktısını <pre> etiketi içine yerleştirerek düzgün bir görünüm elde edebilirsiniz:
echo "<pre>";
print_r($_POST);
echo "</pre>";

// veride sağda solda boşluk varsa
$isim = trim($_POST["isim"]);
$soyisim = trim($_POST["soyisim"]);
echo $isim . "<br>";
echo $soyisim . "<br>";
