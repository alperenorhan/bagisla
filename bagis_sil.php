<?php
include 'ayar.php';
if (isset($_SESSION['email'])) {
?>

<?php
$temp=$_POST["bagissiladi"];
//echo $temp;


// $sonuc=$baglan->query($sql);
$bagis_sayisi = "SELECT * FROM bagis";
$bagis_sayi= $baglan->query($bagis_sayisi);
$bagis_sayi1=$bagis_sayi ->num_rows;

$bul_bagis= "SELECT * FROM bagis WHERE Bagis_Adi='$temp'";
$bagis= $baglan->query($bul_bagis);
$bagis1= $bagis->fetch_assoc();

$bagis_sira=$bagis1["Bagis_No"];
     


$sql1 = "DELETE FROM bagis WHERE Bagis_Adi='$temp'";
$sql2 = "DELETE FROM kullanici_bagis WHERE Bagis_Adi='$temp'";

$sonuc1=$baglan->query($sql2);

 
if ($baglan->query($sql1) === TRUE) {
    echo'<script>alert("silme işlemi başarılı");</script>
        <meta http-equiv = "refresh" content = " 0.5 ; url=bagislarim.php"/>';
  } else {
    echo "Error deleting record: " . $baglan->error;
  }

if($bagis_sayi1!=$bagis_sira){
    $sql6 = "UPDATE bagis SET Bagis_No =$bagis_sira  WHERE Bagis_No =$bagis_sayi1 ";
    $sonuc4=$baglan->query($sql6);

  }

 


?>

<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>
