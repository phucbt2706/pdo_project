<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= $CSS_URL ?>/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CSS_URL ?>/style.css" type="text/css">
</head>

<body>
     <!-- Nav top -->
    <?php require '../../partials/nav-top-menu.php'; ?>
    <!-- Header -->
    <?php require '../../partials/header.php'; ?>
    <!-- Content -->
    <?php require $VIEW_NAME; ?>
    <!-- Footer -->
    <?php require '../../partials/footer.php'; ?>
    <!-- Js Plugins -->
    <script src="<?= $JS_URL ?>/jquery-3.3.1.min.js"></script>
    <script src="<?= $JS_URL ?>/bootstrap.min.js"></script>
    <script src="<?= $JS_URL ?>/jquery.nice-select.min.js"></script>
    <script src="<?= $JS_URL ?>/jquery.nicescroll.min.js"></script>
    <script src="<?= $JS_URL ?>/jquery.magnific-popup.min.js"></script>
    <script src="<?= $JS_URL ?>/jquery.countdown.min.js"></script>
    <script src="<?= $JS_URL ?>/jquery.slicknav.js"></script>
    <script src="<?= $JS_URL ?>/mixitup.min.js"></script>
    <script src="<?= $JS_URL ?>/owl.carousel.min.js"></script>
    <script src="<?= $JS_URL ?>/main.js"></script>
</body>

</html>