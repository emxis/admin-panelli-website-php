<style>
    .fiyatHover {
        transition: 0.3s ease-in-out !important;
    }

    .fiyatHover:hover {
        margin-top: -1.5rem !important;
    }
</style>
<h2 class="display-3 fw-bold mt-5 text-center my-4 mb-5">Fiyatlardırma</h2> 

<script>
    const satinAl = () => {
        alert('SATIN ALINDI!.. 1-2 GÜN SONRA EVİNİZE GELECEKTİR ;)');
    }
</script>
<div class="row">
    <?php
    include('./bagla.php');
    for ($i = 1; $i <= 3; $i++) {
        $sonuc = $bagla->query("SELECT * FROM fiyat WHERE id=$i");
        if ($sonuc->num_rows > 0) {
            $rowum = $sonuc->fetch_assoc();

            $fiyatSecenek = $rowum['fiyatSecenek'];
            $ozelligi1 = $rowum['ozelligi1'];
            $ozelligi2 = $rowum['ozelligi2'];
            $ozelligi3 = $rowum['ozelligi3'];
            $ozelligi4 = $rowum['ozelligi4'];
            $fiyati = $rowum['fiyati'];
            $secenekAlt = $rowum['secenekAlt'];

            echo "
            <div class='col-md-4'>
                <div class='card text-center fiyatHover'>
                    <div class='card-header fs-4'>
                        $fiyatSecenek
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>$secenekAlt</h5>
                        <p class='card-text'>
                            $ozelligi1 <br>
                            $ozelligi2 <br>
                            $ozelligi3 <br>
                            $ozelligi4
                        </p>
                        <a href='#' class='btn ozelBtn fw-bold' style='font-style: italic;' onclick='satinAl()'>$fiyati TL</a>
                    </div>
                </div>
            </div>";
        }
    }
    ?>

</div>
