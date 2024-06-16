<?php

include('./bagla.php');
$sonuc = $bagla->query('select * from enust where id = 1');

if($sonuc->num_rows>0){
    $rowum = $sonuc->fetch_assoc();
    $img = $rowum['img'];
    $slogan = $rowum['slogan'];
    $btnYazi = $rowum['btnYazi'];
    $telefon = $rowum['telefon'];
}
?>