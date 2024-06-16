
<?php

include('./numrows/nedenRow.php');

?>
<form action="./guncelle/nedenGuncelle.php" method="post">
    <h5>Fotoğrafı Düzenle</h5>
    <input class="form-control form-control-lg" name="img" value="<?php echo $img?>" type="text">
    <h5 class="mt-4">Baslığı Düzenle</h5>
    <input class="form-control form-control-lg" name="baslikNeden" value="<?php echo $baslikNeden?>" type="text">
    <h5 class="mt-4">Yazıyı Düzenle</h5>
    <textarea name="yazi" id="" cols="30" rows="10" class="form-control"><?php echo $yazi?></textarea>
    <h5 class="mt-4">Buton Yazısını Düzenle</h5>

    <input class="form-control form-control-lg" name="btnAciklama" value="<?php echo $btnAciklama?>" type="text">

    <button type="submit" class="btn btn-outline-dark mt-3">Yazdır</button>



</form>