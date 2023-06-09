<?php
//isset nos devuelve true o false
//se lee asi si existe la condicion ejecuta esto de lo contraio ejecuta esto

$edad = 18;

$edad = (isset($edad)) ? $edad : 'el usuario no establecio su edad';
/* 
echo $edad; */