<?php
for ($i = 0; $i < 9; $i++) {
    for ($x = 0; $x < $i; $x++) {
        echo '*';
    }
    for ($x = 8; $x > $i; $x--) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    for ($x = 0; $x < $i; $x++) {
        echo '*';
    }
    
    echo '<br>';
}

$contador = 0;
for ($v = 7; $v > 0; $v--) {
    $contador++;
    for ($x = 0; $x < $v; $x++) {
        echo '*';
    }
    for ($j = 0; $j < $contador; $j++) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    for ($x = 0; $x < $v; $x++) {
        echo '*';
    }

    echo '<br>';
}

?>