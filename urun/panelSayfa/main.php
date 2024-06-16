
<?php

include('./numrows/mainRow.php');
?>

<form action="./guncelle/mainGuncelle.php" method="post">
    <h5>Fotoğrafı Değiş</h5>
    <input class="form-control form-control-lg" value="<?php echo $img?>" name="img" type="text" placeholder="İmage URL" aria-label=".form-control-lg example">
    <h5 class="mt-4">Telefonu Değiş</h5>
    <input class="form-control form-control-lg" name="telefon" type="text" value="<?php echo $telefon?>" placeholder="Telefon" aria-label=".form-control-lg example">
    <h5 class="mt-4">Sloganı Değiş</h5>
    <input class="form-control form-control-lg" name="slogan" type="text" value="<?php echo $slogan?>" placeholder="Slogan" aria-label=".form-control-lg example">
    <h5 class="mt-4">Buton Yazısını Değiş</h5>
    <input class="form-control form-control-lg" name="btnYazi" value="<?php echo $btnYazi?>" type="text" placeholder="Buton Yazısı" aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-outline-dark mt-3">Yazdır</button>
</form>
