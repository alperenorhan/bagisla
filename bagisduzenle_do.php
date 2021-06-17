<?php
include 'ayar.php';
if (isset($_SESSION['email'])) {
    
?>

<?php
$eskibagisadi=$_POST['eskiAd'];
$yenibagiskurumu=$_POST['inputKurum'];
$yenibagismiktari=$_POST['inputMiktar'];





if ((($yenibagiskurumu!=NULL) && ($yenibagismiktari!=NULL) )) {
    $son_sql="UPDATE bagis SET Bagis_Kurum='$yenibagiskurumu',Bagis_Miktari='$yenibagismiktari' WHERE Bagis_Adi='$eskibagisadi'";
    
    
    if ($baglan->query($son_sql) === TRUE) {
        echo'<script>alert("Değişiklikler kaydedildi!");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=bagislarim.php"/>';
    } else {
      echo "Error updating record: " . $baglan->error;
    }
}
else {
    echo'<script>alert("Lütfen bütün alanları doldurunuz!");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=bagislarim.php"/>';
}

?>
<?php

}
?>