<?php
//podemos recorrer el arreglo lleno de string, numeros, booleanos lo que sea.

$meses = array(
    'enero',
    'febrero',
    'abril',
    'mayo',
    'octubre',
    'diciembre',
);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1> Meses del año </h1>

 <ul>
    <?php

        foreach($meses as $mes) {
           
           echo "<li>" .$mes. "</li>" ; 
        /* <li><?php echo $meses[0]; ?></li> */
        }
    ?>
    
 </ul>

</body>
</html>


<?php

//______________________________________________________________________________________

//ordenar el arreglo alfabeticamente con funciones

sort($meses); //lo ordena alfabeticamente A-Z, con un arreglo de numero los ordena de menor a mayor
rsort($meses); //lo ordena alcontario z-a, con un arreglo de numero los ordena de mayor a menor

//___________________________________________________________________________________________

//ciclo for recorrer

for($i = 0; $i < count($meses); $i++){
    echo $meses[$i];
}

//ciclo whila

$contador = 1;

while($contador < count($meses)){
echo $meses[$contador];

$contador++;
}

//recorrer arreglo asociativo, tambien se puede encontrar un foreach dentro de otro foreach
$comidas = array('arroz' => 'pollo', 'frijol' => 'carne');

foreach($comidas as $comida => $valor){
    echo '<li>' .$comida. ':' .$valor .'</li>';
}
