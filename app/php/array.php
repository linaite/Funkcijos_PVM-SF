<?php

$masyvas = [
    'companies' => [
        [
            'company_name' => 'UAB CodeAcademy',
            'number' => 123456,
            'VAT' => 648764987365434,
            'address' => 'Sauletekio al. 6',
            'city' => 'Vilnius',
            'country' => 'Lithuania',
            'contact person' => 'Vardenis Pavardenis',
            'phone' => 861653738,
            'email' => 'vardenis@pavardenis.lt',

        ],
        [
            'company_name' => 'IĮ Kazio įmonė',
            'number' => 123456,
            'VAT' => 648764987365434,
            'address' => 'Saulės g.7',
            'city' => 'Vilnius',
            'country' => 'Lithuania',
            'contact person' => 'Vardenis Pavardenis',
            'phone' => 861653738,
            'email' => 'vardenis@pavardenis.lt',

        ],
        [
            'company_name' => 'AB Nemuno banga',
            'number' => 123456,
            'VAT' => 648764987365434,
            'address' => 'Staliaus g. 18',
            'city' => 'Vilnius',
            'country' => 'Lithuania',
            'contact person' => 'Vardenis Pavardenis',
            'phone' => 861653738,
            'email' => 'vardenis@pavardenis.lt',

        ],
        [
            'company_name' => 'MB Mano duona',
            'number' => 123456,
            'VAT' => 648764987365434,
            'address' => 'Gedimino pr. 6',
            'city' => 'Kaunas',
            'country' => 'Lithuania',
            'contact person' => 'Vardenis Pavardenis',
            'phone' => 861653738,
            'email' => 'vardenis@pavardenis.lt',

        ],
        [
            'company_name' => 'UAB Sūrūs sūriai',
            'number' => 123456,
            'VAT' => 648764987365434,
            'address' => 'Nemunelio g. 6',
            'city' => 'Vilnius',
            'country' => 'Lithuania',
            'contact person' => 'Vardenis Pavardenis',
            'phone' => 861653738,
            'email' => 'vardenis@pavardenis.lt',

        ],
    ],
    'inputs' => [
        [
            'input_type' => 'text',
            'input_name' => 'client_name',
            'input_id' => 'name_id',
            'label_value' => 'Įmonės pavadinimas:',
        ],
        [
            'input_type' => 'number',
            'input_name' => ' company_number',
            'input_id' => 'number_id',
            'label_value' => 'Įmonės kodas:',
        ],
        [
            'input_type' => 'number',
            'input_name' => ' company_vat',
            'input_id' => 'vat_id',
            'label_value' => 'VAT:',
        ],
        [
            'input_type' => 'text',
            'input_name' => 'company_address',
            'input_id' => 'address_id',
            'label_value' => 'Adresas:',
        ],
        [
            'input_type' => 'text',
            'input_name' => 'company_city',
            'input_id' => 'city_id',
            'label_value' => 'Miestas:',
        ],
        [
            'input_type' => 'text',
            'input_name' => 'company_country',
            'input_id' => 'country_id',
            'label_value' => 'Šalis:',
        ],
        [
            'input_type' => 'text',
            'input_name' => 'contact_person',
            'input_id' => 'contact_person_id',
            'label_value' => 'Kontaktinis asmuo:',
        ],
        [
            'input_type' => 'number',
            'input_name' => 'contact_number',
            'input_id' => 'contact_number_id',
            'label_value' => 'Kontaktinis telefonas:',
        ],
        [
            'input_type' => 'email',
            'input_name' => 'contact_email',
            'input_id' => 'contact_email_id',
            'label_value' => 'Elektroninis paštas:',
        ],

    ],
    'tables' => [
        'count' => 10,
        'color'=>['Juodas', 'Rudas', 'Baltas'],
        [
            'table_name' => 'Stalas JOJO',
            'price' => 100,
        ],
        [
            'table_name' => 'Stalas VAVA',
            'price' => 150,
        ],
        [
            'table_name' => 'Stalas KOKO',
            'price' => 180,
        ],
    ],
    'buttons' => [
        'button_type' => 'submit',
        'button_name' => 'order',
        'button_value' => 'Pateikti',
    ],
    'cookies_inputs'=>[
        [
            'input_type' => 'text',
            'input_user_name' => 'user_name',
            'input_id' => 'cookies_name_id',
        ],
        [
            'input_type' => 'text',
            'input_user_name' => 'user_surname',
            'input_id' => 'cookies_surname_id',
        ],
        [
            'input_type' => 'email',
            'input_user_name' => 'user_email',
            'input_id' => 'cookies_email_id',
        ],
    ],
    'cookies_buttons' => [
        'button_type' => 'submit',
        'button_name' => 'order',
        'button_value' => 'Submit',
    ],

];

//'textarea' => [
//    'placeholder' => 'Your message:',
//    'id' => 'id_textarea',
//    'name' => 'textarea',
//],
?>


