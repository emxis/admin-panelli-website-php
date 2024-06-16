<?php
$baglanti = new mysqli("localhost", "root", "", "urun");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $baslik = $_POST['baslik'];
    $altBaslik = $_POST['altBaslik'];
    $img = $_POST['img'];

    for ($i = 1; $i <= 7; $i++) {
        ${'ozellik' . $i} = $_POST["ozellik" . $i];
    }

    $sql = "UPDATE ozellikler SET baslik='$baslik', altBaslik='$altBaslik', img='$img', ozellik1='$ozellik1', ozellik2='$ozellik2', ozellik3='$ozellik3', ozellik4='$ozellik4', ozellik5='$ozellik5', ozellik6='$ozellik6', ozellik7='$ozellik7' WHERE id=1";

    if ($baglanti->query($sql)) {
        echo "<script>alert('Güncelleme Tamamlandı.'); location.href = '../admin.php'</script>";
    } else {
        echo "Bir hata yaşandı: $sql , " . $baglanti->error;
    }
}

?>
