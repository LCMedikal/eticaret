<?php
try {
    $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=ecommerce;charset=UTF8","root","root");
    // echo "test";
} catch (PDOException $hata) {
    echo "Baglanti hatasi : ".$hata->getMessage();
    die();
}

$AyarlarSorgusu = $veritabanibaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if($AyarSayisi>0){
    $siteAdi    = $Ayarlar["siteadi"];
    $siteTitle  = $Ayarlar["sitetitle"];
    $siteDescription = $Ayarlar["sitedescription"];
    $siteKeywords = $Ayarlar["sitekeywords"];
    $siteCopyright = $Ayarlar["sitecopyright"];
    $siteLogo = $Ayarlar["sitelogo"];
    $siteEmail = $Ayarlar["siteemail"];
    $siteOnemliSifre = $Ayarlar["siteemailsifre"];
}else{
    echo "Site ayar hatası";
    die;
}





?>