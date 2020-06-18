<?php
include_once '../php/array.php';
include_once '../Models/functions.php';

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
<body class="m-auto">
<header>
    <?php get_menu($array); ?>
</header>
<main>
    <section class="container mt-5">
        <div class="row">
            <div class="map col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123"
                        width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="contact-form col-6">
                <h1 class="title">Contact Us</h1>
                <h3 class="subtitle">We are here assist you.</h3>
                <?php get_contact($array); ?>

            </div>
    </section>
</main>


<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>