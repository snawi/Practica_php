<?php

//las funciones no pueden acceder a variables qu esten fuera de la funcion y viceversa, para pasarla lo
//hacemos po parametro ojooooo

$numero = 45;

function sumar ($numero){
    echo $numero;
};

sumar($numero);

?>