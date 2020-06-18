<?php
function get_menu($array)
{
    print '<nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="#">LOGO</a><button class="navbar-toggler" type="button" 
data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">';
    foreach ($array['menu'] as $menu_name => $link) {
        print '<li class="nav-item"><a class="nav-link" href="' . $link . '">' . $menu_name . '</a></li>';
    }
    print '</ul></div></nav>';
}

function get_table($array)
{
    print '<table class="table"><thead><tr>';
    foreach ($array['sodybos']['0'] as $key => $value) {
        print '<th>' . $key . '</th>';
    }
    print '</tr></thead><tbody>';
    foreach ($array['sodybos'] as $names) {
        print '<tr><td>' . $names['sodybos_id'] . '</td><td>' . $names['reitingas'] . '</td><td>' . $names['sodybos_pavadinimas'] . '</td><td>' . $names['sodybos_adresas'] . '</td><td>' . $names['namuku_skaicius'] . '</td><td>' . $names['miegamos_vietos'] . '</td></tr>';
    }
    print '</tbody></table>';
}

function top5($array)
{
    $keys = array_column($array['sodybos'], 'reitingas');
    array_multisort($keys, SORT_DESC, $array['sodybos']);
    print '<table class="table table-hover"><thead><tr>
    <th scope="col">Sodybos id</th>
      <th scope="col">Reitingas</th>
      <th scope="col">Sodybos pavadinimas</th>
      <th scope="col">Sodybos adresas</th>
       <th scope="col">Namuku skaicius</th>
        <th scope="col">Miegamos vietos</th>
    </tr></thead><tbody>';
    for ($i = 0; $i < 5; $i++) {
        print '<tr><th scope="row">' . $array['sodybos'][$i]['sodybos_id'] . '</th><td>' . $array['sodybos'][$i]['reitingas'] . '</td><td>' . $array['sodybos'][$i]['sodybos_pavadinimas'] . '</td><td>' . $array['sodybos'][$i]['sodybos_adresas'] . '</td><td>' . $array['sodybos'][$i]['namuku_skaicius'] . '</td><td>' . $array['sodybos'][$i]['miegamos_vietos'] . '</td></tr>';
    }
    print '</tbody></table>';
}

function get_contact($masyvas)
{
    print '<form class="d-flex flex-column" method="post">';
    foreach ($masyvas['form']['inputs'] as $input) {
        if ($input['name'] == 'user_name' || $input['name'] == 'user_email' || $input['name'] == 'user_number') {
            print '<input class="mb-4 p-2" type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '">';
        } else {
            print '<textarea class="mb-4 p-2" name="' . $input['name'] . '" placeholder="' . $input['placeholder'] . '"></textarea>';
        }
    }
    foreach ($masyvas['form']['buttons'] as $button) {
        print '<input class="w-25 p-2" type="' . $button['type'] . '" value="' . $button['value'] . '">';
    }
    print '</form>';
}









?>