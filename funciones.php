<?php
//es un bloque de codigo que podemos ejecutar en varias partes y no repetir un bloque de sentencia
//tenemos que llamarlas fuera de la funcion
//podemos pasarle a las funciones parametros de cualquier tipo nombrez, numeros, variables
//el valor de la funcion la podemos guardar en una variable
//return nos permite regresar los valores en las funciones, para no mostrarlo con echo en pantalla,debajo del return no se puede ejecutar nada
//las funciones es mejor hacerla para que haga calculos, validaciones, pero casi no para mostrar en pantalla
//tratar de que las funciones solo hagan una sola cosa  



 function saludo(){
    echo 'saludo';
}

saludo();

//parametros de las funciones

 function agregar($nombre){
    echo "hola," .$nombre;
 }

 agregar('fany');
 agregar('veronica');
 agregar('ruiz');

 function sumar($numero1, $numero2){
    echo $numero1 + $numero2;
 }

 sumar(10, 20);
 sumar(15, 80);
 sumar(18, 70); 


 //practica

 function calcular_area($base, $altura){
    $resultado = ($base * $altura) / 2;
     return $resultado;
 }

 echo 'el triangulo tiene un area de '. calcular_area(10, 10) . ' metros'; 

 //___________________________________________________________________________________

 //funciones utiles para las cadenas de texto

 //documentacion url: https://www.php.net/manual/es/ref.strings.php

/*  $texto = 'hola  ';

 echo htmlspecialchars($texto);
 echo trim($texto);
 echo strlen($texto);
 echo substr($texto);
 echo strtoupper($texto);
 echo strtolower($texto); */

 //____________________________________________________________________________________

 //funciones para los arreglos

 //documentacion url: https://www.php.net/manual/es/ref.array.php

 //extract (se puede ejcutar un indice del arreglo como variable)

  $comidas = array('arroz' => 'pollo', 'frijol' => 'carne');
  $meses = array(
    'enero',
    'febrero',
    'abril',
    'mayo',
    'octubre',
    'diciembre',
);


 function calcular_area($base, $altura){
   echo $resultado = $base * $altura;
    return $resultado;
}

calcular_area(5, 4); 

 extract($comidas);
 array_pop($comidas); //selecciona el ultimo indice o elemento del arreglo

 echo join('-', $comidas);
 count($comidas);

 $comidas_reverts = array_reverse($comidas); //nos trae el arreglo invertido  */

 foreach($comidas as $comida => $valor){
    echo "<li>" .$comida. "</li>";
 } 



$numero = 15.47;

//redondea el numero
echo round($numero); 

 echo rand(1,10); */
//calcular el numero de paginacion hacia arriba
/* echo ceil(12.1); 


//traer el numero de Pi
echo M_PI;

//la funcion die detiene el codigo

