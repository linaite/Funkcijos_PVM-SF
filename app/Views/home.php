<?php
include_once '../php/array.php';
include_once '../Models/functions.php';
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
<main class="container">
    <section class="mt-5">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-5">Apie sodybas</h3>
                <p>MS resort sodyba, tai 2016 metų statybos, unikali ir moderni sodyba, kuri gali Jums pasiūlyti atšvęsti savo šeimos ar įmonės reikšmingas progas gamtoje, vos 15 minučių (9,5 km) nuo Vilniaus miesto centro.</p>
                <p>Sodyboje yra erdvi salė, kurioje telpa iki 40 asmenų. Šalia įrengta terasa, leidžianti mėgautis gamtos vaizdais bei šalia esančio tvenkinio grožiu. Graži, sutvarkyta aplinka, taip pat šalia tvenkinio esanti pirtis leis Jums atsipalaiduoti ir pamiršti kasdieninius rūpesčius.</p>
                <p>Įrengti 3 gyvenamieji kambariai su atskirais vonios kambariais, norintiems pasilikti nakvynei.</p>
            </div>
            <div class="col-6">
                <img class="h-100 w-100" src="http://www.msresort.lt/images/img1.jpg" alt="">
            </div>
        </div>
    </section>
</main>
<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>