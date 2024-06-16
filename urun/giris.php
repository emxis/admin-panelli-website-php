<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="./bootstrap.min.css">


    <style>
        ::placeholder{
            color: #fff !important; 
        }
    </style>
</head>
<body class="bodi">

<?php

    $bagla = new mysqli('localhost','root','','urun');
    if($bagla->connect_error) {
        echo $bagla->connect_error;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mail = $_POST['eMail']; 
        $sifre = $_POST['sifre']; 
        $sql = "select * from mail where eMail ='$mail' and sifre ='$sifre'"; 

        $sonuc = $bagla->query($sql); 

        
        if($sonuc -> num_rows > 0) {
            echo "<script>location.href = './admin.php'</script>";
        } else {
            echo "<script>alert('Email veya Şifre Yanlış Girildi.')</script>"; 
        }
    }
?>

<div class="container">
    <div class="vh-100 d-flex justify-content-center align-items-center w-100">
        <div class="girisDiv rounded-5">
            <form action="" method="post">
                <label for="mail" class="mt-4 mb-2 text-light">E-Mail : </label>
                <input type="email" name="eMail" placeholder="E-Mailinizi Girin." class="text-light bg-transparent form-control p-3 fs-6 fw-bold" id="eMail">
                <div id="email"  class="invalid-feedback">Geçerli bir e-posta adresi girin.</div>
                <label for="password" class="mt-3 mb-2 text-light">Şifre : </label>
                <input type="password" name="sifre" placeholder="Şifrenizi Girin." class="text-light form-control bg-transparent p-3 fs-6 fw-bold" id="sifre">
                <button type="submit" class="btn mt-3 text-light ozelBtn2 fw-bold">Gönder</button>
                <a href="./index.php" class="btn mt-3 text-light ozelBtn2 ms-3 fw-bold">
                    Dön
                </a>
            </form>
        </div>
    </div>
</div>

<script src="./bootstrap.min.js"></script>
</body>
</html>
