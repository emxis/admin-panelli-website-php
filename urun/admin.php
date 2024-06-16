<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="./bootstrap.min.css"> 


    <style>
        .offcanvas-body {
            padding: 20px; 
        }
        body{
            background-color: darkred;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .arkaplan{
            border: 2px solid red !important;
            margin-top: 2rem;
            transition: 250ms all !important; 
            top: 0;
        }
        .arkaplan:hover{
            position: relative !important; 
            top: 0.5rem !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="w-100 p-5 bg-dark text-light rounded-5">
                <h1 class="lead display-6 fw-bold text-center">Admin Paneli</h1>
                <div class="row">
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Ana Sayfayı Düzenle</h3>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" aria-controls="offcanvas1">
                            Düzenle
                        </button>
                        <!-- Offcanvas alanı -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas1" aria-labelledby="offcanvas1Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvas1Label">Ana Sayfa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php include "./panelSayfa/main.php";?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Özellikleri Düzenle</h3>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvas2">
                            Düzenle
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvas2Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvas2Label">Özellikler</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php include "./panelSayfa/ozel.php";?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Neden Biz Düzenle</h3>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas3" aria-controls="offcanvas3">
                            Düzenle
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas3" aria-labelledby="offcanvas3Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvas3Label">Neden Biz</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php include('./panelSayfa/nedenPanel.php');?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Fiyatları Düzenle</h3>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas4" aria-controls="offcanvas4">
                            Düzenle
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas4" aria-labelledby="offcanvas4Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvas4Label">Fiyatlar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php include('./panelSayfa/fiyatPanel.php');?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Yorumları Düzenle</h3>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas5" aria-controls="offcanvas5">
                            Düzenle
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas5" aria-labelledby="offcanvas5Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvas5Label">Yorumlar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php
                                $bagla = new mysqli('localhost', 'root', '', 'urun');

                                if ($bagla->connect_error) {
                                    echo $bagla->connect_error;
                                }

                                $sql = 'select * from yorum';
                                $sonuc = $bagla->query($sql);

                                while($satir = $sonuc->fetch_object()){
                                    echo "
                                    <div class='col-12'>
                                        <div class='text-center'>
                                            <img src='./foto/$satir->profilFoto' alt='' class='w-50 rounded-circle'>
                                            <h3>$satir->isim</h3>
                                            <p>
                                                $satir->yorumYazisi
                                            </p>
                                        </div>
                                    </div>
                                    <a href='yorumSil.php?id=$satir->id' class='btn btn-danger mx-auto d-flex'>Yorumu Sil.</a>

                                    <hr>
                                    ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 border py-4 px-5 mx-auto text-center rounded-4 arkaplan">
                        <h3 class="mb-4">Buradan Ana Sayfaya Gidebilirsiniz.</h3>
                        <a href="./index.php" class="btn btn-outline-light">Ana Sayfaya Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./bootstrap.min.js"></script>
</body>
</html>
