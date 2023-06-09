<?php

//break nos corta la ejecucion de un arreglo, desde abril y no ejecuta las otras lineas, tambien exit;
//continue, nos permite saltar a la otra ejecucion de codigo

$meses = array(
    'enero',
    'febrero',
    'abril',
    'mayo',
    'octubre',
    'diciembre',
);


foreach($meses as $mes){
    echo $mes;

    if($mes == 'abril'){
       break;
    }

}

?>