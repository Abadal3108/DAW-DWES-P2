<?php


$array = array('alex', 'abadal', 'goula', 'patatatatatata', 'ha','dadadadadadadadadadad','h','dahsdjwhdbgavbndawhjadvadgwad');
$min = strlen($array[0]);
$max = strlen($array[0]);
$min_palabra = $array[0];
$max_palabra = $array[0];
for ($i = 0; $i < count($array); $i++) {
    $valor = strlen($array[$i]);
    if (strlen($array[$i]) <= $min) {
        $min = $valor;
        $min_palabra = $array[$i];
    } else if (strlen($array[$i]) >= $max) {
        $max = $valor;
        $max_palabra = $array[$i];
    }
}
echo 'max ' . $max . ' es ' . $max_palabra . '<br>';
echo 'min ' . $min . ' es ' . $min_palabra . '<br>';
?>
