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
          <img src='$satir->profilFoto' alt='' class='w-50 rounded-circle'>
          <h3>$satir->isim</h3>
          <p>
            $satir->yorumYazisi
          </p>
        </div>
      </div>
      <a href='yorumSil.php?id=$satir->id' class='btn btn-danger'>Bu Yorumu Sil</a>

      <hr>
    ";
}
?>
