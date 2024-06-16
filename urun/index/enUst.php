<?php
    include('./bagla.php');
    $sonuc = $bagla->query('select * from enust where id=1');

    if($sonuc->num_rows>0){
        $rowum = $sonuc->fetch_assoc();
        $img=$rowum['img'];
        $slogan=$rowum['slogan'];
        $telefon=$rowum['telefon'];
        $btnYazi=$rowum['btnYazi'];

        echo "
        <div class='container'>

            <div class='row'>
                <div class='col'>
                    <img src='$img' alt='' class='ozelWidth'>
                </div>
                <div class='col'>
                    <h1 class='display-1 fw-bold font-monospace ozelMt'>$telefon</h1>
                    <p class='ms-1'>$slogan</p>
                    <a href='#ozellikKismi' class='btn ozelBtn'>$btnYazi</a>
                </div>
            </div>
        </div>
        ";
    }
?>