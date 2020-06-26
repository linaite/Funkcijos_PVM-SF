<?php

function make_form($array)
{
    $kintamasis = '';
    foreach ($array['inputs'] as $input) {
        $kintamasis .= '<div class="d-flex w-100 "><div class="col d-inline p-0"><label for="' . $input['input_id'] . '">' . $input['label_value'] . '</label></div><div class="col d-inline p-0 "><input class="mb-3 w-100" type="' . $input['input_type'] . '" name ="' . $input['input_name'] . '" id="' . $input['input_id'] . '"></div></div>';
    }
    return $kintamasis;
}

function company_select($array)
{
//bendroviu pavadinimu selektorius
    $return = '';
    $return .= '<select class="mb-3 px-3 py-1"  name="company_name">';
    foreach ($array['companies'] as $company) {
        $return .= '<option value="' . $company['company_name'] . '">' . $company['company_name'] . '</option>';
    }
    $return .= '</select>';
    return $return;
}

// paselectintos bendroves visi duomenys, jie atsivaizduoja kai nudirectinama i kita puslapi
function make_company($array)
{
    foreach ($array['companies'] as $company) {
        if ($company['company_name'] == $_POST['company_name']) {
            print '<section class="d-flex flex-column"><span>' . $company['company_name'] . '</span><span>Įmonės kodas:   ' . $company['number'] . '</span><span>Įmonės PVM kodas:' . $company['VAT'] . '</span><span>' . $company['address'] . '</span><span>' . $company['city'] . '</span><span>' . $company['country'] . '</span><span>' . $company['contact person'] . '</span><span>' . $company['phone'] . '</span><span>' . $company['email'] . '</span></section>';
        }
    }
}

function make_orders($array)
{
    $return = '';
//stalu selektorius
    $return .= '<select class="mb-3"  name="table_name">';
    $tables = $array['tables'];
    unset($tables['count']);
    unset($tables['color']);

    foreach ($tables as $table) {
        $return .= '<option value="' . $table['table_name'] . '">' . $table['table_name'] . '</option>';
    }
    $return .= '</select>';

//spalvos selektorius
    $return .= '<select class="mb-3"  name="table_color">';
    foreach ($array['tables']['color'] as $table) {
        $return .= '<option value="' . $table . '">' . $table . '</option>';
    }
    $return .= '</select>';

//count selektorius
    $return .= '<select class="mb-3" name="table_count">';
    for ($i = 1; $i <= $array['tables']['count']; $i++) {
        $return .= '<option value="' . $i . '">' . $i . '</option>';
    }
    $return .= '</select>';
    return $return;
}

//vieneto kaina
function price($array)
{
    unset($array['tables']['count']);
    unset($array['tables']['color']);
    foreach ($array['tables'] as $table) {
        if ($table['table_name'] === $_POST['table_name']) {
            $one_table_cost = $table['price'];
        }
    }
    print $one_table_cost;
}

//bendra suma
function totalCost($array)
{
    unset($array['tables']['count']);
    unset($array['tables']['color']);
    foreach ($array['tables'] as $table) {
        if ($table['table_name'] === $_POST['table_name']) {
            $one_table_cost = $table['price'];
        }
    }
    print $one_table_cost * $_POST['table_count'];
}


//bendra funkcija
function orderForm($array)
{
    print '<section class="d-flex justify-content-center vh-100 mt-5"><form class="d-flex flex-column align-items-center" action="app/Views/order.php" method="post">' . make_form($array) . company_select($array) . make_orders($array) . '<input class="bg-warning px-3" type="' . $array['buttons']['button_type'] . '" value="' . $array['buttons']['button_value'] . '" name="' . $array['buttons']['button_name'] . '">';
}


//'<textarea class= "w-100 mb-3" placeholder="' . $array['textarea']['placeholder'] . '" id="' . $array['textarea']['id'] . '" name="' . $array['textarea']['name'] . '">Message:</textarea>'


//inputai
function make_inputs($array)
{
    $inputs = '';
    foreach ($array['cookies_inputs'] as $input) {
        $inputs .= '<input class="mb-3" type="' . $input['input_type'] . '" name ="' . $input['input_user_name'] . '" id="' . $input['input_id'] . '">';
    }
    return $inputs;
}


//bendra forma - ikeliam inputus ir pridedam mygtuka Submit
function data_form($array)
{
    print '<form class="d-flex flex-column align-items-center" action="" method="post">' . make_inputs($array) . '<input class="bg-danger px-3" type="' . $array['cookies_buttons']['button_type'] . '" value="' . $array['cookies_buttons']['button_value'] . '" name="' . $array['cookies_buttons']['button_name'] . '"></form>';
}

//nustato cookies
function set_cookie()
{
    $cookies_count = count($_COOKIE); // skaiciuoja kiek kartu israsome naujus duomenis (skaiciuoja COOKIE masyvo kieki)
    if (!empty($_POST)) { //tikrina ar POST masyvas yra netuscias
        setcookie($cookies_count . '[user_name]', $_POST['user_name']); // į $_COOKIES masyvo 0 keju iraso user_name (keju) ir jo reiksme is POST
        setcookie($cookies_count . '[user_surname]', $_POST['user_surname']);// į $_COOKIES masyvo 0 keju iraso user_surname (keju) ir jo reiksme is POST
        setcookie($cookies_count . '[user_email]', $_POST['user_email']);// į $_COOKIES masyvo 0 keju iraso user_email (keju) ir jo reiksme is POST
    }
}


function set_table($array)
{
    print '<table>';
    foreach ($array as $user_cookie) {
        print '<tr><td class="border p-2">' . $user_cookie['user_name'] . '</td><td class="border p-2">' . $user_cookie['user_surname'] . '</td><td class="border p-2">' . $user_cookie['user_email'] . '</td></tr>';
    }
    print '</table>';
}

//cookio trynimo funkcija
function delete_cookies()
{
    if (isset ($_POST['btn_delete'])) {
        foreach ($_COOKIE as $key => $user_data) {
            if ($user_data['user_email'] == $_POST['user_email']) {
                unset($_COOKIE[$key]);
                setcookie($key . "[user_name]" , "", -1, time()-3600);
                setcookie($key . "[user_surname]" , "", -1, time()-3600);
                setcookie($key . "[user_email]" , "",  -1, time()-3600);
            }
        }
    }
}


?>
