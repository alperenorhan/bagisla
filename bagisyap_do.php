<?php
include 'ayar.php';
if (isset($_SESSION['email'])) {
?>

<?php
$mail=$_SESSION['email'];
$kurum=$_POST["inputKurum"];
$miktar=$_POST["inputMiktar"];
if ($kurum==NULL || $miktar==NULL) {
  echo'<script>alert("Lütfen bütün alanları doldurun!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=bagisyap.php"/>';
}
else {
    $sql_3="SELECT * FROM bagis";
    $bagissayaç=$baglan->query($sql_3);
    $bagissayaç1=$bagissayaç->num_rows;
$temp=$bagissayaç1+1;
$sql_1="INSERT INTO bagis(Bagis_Adi,Bagis_Kurum,Bagis_Miktari,Bagis_No)VALUES('".$_POST["inputAd"]."','".$_POST["inputKurum"]."','".$_POST["inputMiktar"]."','".$temp."')";
$sonuc2=mysqli_query($baglan,$sql_1);
$sorgu_1="SELECT Bagis_Adi FROM bagis WHERE Bagis_Kurum='$kurum' AND Bagis_Miktari='$miktar'";
$srg=$baglan->query($sorgu_1);
$sonuc=$srg->fetch_assoc();
$sql_2="INSERT INTO kullanici_bagis(Kullanici_Mail,Bagis_Adi)VALUES('".$_SESSION['email']."','".$_POST["inputAd"]."')";



if ($baglan->query($sql_2) === TRUE) {
    echo'<script>alert("Bağış yapıldı!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=bagislarim.php"/>';

  } else {
    echo "Error updating record: " . $baglan->error;
  }
}
?>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>