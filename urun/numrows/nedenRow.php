<?php

include('./bagla.php');

$sonuc = $bagla->query('select * from neden where id=1');

if($sonuc->num_rows>0){
    $rowum=$sonuc->fetch_assoc();

    $baslikNeden=$rowum['baslikNeden'];
    $yazi=$rowum['yazi'];
    $img=$rowum['img'];
    $btnAciklama=$rowum['btnAciklama'];

    
}
?>