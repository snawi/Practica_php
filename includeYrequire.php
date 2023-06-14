<?php

//con require si hay fallos, no nos muestra el resto de la pagina, con include nos muestra solo el error
//cuando no es tan importante usamos include, pero si es algo importante usamos require
//include_once  solo traer el archivo solo una vez

function sumar($numero1, $numero2){
echo $numero1 + $numero2;

return;
};



?>