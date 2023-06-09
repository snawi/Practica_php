<?php
// es util para mostrar el codigo a siertos usuarios
// operadores logicos &&, || , xor=es para que se cumpla solo una
//operadores condicion ==, >, <, !=, !, shift + ||
//else, else if de lo contrario
//se puede hacer varios if dentro de otro if
//tambien podemos colocar un boolean true o false

$edad = 34;
$nombre = 'wilmer';


 if($edad != 18){
    echo 'puedes comprar';
}else{
    echo 'no puedes comprar';
}

 if($edad >= 18 && $nombre == 'wilmer'){
echo 'usuario registrado';
}else{
    echo'el usuario no coincide';
}


$mes = 'diciembre';

/if ($mes != 'diciembre') {
    echo 'feliz año';
}else{
    if($mes == 'enero'){
    echo 'ya se acabo el año';
    }
} 


if ($mes == 'diciembre') {
    echo 'feliz año';
}else if($mes == 'enero'){
    echo 'nada';
}else{
    echo 'no se celebra nada';
}


?>