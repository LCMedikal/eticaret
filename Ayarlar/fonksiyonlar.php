<?php
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat = date("d.m.Y H:i:s",$ZamanDamgasi);

function Guvenlik($deger){
    $BoslukSil = trim($deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap = htmlspecialchars($TaglariTemizle);
    $sonuc = $EtkisizYap;
    return $sonuc;
}











?>