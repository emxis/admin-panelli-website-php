<?php


$bagla = new mysqli('localhost','root','','urun');
if($bagla->connect_error){
    echo $bagla->connect_error;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
   


    $sql = "insert into yorum (profilFoto, isim, yorumYazisi) values (?,?,?)";
    $sonuc = $bagla->prepare($sql);

    $sonuc->bind_param("sss",$profilFoto,$isim,$yorumYazisi);

    $isim=$_POST['isim'];
    $profilFoto=$_POST['profilFoto'];
    $yorumYazisi=$_POST['yorumYazisi'];

    $sonuc->execute();


    if($sonuc->affected_rows>0){
        echo "<script>alert('Yorumunuz Başarıyla Yapıldı!'); location.href = './index.php'</script>";
    }
    else{
        echo "Hata İle Karşılaşıldı: $baglan->error";
    }

    $sonuc->close();
    $bagla->close();
}
?>