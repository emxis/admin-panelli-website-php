<style>

    .fotom{
        object-fit: cover;
        width: 13rem;
        height: 13rem;
    }
</style>

<div class="container">

    <h2 class="text-center display-4 mt-3 fw-bold mb-5">Kullanıcı Yorumları</h2>

    <div class="row justify-content-center">
        <?php

        $bagla = new mysqli('localhost', 'root', '', 'urun');

        if ($bagla->connect_error) {
            echo $bagla->connect_error;
        }

        $sql = 'select * from yorum';

        $sonuc = $bagla->query($sql);

        if ($sonuc->num_rows > 0) {

            while ($satir = $sonuc->fetch_assoc()) {

                $profilFoto = $satir['profilFoto'];
                $yorumYazisi = $satir['yorumYazisi'];
                $isim = $satir['isim'];

                echo "
                <div class='col-md-4'>
                    <div class='text-center'>
                        <img src='$profilFoto' alt='' class='fotom rounded-circle'>
                        <h3>                            $isim
                        </h3>
                        <p>
                        $yorumYazisi

                        </p>
                    </div>
                </div>
                ";
            }
        }
        ?>
    </div>
</div>
