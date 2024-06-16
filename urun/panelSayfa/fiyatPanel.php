<form action="./guncelle/fiyatGuncelle.php" method="post">
    <?php
    include('./bagla.php');

    for ($i = 1; $i <= 3; $i++) {
        $sonuc = $bagla->query("SELECT * FROM fiyat WHERE id=$i");

        if ($sonuc->num_rows > 0) {
            $rowum = $sonuc->fetch_assoc();
            $fiyatSecenek = $rowum['fiyatSecenek'];
            $secenekAlt = $rowum['secenekAlt'];
            $ozelligi1 = $rowum['ozelligi1'];
            $ozelligi2 = $rowum['ozelligi2'];
            $ozelligi3 = $rowum['ozelligi3'];
            $ozelligi4 = $rowum['ozelligi4'];
            $fiyati = $rowum['fiyati'];


            echo "
            <h4>$i. Fiyatları Düzenle</h4>
            <br>
            <h5>Düzey $i Düzenle</h5>
            <input class='form-control form-control-lg' name='fiyatSecenek_$i' value='$fiyatSecenek' type='text'>
            <h5 class='mt-4'>$i. Düzeyin Altını Düzenle</h5>
            <input class='form-control form-control-lg' name='secenekAlt_$i' value='$secenekAlt' type='text'>
            <h5 class='mt-4'>1. Özelligi Düzenle</h5>
            <input class='form-control form-control-lg' name='ozelligi1_$i' value='$ozelligi1' type='text'>
            <h5 class='mt-4'>2. Özelligi Düzenle</h5>
            <input class='form-control form-control-lg' name='ozelligi2_$i' value='$ozelligi2' type='text'>
            <h5 class='mt-4'>3. Özelligi Düzenle</h5>
            <input class='form-control form-control-lg' name='ozelligi3_$i' value='$ozelligi3' type='text'>
            <h5 class='mt-4'>4. Özelligi Düzenle</h5>
            <input class='form-control form-control-lg' name='ozelligi4_$i' value='$ozelligi4' type='text'>
            <h5 class='mt-4'>$i Fiyatı Düzenle</h5>
            <input class='form-control form-control-lg' name='fiyati_$i' value='$fiyati' type='text'>
            <hr>";
        }
    }
    ?>
    <button type="submit" class="btn btn-outline-dark mt-3">Yazdır</button>
</form>
