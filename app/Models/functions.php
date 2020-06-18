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
    print '<table class="table table-hover"><thead>';
    print'<tr>
      <th scope="col">Sodybos id</th>
      <th scope="col">Reitingas</th>
      <th scope="col">Sodybos pavadinimas</th>
      <th scope="col">Sodybos adresas</th>
       <th scope="col">Namuku skaicius</th>
        <th scope="col">Miegamos vietos</th>
    </tr></thead><tbody>';
    foreach ($array['sodybos'] as $sodybos_key) {
        print '<tr>';
        foreach ($sodybos_key as $sodybos_data) {
            print "<td>$sodybos_data</td>";
        }
        print '</tr>';
    }
    print ' </tbody></table>';
}











?>