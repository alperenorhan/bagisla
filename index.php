<?php
include 'ayar.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bağışla | Anasayfa</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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

            <h2 class="mb-4">Bağışla Nedir?</h2>
            <p>Bağışla, internet üzerinden yardım kurumlarına bağış yapmanıza olanak sağlayan bir projedir. Kolaylıkla
                kayıt olup, bağış yapmak istediğiniz kuruma bağış yapabilirsiniz.</p>
        </div>
    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>