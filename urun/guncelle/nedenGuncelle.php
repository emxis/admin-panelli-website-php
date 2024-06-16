<?php
$baglanti = new mysqli("localhost", "root", "", "urun");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $btnAciklama = $_POST['btnAciklama'];
    $baslikNeden = $_POST['baslikNeden'];
    $yazi = $_POST['yazi'];
    $img = $_POST['img'];

    $sql = "UPDATE neden SET btnAciklama='$btnAciklama', baslikNeden='$baslikNeden', yazi='$yazi', img='$img' WHERE id=1";

    if ($baglanti->query($sql)) {
        echo "<script>alert('Güncelleme Tamamlandı.'); location.href = '../admin.php'</script>";
    } else {
        echo "Bir hata yaşandı: $sql , " . $baglanti->error;
    }
}

?>
