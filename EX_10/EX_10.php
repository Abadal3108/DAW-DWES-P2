<?php
function ordene($array, $como, $cual)
{


    foreach ($array as $letra => $numero) {
        echo $letra . '=' . $numero . '<br>';

    }
    echo '<br>';

    if ($como == 'asc') {
        if ($cual == 'clave') {
            asort($array);
            foreach ($array as $letra => $numero) {
                echo $letra . '<br>';
            }
        } else {
            sort($array);

            foreach ($array as $numero) {
                echo $numero . '<br>';

            }
        }
    } else {
        if ($cual == 'clave') {
            ksort($array);
            foreach ($array as $letra => $numero) {
                echo $letra . '<br>';
            }
        } else {
            rsort($array);
            foreach ($array as $numero) {
                echo $numero . '<br>';

            }
        }
    }

}

//asc desc     clave valor
ordene(['dos' => 2, 'uno' => 1, 'cuatro' => 4, 'tres' => 3, 'cinco' => 5], "asc", "valor");
?>
