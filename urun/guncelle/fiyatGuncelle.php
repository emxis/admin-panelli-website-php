<?php
$baglanti = new mysqli("localhost", "root", "", "urun");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 3; $i++) {
        $secenekAlt = isset($_POST['secenekAlt_' . $i]) ? $_POST['secenekAlt_' . $i] : '';
        $fiyatSecenek = isset($_POST['fiyatSecenek_' . $i]) ? $_POST['fiyatSecenek_' . $i] : '';
        $fiyati = isset($_POST['fiyati_' . $i]) ? $_POST['fiyati_' . $i] : '';
        $ozelligi1 = isset($_POST['ozelligi1_' . $i]) ? $_POST['ozelligi1_' . $i] : '';
        $ozelligi2 = isset($_POST['ozelligi2_' . $i]) ? $_POST['ozelligi2_' . $i] : '';
        $ozelligi3 = isset($_POST['ozelligi3_' . $i]) ? $_POST['ozelligi3_' . $i] : '';
        $ozelligi4 = isset($_POST['ozelligi4_' . $i]) ? $_POST['ozelligi4_' . $i] : '';

        $sql = "UPDATE fiyat SET secenekAlt='$secenekAlt', fiyatSecenek='$fiyatSecenek', fiyati='$fiyati', ozelligi1='$ozelligi1', ozelligi2='$ozelligi2', ozelligi3='$ozelligi3', ozelligi4='$ozelligi4' WHERE id = $i";

        if ($baglanti->query($sql)) {
            echo "<script>alert('Güncelleme Tamamlandı.'); location.href = '../admin.php'</script>";
        } else {
            echo "Bir hata yaşandı: $sql" . $baglanti->error;
        }
    }
}

?>
