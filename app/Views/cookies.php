<?php
include_once '../php/array.php';
include_once '../Models/functions.php';

//
var_dump($_COOKIE);
//var_dump($_POST);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="container">
<div class="row d-flex justify-content-center mt-5">
    <?php data_form($masyvas); ?>
</div>
<div class="row justify-content-center mt-5">
    <?php set_cookie(); ?>
    <?php set_table($_COOKIE); ?>
</div>
<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>
