<?php

include('./bagla.php');


$mySql = 'select * from ozellikler where id=1';
$sonuc= $bagla->query($mySql);
if($sonuc->num_rows>0){
    $rowum=$sonuc->fetch_assoc();

    $img = $rowum['img'];
    $altBaslik = $rowum['altBaslik'];
    $baslik = $rowum['baslik'];
    $ozellik1 = $rowum['ozellik1'];
    $ozellik2 = $rowum['ozellik2'];
    $ozellik3 = $rowum['ozellik3'];
    $ozellik4 = $rowum['ozellik5'];
    $ozellik5 = $rowum['ozellik5'];
    $ozellik6 = $rowum['ozellik6'];
    $ozellik7 = $rowum['ozellik7'];

}
?>