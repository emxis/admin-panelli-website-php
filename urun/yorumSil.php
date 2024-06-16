<?php

$bagla = new mysqli('localhost', 'root', '', 'urun');

$i = $_GET['id'];

$sonuc = $bagla->query("delete from yorum where id=$i");

if($sonuc){
    echo "<script>alert('Yorum Başarıyla Silindi.'); location.href = './admin.php'</script>";
} else {
    echo "<script>alert('Yorum Silinemedi.')</script>";
}
?>
