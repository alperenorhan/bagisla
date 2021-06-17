<?php
session_start();
$vt_sunucu="db_host";
$vt_kullanici="db_user";
$vt_sifre="db_password";
$vt_adi="db_name";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if ($baglan -> connect_errno)
{
    echo("Bir hata meydana geldi!");
    exit;
}


//echo ("Bağlantı sağlandı!");


?>