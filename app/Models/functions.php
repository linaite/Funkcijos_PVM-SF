<?php

function make_customer($array)
{
    $formstring = '';
    $cikloSkaicius = 0;
    foreach ($array['inputs'] as $input) {
        if ($cikloSkaicius < 3) {
            $formstring .= '<label for="' . $input['input_id'] . '">' . $input['label_value'] . '</label><input class="mb-3" type="' . $input['input_type'] . '" name ="' . $input['input_name'] . '" id="' . $input['input_id'] . '">';
        } else {
            break;
        }
        $cikloSkaicius++;
    }
    return $formstring;
}
function orderForm($array)
{
    print '<section class="container d-flex justify-content-around align-items-center flex-column vh-100"><form class="d-flex flex-column align-items-center" action="app/Views/order.php" method="post">' . make_customer($array) . '<input class="bg-warning" type="' . $array['buttons']['button_type'] . '" value="' . $array['buttons']['button_value'] . '" name="' . $array['buttons']['button_name'] . '"></form></section>';
}
?>

