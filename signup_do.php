<?php
include 'ayar.php';
?>


<?php 
$temp=$_POST["email"];
$sql_1="SELECT Kullanici_Mail FROM kullanici WHERE Kullanici_Mail='$temp'";
$sorgu1=mysqli_query($baglan,$sql_1);
$fetch1=$sorgu1->fetch_assoc();

 if(isset($_POST["signupbutton"])){
	

	if(isset($fetch1)){

		echo "<script type='text/javascript'>alert('Bu email zaten kayıtlı!')</script>
		<meta http-equiv = 'refresh' content = ' 0 ; url=signup.php'/>";
	
	}
	else{
	 if(($_POST["ad"] && $_POST["soyad"] && $_POST["email"]&& $_POST["sifre"])!=NULL){
	
	$sql_2="INSERT INTO kullanici(Kullanici_Mail,Kullanici_Ad,Kullanici_Soyad,Kullanici_Sifre)values('".$_POST["email"]."','".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["sifre"]."')";

	$sorgu2=mysqli_query($baglan,$sql_2);
	?>

	<meta http-equiv = "refresh" content = " 0 ; url=index.php"/>
<?php	
}
	 else  {
	 echo "<script type='text/javascript'>alert('Lütfen bütün alanları doldurunuz!');</script>";}
	 }
	}





?>

