<?php
include('./numrows/ozelliklerRow.php');

?>

<form action="./guncelle/ozelGuncelle.php" method="post">
    <h5>Baslik Düzenle</h5>
    <input class="form-control form-control-lg" name="baslik" value="<?php echo $baslik?>" type="text">
    
    <h5 class="mt-4">Alt Baslik Düzenle</h5>
    <input class="form-control form-control-lg" name="altBaslik" value="<?php echo $altBaslik?>" type="text">
    
    <h5 class="mt-4">İmg Düzenle</h5>
    <input class="form-control form-control-lg" name="img" value="<?php echo $img?>" type="text">
    
    <h5 class="mt-4">Ozellik 1 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik1" value="<?php echo $ozellik1?>" type="text">
    
    <h5 class="mt-4">Ozellik 2 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik2" value="<?php echo $ozellik2?>" type="text">
    
    <h5 class="mt-4">Ozellik 3 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik3" value="<?php echo $ozellik3?>" type="text">
    
    <h5 class="mt-4">Ozellik 4 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik4" value="<?php echo $ozellik4?>" type="text">
    
    <h5 class="mt-4">Ozellik 5 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik5" value="<?php echo $ozellik5?>" type="text">
    
    <h5 class="mt-4">Ozellik 6 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik6" value="<?php echo $ozellik6?>" type="text">
    
    <h5 class="mt-4">Ozellik 7 Düzenle</h5>
    <input class="form-control form-control-lg" name="ozellik7" value="<?php echo $ozellik7?>" type="text">
    
    <button type="submit" class="btn btn-outline-dark mt-3">Yazdır</button>
</form>
