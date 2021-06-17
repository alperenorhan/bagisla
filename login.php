<?php
include 'ayar.php';
if (!(isset($_SESSION['email']))) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bağışla | Giriş Yap</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
    <div class="container">
        <div class="col-md-6 mx-auto text-center">
            <div class="header-title">
                <h1 class="wv-heading--title">
                    Bağışla
                </h1>
                <h5 class="wv-heading--subtitle">
                    Giriş Yap
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="myform form ">
                    <form action="login_do.php" method="POST" name="login">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control my-input" id="email"
                                placeholder="Email Adresiniz">
                        </div>
                        <div class="form-group">
                            <input type="password" name="sifre" class="form-control my-input" id="sifre"
                                placeholder="Şifreniz">
                        </div>
                        <div class="text-center ">
                            <button type="submit" class=" btn btn-block send-button tx-tfm">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>