<?php

//arreglos indexados, se puede tener varios arreglos dentro de otro

$arreglo = array(
array('wilmer', 25),
array('carlas', 85),
array('dayana', 6)
);

/* echo implode($arreglo[0]) ; */

$nombre = array(
    'yurany',
    'wilson'
);

/* echo $nombre; */

//como saber cuantos valores hay en un arreglo con la funcion count()

$nombre = array(
    'yuranpppy',
    'wilson',
    'wilson',
    'wilsokmln',
    'wilsomklkn',
    'wilsokkkn',
);

/* echo count($nombre); */

$ultimoMes= count($nombre) - 1;


echo $ultimoMes;

?>