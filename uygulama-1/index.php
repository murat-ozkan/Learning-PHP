<?php
    $kurs1_baslik = "PHP Kursu";
    $kurs1_altbaslik = "Sıfırdan İleri Seviyeye PHP ile Web Geliştirme";
    $kurs1_resim = "1.jpg";
    $kurs1_yayinTarihi = "01.01.2023";
    $kurs1_yorumSayisi = "100";
    $kurs1_begeniSayisi = "300";

    $kurs2_baslik = "Python Kursu";
    $kurs2_altbaslik = "Sıfırdan İleri Seviyeye Python ile Web Geliştirme";
    $kurs2_resim = "2.jpg";
    $kurs2_yayinTarihi = "01.01.2023";
    $kurs2_yorumSayisi = "200";
    $kurs2_begeniSayisi = "200";

    $kurs3_baslik = "Node.JS Kursu";
    $kurs3_altbaslik = "Sıfırdan İleri Seviyeye Node.JS ile Web Geliştirme";
    $kurs3_resim = "3.jpg";
    $kurs3_yayinTarihi = "01.01.2023";
    $kurs3_yorumSayisi = "300";
    $kurs3_begeniSayisi = "100";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    
    <div class="container my-3">
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="./img/<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9 card-body">
                    <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                    <p class="card-text"><?php echo $kurs2_altbaslik; ?></p>
                    <span class="badge badge-pill text-bg-primary">
                        Yorum: <?php echo $kurs2_yorumSayisi; ?>
                    </span>
                    <span class="badge badge-pill text-bg-secondary">
                        Beğeni: <?php echo $kurs2_begeniSayisi; ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="./img/<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9 card-body">
                    <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                    <p class="card-text"><?php echo $kurs3_altbaslik; ?></p>
                    <span class="badge badge-pill text-bg-primary">
                        Yorum: <?php echo $kurs3_yorumSayisi; ?>
                    </span>
                    <span class="badge badge-pill text-bg-secondary">
                        Beğeni: <?php echo $kurs3_begeniSayisi; ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="./img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9 card-body">
                    <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
                    <p class="card-text"><?php echo $kurs1_altbaslik; ?></p>
                    <span class="badge badge-pill text-bg-primary">
                        Yorum: <?php echo $kurs1_yorumSayisi; ?>
                    </span>
                    <span class="badge badge-pill text-bg-secondary">
                        Beğeni: <?php echo $kurs1_begeniSayisi; ?>
                    </span>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>