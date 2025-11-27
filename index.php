<?php
require_once 'includes/functions.php';
require_once 'posts.php';

$stranka = 'home';
if (isset($_GET['stranka'])) {
    $stranka = $_GET['stranka'];
}
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/header.php'; ?>


<div class="container mt-4">
    <?php

    if ($stranka == 'detail') {
        include 'pages/detail.php';
    } elseif ($stranka == 'kontakt') {
        include 'pages/contact.php';
    } elseif ($stranka == 'pridat') {
        include 'add.php';
    } else {
        include 'pages/home.php';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>