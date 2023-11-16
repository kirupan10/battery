<?php
session_start();
$_SESSION['last_activity'] = time();
include_once('assets/inactive.php');
if ($_SESSION["sign_in"] != true) {
  header("Location: sign-in");
  exit;
}
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="76x76" href="assets/img/logos/title.png">
  <link rel="icon" type="image/png" href="assets/img/logos/title.png">
  <title>Battery Swapping Station</title>
   <link href="admin/include/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="error-box">
            <div class="error-body text-center">
                <h1 class="error-title text-danger">404</h1>
                <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
                <p class="text-muted mt-4 mb-4">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="./" class="btn btn-danger btn-rounded waves-effect waves-light mb-5 text-white">Back to home</a>
            </div>
        </div>
    </div>
    <script src="admin/include/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="admin/include/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(".preloader").fadeOut();
    </script>
</body>

</html>