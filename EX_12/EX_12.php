<?php
function primo($numero)
{


    $contador = 0;
 for ($i =1;$i<=$numero;$i++){
     $resultado = $numero%$i;
     if ($resultado==0){
         $contador++;

     }

 }


 if ($contador==2){
     echo 'el '.$numero.' es primo';
 }else{
     echo ' no es primo';
 }

}

primo(9845);
?>
