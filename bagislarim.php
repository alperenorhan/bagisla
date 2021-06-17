<?php
include 'ayar.php';
if (isset($_SESSION['email'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bağışla | Bağışlarım</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Style -->
    <style>
        .card-text {
            color: #866ec7 !important;
        }

        .card-text-fw {
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="index.php" class="logo">Bağışla</a></h1>
                <ul class="list-unstyled components mb-5">
                    <?php
                        if(!(isset($_SESSION['email']))){
                    ?>
                    <li>

                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Kullanıcı İşlemleri</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="login.php">Giriş Yap</a>
                            </li>
                            <li>
                                <a href="signup.php">Kaydol</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="active">
                        <a href="index.php">Anasayfa</a>
                    </li>
                    <?php
                        if(isset($_SESSION['email'])){
                    ?>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Bağış İşlemleri</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="bagislarim.php">Bağışlarım</a>
                            </li>
                            <li>
                                <a href="bagisyap.php">Bağış Yap</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="logout.php">Çıkış Yap</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <h2 class="mb-4">Bağışlarım</h2>
            <div class="Bağışlar">

                <?php

$kisiselmail=$_SESSION['email'];

            $kisiselbagis="SELECT * FROM bagis RIGHT JOIN kullanici_bagis ON bagis.Bagis_Adi=kullanici_bagis.Bagis_Adi WHERE kullanici_bagis.Kullanici_Mail='$kisiselmail'";
            
            
            $bagis_sayi= $baglan->query($kisiselbagis);
            $bagis_sayi1=$bagis_sayi ->num_rows;

for ($i=1; $i <=$bagis_sayi1 ; $i++) { 
    $bul_bagis= "SELECT * FROM bagis RIGHT JOIN kullanici_bagis ON bagis.Bagis_Adi=kullanici_bagis.Bagis_Adi WHERE kullanici_bagis.Kullanici_Mail='$kisiselmail' AND Bagis_No='$i'";
    $bagis= $baglan->query($bul_bagis);
    $bagis1= $bagis->fetch_assoc();
    $bagis_adi_dizi[$i]=$bagis1['Bagis_Adi'];
    $bagis_no_dizi[$i]=$bagis1['Bagis_No'];
    $bagis_kurum_dizi[$i]=$bagis1['Bagis_Kurum'];
    $bagis_miktari_dizi[$i]=$bagis1['Bagis_Miktari'];


?>

                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <?php echo $bagis_no_dizi[$i]; ?>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title card-text card-text-fw">
                            <?php echo $bagis_kurum_dizi[$i]; ?>
                        </h5>
                        <p class="card-text">Bağış Miktarı
                            <?php echo $bagis_miktari_dizi[$i]; ?> TL
                        </p>
                        <div>
                            <form action="bagis_duzenle.php" method="POST">
                                <input type="hidden" value="<?php echo $bagis_adi_dizi[$i] ?>" name="bagisadi">
                                <input type="hidden" value="<?php echo $bagis_kurum_dizi[$i] ?>" name="bagiskurumu">
                                <input type="hidden" value="<?php echo $bagis_miktari_dizi[$i] ?>" name="bagismiktari">
                                <button class="btn btn-primary" type="submit">Bağışı Düzenle</button>
                            </form>
                            <form action="bagis_sil.php" method="POST">
                                <input type="hidden" value="<?php echo $bagis_adi_dizi[$i] ?>" name="bagissiladi">
                                <button class="btn btn-primary mt-2" type="submit">Bağışı Sil</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
}
                ?>

                <!-- Card End -->
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>