<?php
include 'ayar.php';
if (isset($_SESSION['email'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bağışla | Bağış Yap</title>

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

            <h2 class="mb-4">Bağış Yap</h2>
            <div class="form">
                <form action="bagisyap_do.php" method="POST">
                    <div class="form-group">
                        <label for="inputKurum">Bağışınızın Adı</label>
                        <input type="text" class="form-control" name="inputAd" aria-describedby="kurumHelp"
                            placeholder="Bağışınızın Adı">
                    </div>
                    <div class="form-group">
                        <label for="inputKurum">Bağış Yapılacak Kurum</label>
                        <input type="text" class="form-control" name="inputKurum" aria-describedby="kurumHelp"
                            placeholder="Bağışın Yapılacağı Kurum Adı">
                    </div>
                    <div class="form-group">
                        <label for="inputMiktar">Bağış Miktarı</label>
                        <input type="text" class="form-control" name="inputMiktar"
                            placeholder="Yapacağınız Bağışın Miktarı">
                    </div>
                    <button type="submit" class="btn btn-primary">Bağış Yap</button>
                </form>
            </div>


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