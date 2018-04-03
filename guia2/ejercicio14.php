<?php 
/* Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE si este número es par ó 
FALSE si es impar.  Reutilizando el código anterior, crear la función esImpar.  */


function esPar($entero)
{
    if ($entero%2==0)
    {
       return TRUE;
    }
    else
    {
        return FALSE;
    }

}
function esImpar($entero)
{
    if ($entero%2!=0)
    {
       return TRUE;
    }
    else
    {
        return FALSE;
    }

}
$entero2=$_POST["numeros"];
if (esImPar($entero2)==TRUE)
{
    echo "$entero2 es un numero Impar";
}
else if(esPar($entero2)==TRUE)
{
    echo"$entero2 es un numero par";
}
?>