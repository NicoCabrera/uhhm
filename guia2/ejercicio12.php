<?php 
/* Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden 
de las letras del Array.   */
//$palabra="hola";
function InvertirPalabras($palabra)
{
    echo "Palabra: $palabra <br>Inversion:".strrev($palabra);
}
InvertirPalabras("hola");
?>