<?php

$data_masyvas = [
    'flowers' => [
        [
            'flowers_name' => 'Pakalnutes',
            'count' => 10,
            'price' => 1.2,
            'color' => 'blue',
            'size' => [10, 15, 20],
        ],
        [
            'name' => 'Dilgeles',
            'count' => 10,
            'price' => 1.8,
            'color' => 'green',
            'size' => [10, 15, 20],
        ],
        [
            'name' => 'Durnaropes',
            'count' => 15,
            'price' => 2.0,
            'color' => 'red',
            'size' => [10, 15, 20],
        ],
        [
            'name' => 'Zibutes',
            'count' => 20,
            'price' => 2.2,
            'color' => 'pink',
            'size' => [10, 15, 20],
        ],
        [
            'name' => 'Rozes',
            'count' => 25,
            'price' => 1.7,
            'color' => 'yellow',
            'size' => [10, 15, 20],
        ],
    ],
    'inputs' => [
        [
            'input_type' => 'text',
            'input_name' => ' order_name',
            'input_id' => 'order_id',
            'label_value' => 'Jūsų vardas:',
        ],
        [
            'input_type' => 'email',
            'input_name' => ' order_email',
            'input_id' => 'email_id',
            'label_value' => 'Jūsų elektroninis paštas:',
        ],
        [
            'input_type' => 'tel',
            'input_name' => ' order_tel',
            'input_id' => 'tel_id',
            'label_value' => 'Jusu telefono numeris:',
        ],
        [
            'input_type' => 'number',
            'input_name' => ' flower_count',
            'input_id' => 'flower_count_id',
            'label_value' => 'Gėlių kiekis:',
        ],
        [
            'input_type' => 'text',
            'input_name' => ' order_address',
            'input_id' => 'flower_address_id',
            'label_value' => 'Pristatymo adresas:',
        ],
    ],
    'buttons' => [
        'button_type' => 'submit',
        'button_name' => 'order',
        'button_value' => 'Pateikti',
    ],
];


?>