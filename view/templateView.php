<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./css/menu.css"/>
    <link  rel="stylesheet" href="./css/footer.css"/>
</head>
<body>
<?php require ('menuView.php'); ?>
<?= $content ?>
<?php require ('footerView.php') ?>
</body>
</html>







