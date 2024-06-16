```php
<?php
$baglanti = new mysqli("localhost", "root", "", "urun");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img = $_POST['img'];
    $slogan = $_POST['slogan'];
    $telefon = $_POST['telefon'];
    $btnYazi = $_POST['btnYazi'];

    $sql = "UPDATE enust SET img='$img', slogan='$slogan', telefon='$telefon', btnYazi='$btnYazi' WHERE id=1";

    if ($baglanti->query($sql)) {
        echo "<script>alert('Güncelleme Tamamlandı.'); location.href = '../admin.php'</script>";
    } else {
        echo "Bir sorunla karşılaşıldı: $sql , " . $baglanti->error;
    }
}

?>
