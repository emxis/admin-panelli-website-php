<?php
include('./numrows/ozelliklerRow.php');


?>
<h2 class='text-center display-4 fw-bold'><?php echo $baslik;?></h2>
<div class='row mx-auto'>
    <div class='col g-5'>
        <br>
        <h2><?php echo $altBaslik;?></h2>
        <br>

        <ul>
            <li>İşlemci : <?php echo $ozellik1?></li>
            <br>
            <li>Ekran: <?php echo $ozellik2?></li>
            <br>
            <li>Hafıza: <?php echo $ozellik3?></li>
            <br>
            <li>Arka Kamera: <?php echo $ozellik4?></li>
            <br>
            <li>Ön Kamera: <?php echo $ozellik5?></li>
            <br>
            <li>Pil Ömrü: <?php echo $ozellik6?> </li>
            <br>
            <li>İşletim Sistemi: <?php echo $ozellik7?></li>
            <br>
        </ul>
    </div>
    <div class='col'>
        <img src='./foto/<?php echo $img?>' class='ozelWidth2' alt='iPhone X'>
    </div>
</div>
