<?php
include_once '../php/array.php';
include_once '../Models/functions.php';
var_dump($_POST);
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
<body>
<section class="container">
    <h4 class="text-center"> PVM Sąskaita faktūra</h4>
    <h4 class="text-center"> Serija XXX Nr. 1</h4>
    <h4 class="text-center"> 2020-06-25</h4>
    <div class="row d-flex mt-5 mb-5">
        <div class="col-6 d-flex flex-column text-center mb-5">
            <h4>Pirkėjas:</h4>
            <span><?php print $_POST['client_name']; ?></span>
            <span>Įmonės kodas:<?php print $_POST['company_number']; ?></span>
            <span>Įmonės PVM kodas:<?php print $_POST['company_vat']; ?></span>
            <span><?php print $_POST['company_address']; ?></span>
            <span><?php print $_POST['company_city']; ?></span>
            <span><?php print $_POST['company_country']; ?></span>
            <span><?php print $_POST['contact_person']; ?></span>
            <span><?php print $_POST['contact_number']; ?></span>
            <span><?php print $_POST['contact_email']; ?></span>
        </div>
        <div class="col-6 text-center">
            <h4>Pardavėjas:</h4>
            <?php make_company($masyvas); ?>
        </div>
    </div>
    <div class="row mt-5d-flex justify-content-center">
        <table>
            <tr>
                <th class="px-5">Prekės pavadinimas</th>
                <th class="px-5">Prekės spalva</th>
                <th class="px-5">Prekės kiekis</th>
                <th class="px-5">Vieneto kaina</th>
                <th class="px-5">Bendra suma</th>
            </tr>
            <tr>
                <td class="text-center"><?php print $_POST['table_name']; ?></td>
                <td class="text-center"><?php print $_POST['table_color']; ?></td>
                <td class="text-center"><?php print $_POST['table_count']; ?></td>
                <td class="text-center"><?php price($masyvas); ?></td>
                <td class="text-center"><?php totalCost($masyvas); ?></td>
            </tr>
        </table>
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <p class="pl-5 ">Suma žodžiais: </p>
            <p class="pl-5 ">Sąskaitą išrašė: Jonas Jonaitis </p>
        </div>
    </div>

    <script src="../../assets/js/jQuery.js"></script>
    <script src="../../assets/js/bootstrap.bundle.js"></script>
</section>
</body>
</html>


