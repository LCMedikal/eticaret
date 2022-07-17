<?php
require_once("Ayarlar/ayarlar.php");
require_once("Ayarlar/fonksiyonlar.php");
if (isset($_REQUEST["SayfaKodu"])) {
    $sayfakodudegeri = $_REQUEST["SayfaKodu"];
}else{
    $sayfakodudegeri = 0;
    echo "sayfa kodu degeri yok.";
}
?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=ut8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="7 Days">
    <title><?php echo $siteTitle; ?></title>
    <meta name="description" content="<?php echo $siteDescription; ?>">
    <meta name="keywords" content='<?php echo $siteKeywords; ?>'>
    <script type="text/javascript" src="Frameworks/jQuery/jquery-3.6.0.min.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="Ayarlar/style.css">
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head>

<body>
    <table width="1065" height="100%" align="center" cellpadding="0" cellspacing="0">
        <tr height="40" bgcolor="#353745">
            <td><img src="Resimler/HeaderMesajResmi.png" alt=""></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" align="center" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp;</td>
                        <td width="20"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px ;"></td>
                        <td width="70" class="MaviAlanMenusu"><a href="xxxxxx">Giriş Yap</a></td>
                        <td width="20"><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px ;"></td>
                        <td width="85" class="MaviAlanMenusu"><a href="xxxx">Yeni Üye Ol</a></td>
                        <td width="20"><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px ;"></td>
                        <td width="105" class="MaviAlanMenusu"><a href="xxxxxx">Alışveriş Sepeti</a></td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="192"><img src="Resimler/Logo.png" alt=""></td>
                        <td>
                            <table width="873" height="30" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="350" class="AnaMenu">&nbsp;</td>
                                    <td width="95" class="AnaMenu"><b><a href="index.php">Ana Sayfa</a></b></td>
                                    <td width="125" class="AnaMenu"><b><a href="xx.php">Erkek Ayakkabıları</a></b></td>
                                    <td width="125" class="AnaMenu"><b><a href="xx.php">Kadın Ayakkabıları</a></b></td>
                                    <td width="125" class="AnaMenu"><b><a href="xx.php">Çocuk Ayakkabilari</a></b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="30">
                    <tr>
                        <td align="center">Sayfa</td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr height="210">
            <td>
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9">
                    <tr height="30">
                        <td width="250" style="border-bottom:1px dashed #CCCCCC;">&nbsp;<b>Kurumsal</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom:1px dashed #CCCCCC;">&nbsp;<b>Üyelik & Hizmetler</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom:1px dashed #CCCCCC;">&nbsp;<b>Sözleşmeler</b></td>
                        <td width="21">&nbsp;</td>
                        <td width="250" style="border-bottom:1px dashed #CCCCCC;">&nbsp;<b>Bizi Takip Edin</b></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="hakkimizda.php">Hakkımızda</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Giriş Yap</td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Üyelik Sözleşmesi</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><img src="Resimler/Facebook16x16.png" border="0" style="margin-top: 5px ;"></td>
                                    <td width="230">Facebook</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;Banka Hesaplarımız</td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Yeni Üye Ol</td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Kullanım Koşulları</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><img src="Resimler/Twitter16x16.png" border="0" style="margin-top: 5px ;"></td>
                                    <td width="230">Twitter</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;Havale Bildirim Formu</td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Sık Sorulan Sorular</td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Gizlilik Sözleşmesi</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><img src="Resimler/LinkedIn16x16.png" border="0" style="margin-top: 5px ;"></td>
                                    <td width="230">Linkedin</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;Kargo Nerede?</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Mesafeli Satış Sözleşmesi</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><img src="Resimler/Instagram16x16.png" border="0" style="margin-top: 5px ;"></td>
                                    <td width="230">Instagram</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;İletişim</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">Teslimat</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><img src="Resimler/YouTube16x16.png" border="0" style="margin-top: 5px ;"></td>
                                    <td width="230">Youtube</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu">İptal & İade & Değişim</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center">Copyright</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center">
                            <img src="Resimler/InternetteGuvenliAlisveris28x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/3DSecure14x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/BonusCard41x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/WorldCard48x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/MasterCard21x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/CardFinans78x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/AxessCard46x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/OdemeSecimiParafCard.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/VisaCard37x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/AmericanExpiress20x12.png" border="0" style="margin-right: 5px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<?php
$veritabanibaglantisi = null;
?>w