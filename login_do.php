<?php
include 'ayar.php';
?>
<?php

$uye_mail= $_POST['email'];

$sql_1="SELECT * FROM kullanici WHERE Kullanici_Mail='$uye_mail'";
$sql_2 = "SELECT * FROM kullanici";
$sorgu_1 = $baglan->query($sql_2);
$ctrl = $baglan->query($sql_1);
$sonuc= $ctrl->fetch_assoc();
if($sorgu_1->num_rows>0){
    while($satir = $sorgu_1->fetch_assoc()){

       
       if($_POST['email']==$satir["Kullanici_Mail"] && $_POST['sifre']==$satir["Kullanici_Sifre"]){
           
           $flag1=1;
           $_SESSION['email']= $sonuc["Kullanici_Mail"];
           $_SESSION['adi']=$sonuc["Kullanici_Ad"];
           $_SESSION['soyadi']=$sonuc["Kullanici_Soyad"];
           $_SESSION['sifre']=$sonuc["Kullanici_Sifre"];
           
          
           echo'<meta http-equiv="refresh" content=" 0.5; index.php">';
       
           
           }
       }
       if($flag1!=1){
           echo'<script>alert("Email adresi veya şifrenizi yanlış girdiniz!");</script>
           <meta http-equiv="refresh" content=" 0; login.php">';

       }
       }
       

?>