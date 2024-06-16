<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="./bootstrap.min.css"> 
</head>
<body>
<div class="enUst">
    <?php include('./index/enUst.php'); ?> 
</div>
<nav class="navbar navbar-expand-lg sticky-top p-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Ender Phone</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Ana Sayfa</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ozellikKismi">Özellikler</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nedenKismi">Neden Biz?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#yorumKismi">Kullanıcı Yorumları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#fiyatKismi">Fiyatlandırma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#birak">Yorum Bırakın</a> 
                </li>
            </ul>
            <div class="d-flex">
                <a href="./giris.php" class="btn ozelBtn">Giriş Yap</a>
            </div>
        </div>
    </div>
</nav>

<div>
    <div class="container mt-5">
        <br id="ozellikKismi">
        <?php include('./index/ozellikler.php'); ?> 
    </div>
</div>

<div>
    <br id="nedenKismi">
    <?php include('./index/neden.php'); ?>
</div>

<div class="py-5" id="yorumKismi">
    <div class="container">
        <?php include('./yorumCikar.php');?>
    </div>
</div>

<div class="container py-5">
    <br id="fiyatKismi">
    <?php include('./index/fiyat.php');?> 
</div>

<div class="container py-5" id="birak">
    <?php include('./index/yorum.php');?>
</div>

<script src="./bootstrap.min.js"></script> 
</body>
</html>
